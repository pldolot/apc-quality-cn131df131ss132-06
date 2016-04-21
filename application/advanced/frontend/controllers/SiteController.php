<?php
namespace frontend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
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
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
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
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        //$this->layout = 'loginLayout';
        if (!\Yii::$app->user->isGuest) {
           return $this->goHome();
        }
        //if(Yii::app()->user->checkAccess('hrManager',Yii::app()->user->getId())){
       //     $this->redirect(array('employee/index'));
       // }else if(Yii::app()->user->checkAccess('registrar',Yii::app()->user->getId())){
        //    $this->redirect(array('profile/index'));   
       // }else if(Yii::app()->user->checkAccess('Agent',Yii::app()->user->getId())){
      //      $this->redirect(array('profile/index'));
     //   }else if(Yii::app()->user->checkAccess('teamLeader',Yii::app()->user->getId())){
      //      $this->redirect(array('profile/index'));
      //  }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    public function actionOperation()
    {
        

    
    }
}
