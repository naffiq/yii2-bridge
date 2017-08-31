<?php

use yii\db\Migration;

/**
 * Handles the creation of table `menus`.
 */
class m170831_122730_create_menus_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('menus', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'roles' => $this->text(),
            'is_active' => $this->boolean()->notNull()->defaultValue(1),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('menus');
    }
}
