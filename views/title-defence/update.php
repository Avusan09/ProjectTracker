<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TitleDefence */

$this->title = 'Update Title Defence: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Title Defences', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="title-defence-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
