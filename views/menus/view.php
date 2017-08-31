<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model naffiq\bridge\models\Menus */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Menuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['contextMenuItems'] = [
    ['update', 'id' => $model->id],
    ['delete', 'id' => $model->id]
];

$this->registerJs(<<<JS
$('#menu-list').sortableLists( {} );

JS
)
?>
<div class="row">
    <div class="col-lg-8 detail-view-wrap">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'title',
                'roles:ntext',
                'is_active',
            ],
        ]) ?>

        <ul id="menu-list">
            <li>
                <div>Whatever you want here</div>
                <ul>
                    <li>
                        <div>Nested list item</div>
                    </li>
                    <li>
                        <div>Another item</div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>