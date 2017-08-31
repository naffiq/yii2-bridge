<?php

/* @var $this yii\web\View */
/* @var $model naffiq\bridge\models\Menus */

$this->title = 'Update Menus: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Menuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>


