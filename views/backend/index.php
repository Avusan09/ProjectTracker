<?php
/* @var $this yii\web\View */
?>
<h1>Admin Panel Home</h1>

<div class="row">

    <div class="col s12 m6">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Users</span>
                <p>Manage Users</p>
        </div>
            <div class="card-action">
                <?php if(Yii::$app->user->can('admin')){

                ?>
                <a href="<?= \yii\helpers\Url::toRoute('/user/admin') ?>">View</a>
                <?php }
                else
                { ?>
                    <a href="<?= \yii\helpers\Url::toRoute('/user/admin') ?>"></a>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="col s12 m6">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Projects</span>
                <p>Manage Projects</p>
            </div>
            <div class="card-action">
                <a href="<?= \yii\helpers\Url::toRoute('/project/index') ?>">View</a>

            </div>
        </div>
    </div>

    <div class="col s12 m3">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Title Defence</span>
                <p>Manage Title Defence</p>
            </div>
            <div class="card-action">
                <a href="<?= \yii\helpers\Url::toRoute('/title-defence/index') ?>">View</a>

            </div>
        </div>
    </div>
    <div class="col s12 m3">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Mid Defence</span>
                <p>Manage Mid Term Defences</p>
            </div>
            <div class="card-action">
                <a href="<?= \yii\helpers\Url::toRoute('/mid-term/index') ?>">View</a>

            </div>
        </div>
    </div>
    <div class="col s12 m3">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Final Defence</span>
                <p>Manage Final Defence</p>
            </div>
            <div class="card-action">
                <a href="<?= \yii\helpers\Url::toRoute('/final-term/index') ?>">View</a>

            </div>
        </div>
    </div>
    <div class="col s12 m3">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Documentation</span>
                <p>Manage Documents</p>
            </div>
            <div class="card-action">
                <a href="<?= \yii\helpers\Url::toRoute('/documentation/index') ?>">View</a>

            </div>
        </div>
    </div>

</div>
