<?php

/* @var $this yii\web\View */
/* @var $model naffiq\bridge\models\Menus */

$this->title = 'Create Menus';
$this->params['breadcrumbs'][] = ['label' => 'Menuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>

