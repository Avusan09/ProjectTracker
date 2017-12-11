<nav class="blue-grey">
    <div class="nav-wrapper">
        <a href="/pt/web" class="brand-logo left">Project Tracker</a>


        <ul class="right hide-on-med-and-down">
            <?php
            if(Yii::$app->user->isGuest) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= \yii\helpers\Url::toRoute("/user/login") ?> ">Login</a>
                </li>
            <?php } else {?>

                <li class="nav-item">
                    <?php  if(Yii::$app->user->can('admin'))
                    { ?>
                        <a class="nav-link" href="<?= \yii\helpers\Url::toRoute("admin/index") ?> ">
                            <?= ucfirst((Yii::$app->user->identity->username)) ?>
                        </a>

                    <?php }
                    else
                    { ?>
                        <a class="nav-link" href="<?= \yii\helpers\Url::toRoute("user/" . Yii::$app->getUser()->id . " " ) ?> ">
                            <?= ucfirst((Yii::$app->user->identity->username)) ?>
                        </a>

                    <?php } ?>


                </li>
                <li>
                    <a class="nav-link" data-method="post" href="<?= \yii\helpers\Url::toRoute("/user/logout") ?> ">
                        Logout
                    </a>
                </li>

            <?php }  ?>

        </ul>
    </div>
</nav>