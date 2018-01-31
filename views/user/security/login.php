<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use dektrium\user\widgets\Connect;
use dektrium\user\models\LoginForm;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var dektrium\user\models\LoginForm $model
 * @var dektrium\user\Module $module
 */

$this->title = Yii::t('user', 'Sign in');
//$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>
<br><br>

    <div class="row">
        <div class="col m6 col s6  card">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
                </div>
                <div class="panel-body">
                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form',
                        'enableAjaxValidation' => true,
                        'enableClientValidation' => false,
                        'validateOnBlur' => false,
                        'validateOnType' => false,
                        'validateOnChange' => false,
                    ]) ?>

                    <?php if ($module->debug): ?>
                        <?= $form->field($model, 'login', [
                            'inputOptions' => [
                                'autofocus' => 'autofocus',
                                'class' => 'form-control',
                                'tabindex' => '1']])->dropDownList(LoginForm::loginList());
                        ?>

                    <?php else: ?>

                        <?= $form->field($model, 'login',
                            ['inputOptions' => ['autofocus' => 'autofocus', 'class' => 'form-control', 'tabindex' => '1']]
                        );
                        ?>

                    <?php endif ?>

                    <?php if ($module->debug): ?>
                        <div class="alert alert-warning">
                            <?= Yii::t('user', 'Password is not necessary because the module is in DEBUG mode.'); ?>
                        </div>
                    <?php else: ?>
                        <?= $form->field(
                            $model,
                            'password',
                            ['inputOptions' => ['class' => 'form-control', 'tabindex' => '2']])
                            ->passwordInput()
                            ->label(
                                Yii::t('user', 'Password')
                                . ($module->enablePasswordRecovery ?
                                    ' (' . Html::a(
                                        Yii::t('user', 'Forgot password?'),
                                        ['/user/recovery/request'],
                                        ['tabindex' => '5']
                                    )
                                    . ')' : '')
                            ) ?>
                    <?php endif ?>

                    <?= $form->field($model, 'rememberMe')->checkbox(['tabindex' => '3']) ?>

                    <?= Html::submitButton(
                        Yii::t('user', 'Sign in'),
                        ['class' => 'btn btn-primary btn-block', 'tabindex' => '4']
                    ) ?>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <?php if ($module->enableConfirmation): ?>
                <p class="text-center">
                    <?= Html::a(Yii::t('user', 'Didn\'t receive confirmation message?'), ['/user/registration/resend']) ?>
                </p>
            <?php endif ?>
            <?php if ($module->enableRegistration): ?>
                <p class="text-center">
                    <?= Html::a(Yii::t('user', 'Don\'t have an account? Sign up!'), ['/user/registration/register']) ?>
                </p>
            <?php endif ?>
            <?= Connect::widget([
                'baseAuthUrl' => ['/user/security/auth'],
            ]) ?>
        </div>
        <div class="col m6">
            <div style="position:relative;top:10%;left:10%;width: 100%">
                <h3 >Project Tracker</h3>
                <h5 class="text-muted">Convenient is an understatement</h5>
                <hr>
                <ul style="list-style-type: none;font-size:130%">
                    <li><i class="material-icons">equalizer</i>  View The Progress of the Projects</li>
                    <li><i class="material-icons">file_upload</i> Upload and distribute your work</li>
                    <li><i class="material-icons">feedback</i> UnderDevelopment.</li>


                </ul>


            </div>
        </div>
    </div>


<br>
