<?php

namespace app\models;

use yii\db\ActiveRecord;

class TaskForm extends ActiveRecord {
    
    /**
     * @var $name string
     */
    public $name;
    /**
     * @var $description string
     */
    public $description;
    
        
    public function  rules() {
        return [
            [['name', 'description'], 'required'],
            [['name', 'description'], 'string','max' => 255]
        ];
    }
    
    public function attributeLabels()
    {
        return array(
            'name' => 'Название',
            'description' => 'Описание',
        );
    }
    
}