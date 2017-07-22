<?php

$this->title = 'Задание';
?>

<section id="task">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
               <h2 class="text-center">Задание</h2>
                <div class="task">
                    <div class="task-name"><strong><?= $task->name ?></strong></div>
                    <div class="task-description text-justify"><?= $task->description ?></div>
                    <div class="task-date text-right"><?= $task->date ?></div>
                    <?php if(!Yii::$app->user->isGuest): ?>
                    <div class="control-panel">
                        <a href="<?= Yii::$app->urlManager->createUrl(['site/update', 'id' => $task->id]) ?>" title="Обновить" class="icon">
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-edit fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                        <?php if(!$task->complete): ?>
                        <a href="<?= Yii::$app->urlManager->createUrl(['site/edit', 'id' => $task->id]) ?>" title="Выполнено" class="icon">
                                    <span class="fa-stack">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-check-circle fa-stack-1x fa-inverse"></i>
                                    </span>
                        </a>
                        <?php endif; ?>
                        <a href="<?= Yii::$app->urlManager->createUrl(['site/delete', 'id' => $task->id]) ?>" title="Удалить" class="icon">
                            <span class="fa-stack">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-times fa-stack-1x fa-inverse"></i>
                            </span>
                        </a> 
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
