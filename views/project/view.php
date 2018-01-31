<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Project */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-view">
    <?php
    if (Yii::$app->user->can('student')) {
    ?>
    <style>
        a.same-user{
            display: none;
        }
    </style>
    <?php }
    ?>
    <h4><?= Html::encode($this->title) ?></h4>
    <?php
    $userid = Yii::$app->getUser()->id;

    if ($userid == $model->uid){


    ?>
        <style>
            a.same-user
            {
                display: inline;
            }
        </style>
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

    <?php }


    echo "Description: " .$model->description . "<br>";
    echo "Supervisor: " . $model->sup_name . "<br>";


    ?>

    <br>
    <?php
        $id = $_GET['id'];

    ?>
    <div class="row">
            <div class="col s12 m3">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Title Defence</span>
                        <?php
                        $tid = \app\models\TitleDefence::find()->where(['pid'=>$id])->one();

                        if($tid)
                        { ?>
                        <p>Marks:  <?= $tid->marks; ?> <br>
                            Accepted  <?= $tid->accepted; ?>:
                        </p>




                    </div>
                    <div class="card-action">

                        <a class="same-user" href="<?= \yii\helpers\Url::toRoute('/title-defence/view?id=' .  $tid->id . ' ') ?>">View Status</a>

                        <?php }
                        else
                        {?>

                        <a class="same-user" href="<?= \yii\helpers\Url::toRoute('/title-defence/create') ?>">View Status</a>
                        <?php }
                        ?>




                    </div>
                </div>
            </div>
        <div class="col s12 m3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Mid Defence</span>
                    <?php
                    $mid = \app\models\MidTerm::find()->where(['pid'=>$id])->one();
                     if($mid)
                        { ?>
                        <p>Marks:  <?= $mid->marks; ?> <br>
                            Accepted  <?= $mid->accepted; ?>:
                        </p>




                    </div>
                    <div class="card-action">

                        <a class="same-user" href="<?= \yii\helpers\Url::toRoute('/mid-term/view?id=' .  $mid->id . ' ') ?>">View Status</a>

                        <?php }
                        else
                        {?>

                        <a class="same-user" href="<?= \yii\helpers\Url::toRoute('/mid-term/create') ?>">View Status</a>
                        <?php }
                        ?>




                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Final Defence</span>
                    <?php
                    $fid = \app\models\FinalTerm::find()->where(['pid'=>$id])->one(); 
                    if($fid)
                        { ?>
                        <p>Marks:  <?= $fid->marks; ?> <br>
                            Accepted  <?= $fid->accepted; ?>:
                        </p>




                    </div>
                    <div class="card-action">

                        <a class="same-user" href="<?= \yii\helpers\Url::toRoute('/mid-term/view?id=' .  $fid->id . ' ') ?>">View Status</a>

                        <?php }
                        else
                        {?>

                        <a class="same-user" href="<?= \yii\helpers\Url::toRoute('/mid-term/create') ?>">View Status</a>
                        <?php }
                        ?>



                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Documentation</span>
                    <?php
                    $doc = \app\models\Documentation::find()->where(['pid'=>$id])->one();
                     if($doc)
                        { ?>
                        <p>Marks:  <?= $doc->marks; ?> <br>
                            Accepted  <?= $doc->accepted; ?>:
                        </p>




                    </div>
                    <div class="card-action">

                        <a class="same-user" href="<?= \yii\helpers\Url::toRoute('/mid-term/view?id=' .  $doc->id . ' ') ?>">View Status</a>

                        <?php }
                        else
                        {?>

                        <a class="same-user" href="<?= \yii\helpers\Url::toRoute('/mid-term/create') ?>">View Status</a>
                        <?php }
                        ?>




                </div>
            </div>
        </div>
        <div class="col s12 m12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Total : <?php if($tid && $mid && $fid && $doc){
                            echo $total =  ($mid->marks + $tid->marks + $fid->marks + $doc->marks)/4 ;  ?></span><br>
                    <p> Status :
                         <?php if($total > 40)
                        {
                            echo "Passed";
                        }
                        else
                        {
                            echo "Failed";
                        }}?>
                    </p>

                </div>

            </div>
        </div>

    </div>

</div>
