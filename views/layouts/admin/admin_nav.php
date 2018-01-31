<div class="div" style="padding-left: 150px;margin-top: -30px">
<nav class="blue-grey">
    <div class="nav-wrapper">
        <a href="/pt/web/backend/index" class="brand-logo left">Admin Panel</a>


        <ul class="right hide-on-med-and-down">
            <?php
            if(Yii::$app->user->isGuest) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= \yii\helpers\Url::toRoute("/user/login") ?> ">Login</a>
                </li>
            <?php } else {?>
                <li>

                </li>

                <li class="nav-item">
                    <?php  if(Yii::$app->user->can('admin'))
                    { ?>
                        <a class="nav-link" href="<?= \yii\helpers\Url::toRoute("/admin/index") ?> ">
                            <?= ucfirst((Yii::$app->user->identity->username)) ?>
                        </a>
                    <?php }
                    else
                    { ?>

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
</div>