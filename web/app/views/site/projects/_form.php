<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Projects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'project_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'short_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'full_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'link')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'category')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
