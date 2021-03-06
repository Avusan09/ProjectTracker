<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Documentation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="documentation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'document')->textarea(['rows' => 2]) ?>

    <?php if(Yii::$app->user->can('evaluator')) { ?>

        <?= $form->field($model, 'marks')->textInput() ?>

        <?= $form->field($model, 'remarks')->textarea(['rows' => 2]) ?>

        <?= $form->field($model, 'accepted')->textInput() ?>

    <?php } ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
