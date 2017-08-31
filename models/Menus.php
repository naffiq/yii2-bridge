<?php

namespace naffiq\bridge\models;

use Da\User\Model\User;
use Yii;
use naffiq\bridge\models\query\MenusQuery;

/**
 * This is the model class for table "menus".
 *
 * @property integer $id
 * @property string $title
 * @property string|array $roles
 * @property integer $is_active
 */
class Menus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['roles'], 'safe'],
            [['is_active'], 'integer', 'on' => ['create', 'update']],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'roles' => 'Roles',
            'is_active' => 'Is Active',
        ];
    }
    
    /**
     * @inheritdoc
     * @return MenusQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MenusQuery(get_called_class());
    }

    /**
     * @inheritdoc
     */
    public function afterFind()
    {
        parent::afterFind();

        if ($this->rightScenario()) {
            $this->roles = json_decode($this->roles);
        }
    }

    /**
     * @inheritdoc
     */
    public function beforeValidate()
    {
        $result = parent::beforeValidate();
        if ($this->rightScenario()) {
            $this->roles = json_encode($this->roles);
        }
        return $result;
    }

    private function rightScenario()
    {
        return in_array($this->scenario, ['create', 'update']);
    }

    /**
     * Returns `true` if current user is allowed to access menu
     *
     * @return bool
     */
    public function shouldSee()
    {
        foreach ($this->roles as $role) {
            if (!\Yii::$app->user->can($role)) {
                return false;
            }
        }

        return true;
    }

}
