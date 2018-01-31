<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MidTerm */

$this->title = 'Upload your Document ';

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mid-term-create">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
