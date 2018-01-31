<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Documentation */

$this->title = 'Update Documentation: {nameAttribute}';

?>
<div class="documentation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
