<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TitleDefence */

$this->title = 'Create Title Defence';
$this->params['breadcrumbs'][] = ['label' => 'Title Defences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="title-defence-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
