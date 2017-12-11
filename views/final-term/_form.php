<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FinalTerm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="final-term-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'document')->textarea(['rows' => 2]) ?>


    <?= $form->field($model, 'marks')->textInput() ?>

    <?= $form->field($model, 'remarks')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'accepted')->textInput() ?>

    <?= $form->field($model, 'demo')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
