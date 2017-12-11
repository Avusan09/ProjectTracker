<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MidTerm */

$this->title = 'Create Mid Term';
$this->params['breadcrumbs'][] = ['label' => 'Mid Terms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mid-term-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
