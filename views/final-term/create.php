<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FinalTerm */

$this->title = 'Create Final Term';
$this->params['breadcrumbs'][] = ['label' => 'Final Terms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="final-term-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
