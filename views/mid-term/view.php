<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MidTerm */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mid Terms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mid-term-view">


    <hr>
    <h4>
        <?php
        $projects = \app\models\Project::find()->all();
        $userid = Yii::$app->getUser()->id;
        foreach ($projects as $index=>$project)
        {
            if($project->uid === $userid)
            {
                echo "<h1>" . $project->name . ": Mid Defence </h1>";
                echo "<hr>";
                echo "<h5> Description : <em><u>" . $project->description . "</u></em></h5>";
                echo "<h5> Supervisor Name :<em><u>" .  $project->sup_name . "</u></em></h5>";
                echo "<h5> Username :<em><u>" .  Yii::$app->getUser()->identity->username . "</u></em></h5>";

            }
        }

        ?>
    </h4>



    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'document:ntext',
            'marks',
            'remarks',
            'accepted',


        ],
    ]) ?>

</div>
