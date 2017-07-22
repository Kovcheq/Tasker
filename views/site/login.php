<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Авторизация';
?>    
    <section id="log-in-form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 text-center">
                    <?php $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'options' => [
                                'class' => 'form_shadow text-center'
                            ]
                        ]); ?>
                    <h2>Авторизация</h2>
                        <?= $form->field($model, 'username')->textInput(['class' => 'btn input-xl'])->label(false) ?>
                        <?= $form->field($model, 'password')->passwordInput(['class' => 'btn input-xl'])->label(false) ?>
                        <div class="form-group">
                            <?= Html::submitButton('Войти', ['class' => 'btn btn-md', 'name' => 'login-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </section> 