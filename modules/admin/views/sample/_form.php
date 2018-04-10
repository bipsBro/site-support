<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sample */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sample-form">

    <?php $form = ActiveForm::begin([
    	'enableAjaxValidation' => true,
    	]); ?>

    <?= $form->field($model, 'name', ['options' => ['class'=>'form-group label-floating']])->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'title', ['options' => ['class'=>'form-group label-floating']])->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status', ['options' => ['class'=>'form-group label-floating']])->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
