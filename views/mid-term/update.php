<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MidTerm */

$this->title = 'Update Mid Term: ';
$this->params['breadcrumbs'][] = ['label' => 'Mid Terms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mid-term-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
