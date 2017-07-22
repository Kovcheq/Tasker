<?php

/* @var $this yii\web\View */
use app\assets\HomeAsset;

HomeAsset::register($this);
$this->title = 'My Tasker';
?>


    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="intro-text text-center">
                    <div class="intro-heading">Дружище, у нас сегодня много дел.</div>
                    <div class="intro-lead-in">Давай же посмотрим, что нам еще нужно сегодня сделать?</div>
                    <a href="<?= Yii::$app->urlManager->createUrl(['site/tasks']) ?>" class="page-scroll btn btn-xl">Давай смотреть!</a>
                </div>
            </div>
        </div>
    </header>
    
        
    <section id="advantages">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center section-name">
                    <h2>Преимущества</h2>
                    <h3>Почему планировать это здорово</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-4 text-center advantage">
                    <span class="fa-stack fa-3x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Практично</h4>
                    <p class="text-muted">Мозг не перегружен планируем. Все записано в одном месте. </p>
                </div>
                <div class="col-sm-6 col-md-4 text-center advantage">
                    <span class="fa-stack fa-3x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-line-chart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Эффективно</h4>
                    <p class="text-muted">Все записано и ничего от нас не убежит. Просто выполняем все задания по очереди.</p>
                </div>
                <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-0 text-center advantage">
                    <span class="fa-stack fa-3x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Доступно</h4>
                    <p class="text-muted">Открываю на любом устройстве и в любом месте.</p>
                </div>
            </div>
        </div>
    </section>
    
    <?php if(Yii::$app->user->isGuest): ?>
    <section id="log-in">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                   <span>Авторизуйся, что бы управлять заданиями!</span>
                    <a href="<?= Yii::$app->urlManager->createUrl(['site/login']) ?>" class="page-scroll btn btn-inverse btn-md">Войти!</a>
                </div>
            </div>
        </div>
    </section>
    <?php endif;?>