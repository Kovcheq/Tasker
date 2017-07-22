<?php

use yii\widgets\LinkPager;

$this->title = 'Задания';
?>
    <section class="links">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2>Все задания</h2>
                    
                    <div class="table-responsive">
                        <table class="table table-hover text-left">
                        <thead>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Описание</th>
                            <th>Дата создания</th>
                            <th class="text-center">Статус</th>
                            <th class="text-center">Управление</th>
                        </thead>
                        <?php foreach($tasks as $task): ?>
                        <tr>
                            <td><?= $task->id?></td>
                            <td><?= $task->name ?></td>
                            <td><?= $task->description ?></td>
                            <td><?= $task->date ?></td>
                            <?php if($task->complete): ?>
                            <td class="icon text-center">
                                <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-check-circle fa-stack-1x fa-inverse"></i>
                                </span>
                            </td>
                            <?php else: ?>
                            <td class="icon text-center">
                                <span class="fa-stack">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-minus fa-stack-1x fa-inverse"></i>
                                </span>
                            </td>
                            <?php endif; ?>
                            
                            <td class="text-center">
                                <a href="<?= Yii::$app->urlManager->createUrl(['site/task', 'id' => $task->id]) ?>" title="Смотреть" class="icon">
                                    <span class="fa-stack">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                                <?php if(!Yii::$app->user->isGuest): ?>
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
                                
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                 
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
