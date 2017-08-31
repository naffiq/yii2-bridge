<?php

use yii\bootstrap\Html;
use naffiq\bridge\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model naffiq\bridge\models\Menus */
/* @var $form naffiq\bridge\widgets\ActiveForm */
?>

<div class="row">
    <div class="col-lg-5">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'roles')->select2(\yii\helpers\ArrayHelper::map(\Yii::$app->authManager->getRoles(), 'name', 'name'), [
            'options' => [
                'multiple' => true
            ],
        ]) ?>
        <?php var_dump(\Yii::$app->authManager->getRoles()) ?>

        <?= $form->field($model, 'is_active')->switchInput() ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>