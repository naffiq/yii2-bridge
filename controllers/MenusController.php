<?php

namespace naffiq\bridge\controllers;

/**
 * MenusController implements the CRUD actions for [[naffiq\bridge\models\Menus]] model.
 * @see \naffiq\bridge\models\Menus
 */
class MenusController extends BaseAdminController
{
    /**
     * @inheritdoc
     */
    public $modelClass = 'naffiq\bridge\models\Menus';
    /**
     * @inheritdoc
     */
    public $searchModelClass = 'naffiq\bridge\models\search\MenusSearch';

    /**
     * @inheritdoc
     */
    public $createScenario = 'create';

    /**
     * @inheritdoc
     */
    public $updateScenario = 'update';

}
