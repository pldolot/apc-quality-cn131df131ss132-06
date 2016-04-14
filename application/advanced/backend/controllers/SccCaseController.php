<?php

namespace backend\controllers;

use Yii;
use common\models\Ticket;
use common\models\SccCase;
use common\models\SccCaseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SccCaseController implements the CRUD actions for SccCase model.
 */
class SccCaseController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all SccCase models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SccCaseSearch();
        // $ticketModel = new Ticket();
        
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        // $ticketProvider = $ticketModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            // 'ticketModel' => $ticketModel,
            // 'ticketProvider' => $ticketProvider
        ]);

        
    }

    /**
     * Displays a single SccCase model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $ticket = new Ticket();

        return $this->render('view', [
            'model' => $this->findModel($id),
            'ticket' => $this->findModel($id)
        ]);
    }

    /**
     * Creates a new SccCase model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SccCase();
        $ticket = new Ticket();


        if ($model->load(Yii::$app->request->post())) {
            $model->c_date_time = date('Y-m-d h:m:s ');
            $model->save();
            return $this->redirect(['view', 'id' => $model->case_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'ticket' => $ticket,
            ]);
        }
    }

    /**
     * Updates an existing SccCase model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->case_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SccCase model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SccCase model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SccCase the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SccCase::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
