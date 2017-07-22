<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Добавить';
?>
    <section id="log-in-form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 text-center">
                    <?php $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'options' => [
                                'class' => 'form_shadow text-center'
                            ]
                        ]); ?>
                    <h2>Добавить</h2>
                        <?= $form->field($model, 'name')->textInput([
                            'autofocus' => true, 
                            'class' => 'btn input-full', 
                            'placeholder' => 'Название'
                        ])->label(false) ?>
                        <?= $form->field($model, 'description')->textArea([
                            'class' => 'btn input-full',
                            'placeholder' => 'Описание'
                        ])->label(false) ?>
                        <div class="form-group">
                            <?= Html::submitButton('Добавить', ['class' => 'btn btn-md', 'name' => 'login-button']) ?>
                        </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </section> 