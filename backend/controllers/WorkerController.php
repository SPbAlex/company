<?php

namespace backend\controllers;

use console\perm\AuditTable;
use console\perm\UserRole;
use Yii;
use common\models\Worker;
use backend\models\WorkerSearch;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WorkerController implements the CRUD actions for Worker model.
 */
class WorkerController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class'   => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Worker models.
     *
     * @throws NotFoundHttpException
     * @return mixed
     */
    public function actionIndex()
    {
        if (!UserRole::getAccess(new Worker(), 'select', false)) {
            AuditTable::listen(Yii::$app->user->id, 'worker', 're_select');
            throw new NotFoundHttpException('Access denied');
        } else {
            AuditTable::listen(Yii::$app->user->id, 'worker', 'select');
        }

        $searchModel = new WorkerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel'  => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Worker model.
     *
     * @param integer $id
     *
     * @throws NotFoundHttpException
     * @return mixed
     */
    public function actionView($id)
    {
        if (!UserRole::getAccess(new Worker(), 'select', false)) {
            AuditTable::listen(Yii::$app->user->id, 'worker', 're_select');
            throw new NotFoundHttpException('Access denied');
        } else {
            AuditTable::listen(Yii::$app->user->id, 'worker', 'select');
        }

        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Worker model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     *
     * @throws NotFoundHttpException
     * @return mixed
     */
    public function actionCreate()
    {
        if (!UserRole::getAccess(new Worker(), 'insert', true)) {
            AuditTable::listen(Yii::$app->user->id, 'worker', 're_insert');
            throw new NotFoundHttpException('Access denied');
        } else {
            AuditTable::listen(Yii::$app->user->id, 'worker', 'insert');
        }
        $model = new Worker();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Worker model.
     * If update is successful, the browser will be redirected to the 'view' page.
     *
     * @param integer $id
     *
     * @throws NotFoundHttpException
     * @return mixed
     */
    public function actionUpdate($id)
    {
        if (!UserRole::getAccess(new Worker(), 'update', false)) {
            AuditTable::listen(Yii::$app->user->id, 'worker', 're_update');
            throw new NotFoundHttpException('Access denied');
        } else {
            AuditTable::listen(Yii::$app->user->id, 'worker', 'update');
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
     * Deletes an existing Worker model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     *
     * @param integer $id
     *
     * @throws NotFoundHttpException
     * @throws \Exception
     * @return mixed
     */
    public function actionDelete($id)
    {
        if (!UserRole::getAccess(new Worker(), 'delete', true)) {
            AuditTable::listen(Yii::$app->user->id, 'worker', 're_delete');
            throw new NotFoundHttpException('Access denied');
        } else {
            AuditTable::listen(Yii::$app->user->id, 'worker', 'delete');
        }
        if (Yii::$app->db->createCommand('SELECT * FROM salary WHERE worker_id =' . $id)->execute() != 0 ||
            Yii::$app->db->createCommand('SELECT * FROM lab.position WHERE worker_id =' . $id)->execute() != 0
        ) {
            throw new NotFoundHttpException('Can\'t delete this row. There is a correlation.');
        } else
            $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Worker model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     *
     * @param integer $id
     *
     * @return Worker the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Worker::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
