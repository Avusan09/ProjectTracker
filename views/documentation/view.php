<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Documentation */

$this->title = "Project Tracker";

?>
<div class="documentation-view">
    <hr>
    <h4>
        <?php
        $projects = \app\models\Project::find()->where(['id' => $model->pid])->one();
        $profile = \dektrium\user\models\Profile::find()->where(['user_id' => $projects->uid])->one();
        $userid = Yii::$app->getUser()->id;
        {
            echo "<h3><a href='" . \yii\helpers\Url::toRoute('/project/view?id=' .  $model->pid). "' >" . $projects->name . "</a>: Documentaion </h3>";
            echo "<hr>";
            echo "<h5> Description : <em><u>" . $projects->description . "</u></em></h5>";
            echo "<h5> Supervisor Name :<em><u>" .  $projects->sup_name . "</u></em></h5>";
            echo "<h5> Username :<em><u>" .  $profile->name . "</u></em></h5>";
        }

        ?>
    </h4>


    <?php
    if ($userid == $model->uid){
        ?>
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>  <?php } ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'document:url',
            'remarks:ntext',
            'marks',
            'accepted',

        ],
    ]) ?>

</div>
