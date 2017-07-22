<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\helpers\Html;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Task;
use app\models\TaskForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'add', 'update', 'delete', 'edit'],
                'rules' => [
                    [
                        'actions' => ['logout', 'add', 'update', 'delete', 'edit'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return Yii::$app->response->redirect(['site/tasks']);
        }
        
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    
    
    /**
     * Add task action.
     *
     * @return Response|sting
     */
    public function actionAdd() {
        
        $model = new TaskForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Task::addTask($model);
            return Yii::$app->response->redirect(['site/tasks']);
        } 
        
        return $this->render('add', compact('model'));
    }
    
    
    /**
     * View all tasks action.
     *
     * @return sting
     */
    public function actionTasks() {
        
        $tasks = Task::getTasks();
        
        return $this->render('tasks', compact('tasks') );
    }
    
    /**
     * View one task by ID action.
     *
     * @param $id integer
     * @return sting|Response
     */
    public function actionTask($id = null) {
        if (is_numeric($id)) {
            if (Task::find()->where(['id' => Html::encode($id)])->exists()) {
                $task = Task::getTask(Html::encode($id));
                return $this->render('task', compact('task', 'id'));
            }  
        }
        return $this->goHome();
    } 
    
    /**
     * Update task action.
     *
     * @param $id integer
     * @return sting Response|string|Response
     */
    public function actionUpdate($id = null) {
        if (is_numeric($id)) {
            if (Task::find()->where(['id' => Html::encode($id)])->exists()) {
                $task = Task::getTask(Html::encode($id));
                $model = new TaskForm();
                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                    Task::updateTask(Html::encode($id), $model);
                    return Yii::$app->response->redirect(['site/tasks']);
                } 
                return $this->render('update', compact('task', 'model'));
            }
        }
        return $this->goHome();    
    }
    
        
    /**
     * Delete task action.
     *
     * @param $id integer
     * @return Response|Response
     */
    public function actionDelete($id = null) {
        if (is_numeric($id)) {
            if (Task::find()->where(['id' => Html::encode($id)])->exists()) {
                Task::deleteTask(Html::encode($id));
                return Yii::$app->response->redirect(['site/tasks']);
            }
           
        }
        return $this->goHome();
    }     
        
    /**
     * Edit task action.
     *
     * @param $id integer
     * @return sting
     */
    public function actionEdit($id = null) {
        if (is_numeric($id)) {
            if (Task::find()->where(['id' => Html::encode($id)])->exists()) {
                Task::editTask(Html::encode($id));
                return Yii::$app->response->redirect(['site/tasks']);
            }
           
        } 
        return $this->goHome();
    } 
    
}
