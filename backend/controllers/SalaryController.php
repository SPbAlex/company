<?php

namespace backend\controllers;

use console\perm\AuditTable;
use console\perm\UserRole;
use Yii;
use common\models\Salary;
use backend\models\SalarySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SalaryController implements the CRUD actions for Salary model.
 */
class SalaryController extends Controller
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
     * Lists all Salary models.
     *
     * @throws NotFoundHttpException
     * @return mixed
     */
    public function actionIndex()
    {
        if (!UserRole::getAccess(new Salary(), 'select', false)) {
            AuditTable::listen(Yii::$app->user->id,  'salary', 're_select');
            throw new NotFoundHttpException('Access denied');
        } else {
            AuditTable::listen(Yii::$app->user->id,  'salary', 'select');
        }

        $searchModel = new SalarySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Salary model.
     *
     * @param integer $id
     * @throws NotFoundHttpException
     * @return mixed
     */
    public function actionView($id)
    {
        if (!UserRole::getAccess(new Salary(), 'select', false)) {
            AuditTable::listen(Yii::$app->user->id,  'salary', 're_select');
            throw new NotFoundHttpException('Access denied');
        } else {
            AuditTable::listen(Yii::$app->user->id,  'salary', 'select');
        }

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Salary model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     *
     * @throws NotFoundHttpException
     * @return mixed
     */
    public function actionCreate()
    {
        if (!UserRole::getAccess(new Salary(), 'insert', true)) {
            AuditTable::listen(Yii::$app->user->id,  'salary', 're_insert');
            throw new NotFoundHttpException('Access denied');
        } else {
            AuditTable::listen(Yii::$app->user->id,  'salary', 'insert');
        }

        $model = new Salary();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Salary model.
     * If update is successful, the browser will be redirected to the 'view' page.
     *
     * @param integer $id
     * @throws NotFoundHttpException
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if (!UserRole::getAccess(new Salary(), 'update', false)) {
            AuditTable::listen(Yii::$app->user->id,  'salary', 're_update');
            throw new NotFoundHttpException('Access denied');
        } else {
            AuditTable::listen(Yii::$app->user->id,  'salary', 'update');
        }

        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Salary model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     *
     * @param integer $id
     * @throws NotFoundHttpException
     * @throws \Exception
     * @return mixed
     */
    public function actionDelete($id)
    {
        if (!UserRole::getAccess(new Salary(), 'delete', true)) {
            AuditTable::listen(Yii::$app->user->id,  'salary', 're_delete');
            throw new NotFoundHttpException('Access denied');
        } else {
            AuditTable::listen(Yii::$app->user->id,  'salary', 'delete');
        }

        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Salary model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Salary the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Salary::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
