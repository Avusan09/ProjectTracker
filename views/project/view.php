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

    <h4><?= Html::encode($this->title) ?></h4>

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

    <?php

    echo $model->name . "<br>";
    echo $model->description . "<br>";
    echo $model->sup_name . "<br>";
    echo Yii::$app->user->identity->username;

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
                        <p>Title Defence. <br>
                            Accepted :
                        </p>
                    </div>
                    <div class="card-action">
                        <?php
                        $title = \app\models\TitleDefence::find()->where(['pid'=>$id])->one();
                        if($title)
                        {

                        $tid = $title->id;
                        ?>
                        <a href="<?= \yii\helpers\Url::toRoute('/title-defence/view?id=' .  $tid . ' ') ?>">View Status</a>

                        <?php }
                        else
                        {?>

                        <a href="<?= \yii\helpers\Url::toRoute('/title-defence/create') ?>">View Status</a>
                        <?php }
                        ?>




                    </div>
                </div>
            </div>
        <div class="col s12 m3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Mid Defence</span>
                    <p>Mid Defence<br>
                        Accepted :
                    </p>
                </div>
                <div class="card-action">
                    <?php
                    $mid = \app\models\MidTerm::find()->where(['pid'=>$id])->one();
                    if($mid)
                    {

                        $mid = $mid->id;
                        ?>
                        <a href="<?= \yii\helpers\Url::toRoute('/mid-term/view?id=' .  $mid . ' ') ?>">View Status</a>

                    <?php }
                    else
                    {?>

                        <a href="<?= \yii\helpers\Url::toRoute('/mid-term/create') ?>">View Status</a>
                    <?php }
                    ?>




                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Final Defence</span>
                    <p>Final Defence. <br>
                        Accepted :
                    </p>
                </div>
                <div class="card-action">
                    <?php
                    $final = \app\models\FinalTerm::find()->where(['pid'=>$id])->one();
                    if($final)
                    {

                        $fid = $final->id;
                        ?>
                        <a href="<?= \yii\helpers\Url::toRoute('/final-term/view?id=' .  $fid . ' ') ?>">View Status</a>

                    <?php }
                    else
                    {?>

                        <a href="<?= \yii\helpers\Url::toRoute('/final-term/create') ?>">View Status</a>
                    <?php }
                    ?>




                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Documentation</span>
                    <p>Documentation<br>
                        Accepted :
                    </p>
                </div>
                <div class="card-action">
                    <?php
                    $doc = \app\models\Documentation::find()->where(['pid'=>$id])->one();
                    if($doc)
                    {

                        $doc = $doc->id;
                        ?>
                        <a href="<?= \yii\helpers\Url::toRoute('/documentation/view?id=' .  $doc . ' ') ?>">View Status</a>

                    <?php }
                    else
                    {?>

                        <a href="<?= \yii\helpers\Url::toRoute('/documentation/create') ?>">View Status</a>
                    <?php }
                    ?>




                </div>
            </div>
        </div>

    </div>

</div>
