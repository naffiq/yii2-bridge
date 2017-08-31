<?php

namespace naffiq\bridge\models\query;

use naffiq\bridge\models\Menus;

/**
 * This is the ActiveQuery class for [[Menus]].
 *
 * @see Menus
 */
class MenusQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Menus[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Menus|array|null
     */
    public function one($db = null)
    {
    return parent::one($db);
    }
}
