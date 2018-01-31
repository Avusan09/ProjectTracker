<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <h4><?= Html::encode($this->title) ?></h4>
    <?php Pjax::begin(); ?>
    <table class="responsive-table highlight">


        <thead>
        <tr>
            <th>ID</th>
            <th>Project Name</th>
            <th>Name</th>
            <th>Description</th>
            <th>Supervisor Name</th>

        </tr>
        </thead>


        <!--            $pid = $project->id;-->
        <!--            echo "<br>";-->
        <!--            echo $project->sup_name;-->
        <tbody>

    <?php
    $projects = \app\models\Project::find()->all();




    foreach ($projects as $index=>$project)
    {

        $user = \dektrium\user\models\User::find()->where(['id' => $project->uid])->one();
        $porjects = \app\models\Project::find()->where(['uid' =>$project->uid])->one();
    ?>

        <tr>
            <td> <?= $project->id?></td>
            <td><a href="<?= \yii\helpers\Url::toRoute('/project/view?id=' .  $porjects->id . ' ') ?>"><?= $project->name?></a></td>
            <td><a href="<?= \yii\helpers\Url::toRoute('/user/' .  $user->id . ' ') ?>"><?= $user->username?></td>

            <td><?= $project->description?></td>
            <td><?= $project->sup_name?></td>

        </tr>



    <?php }
    ?>
        </tbody>
        <?php Pjax::end(); ?>
    </table>

</div>
