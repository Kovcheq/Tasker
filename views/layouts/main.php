<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php Yii::$app->language; ?>">

<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700, 900|Open+Sans:300,400,600,700|Kaushan+Script:300,400,600,700|Roboto:300,400,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">

    <?php $this->head(); ?>
</head>

<body id="page-top">
<?php $this->beginBody(); ?>

    <?php
    NavBar::begin([
        'brandLabel' => 'Tasker',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-default navbar-custom navbar-fixed-top mainNav',
            'id' => 'mainNav',
        ],
    ]);
    echo Nav::widget([
        'options' => [
            'class' => 'nav navbar-nav navbar-right',
            'id' => 'menu',
        ],
        'items' => [
            [
                'label' => 'Добавить',
                'url' => ['site/add'],
                'active' => false,
                'visible' => !Yii::$app->user->isGuest
            ],
            [
                'label' => 'Задания',
                'url' => ['site/tasks'],
                'active' => false,
            ],
            Yii::$app->user->isGuest ? (
                ['label' => 'Войти', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Выйти',
                    ['class' => 'btn btn-inverse btn-a logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
    <?= $content ?>
   
    <section id="scroll-up" class="scroll-up">
        <a href="#page-top" >   
            <span class="fa-stack fa-2x">
                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-angle-double-up fa-stack-1x fa-inverse"></i>
            </span>
        </a>
    </section>
    
    
    <footer class="text-center">
        <div class="container">
            <a href="https://vk.com/id96251144" target="_blank">Cделано с любовью и трепетом &copy; 2017 by Kovcheq</a>
        </div>
    </footer>
<?php $this->endBody() ?> 
</body>
</html>
<?php $this->endPage() ?>

