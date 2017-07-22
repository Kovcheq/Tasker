<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\helpers\Html;

class Task extends ActiveRecord {
    
    
    /*
     * Add task
     *
     * @param $data object
     */
    public static function addTask($data) {
        $task = new Task();
        $task->name = Html::encode($data->name);
        $task->description = Html::encode($data->description);
        $task->save();
    } 
    
    /*
     * Get all tasks
     *
     * @return object
     */
    public static function getTasks() {
        $tasks = Task::find()->all();
        return $tasks;
    }
    
    /*
     * Get one task by ID
     *
     * @param $id integer
     * @return object|null
     */
    public static function getTask($id = null) {
        if (is_numeric($id)) {
            $task = Task::find()->where(['id' => Html::encode($id)])->one();
            return $task;
        } else {
            return  null;
        }
    }
    
    /*
     * Update task
     *
     * @param $id integer 
     * @param $data object
     */
    public static function updateTask($id = null, $data = null) {
        if (is_numeric($id)) {
            if (Task::find()->where(['id' => Html::encode($id)])->exists()) {
                $task = Task::getTask(Html::encode($id));
                $task->name = Html::encode($data->name);
                $task->description = Html::encode($data->description);
                $task->save();
            }
        }
    } 
    
    /*
     * Delete task
     *
     * @param $id integer
     */
    public static function deleteTask($id = null) {
        if (is_numeric($id)) {
            if (Task::find()->where(['id' => Html::encode($id)])->exists()) {
                $task = Task::getTask(Html::encode($id));
                $task->delete();
            }
        }
    }
    
    /*
     * Edit task
     *
     * @param $id integer
     */
    public static function editTask($id = null) {
        if (is_numeric($id)) {
            if (Task::find()->where(['id' => Html::encode($id)])->exists()) {
                $task = Task::getTask(Html::encode($id));
                $task->complete = true;
                $task->save();
            }
        }
    }
}