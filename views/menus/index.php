<?php

use yii\grid\GridView;
use yii2tech\admin\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel naffiq\bridge\models\MenusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menuses';
$this->params['breadcrumbs'][] = $this->title;
$this->params['contextMenuItems'] = [
    ['create']
];
?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'options' => ['class' => 'grid-view table-responsive'],
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id',
        'title',
        [
            'class' => 'naffiq\bridge\widgets\columns\TruncatedTextColumn',
            'attribute' => 'roles',
        ],
        'is_active',

        [
            'class' => ActionColumn::className(),
        ],
    ],
]); ?>
