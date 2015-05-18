<?php
namespace backend\controllers;

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
                        'allow'   => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow'   => true,
                        'roles'   => ['@'],
                    ],
                ],
            ],
            'verbs'  => [
                'class'   => VerbFilter::className(),
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
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post())) {
            if (!$model->getRole() && $model->validatePassword()) {
                Yii::$app->db->
                    createCommand('update user set replica = ' . $model->validateReplica() . ' where id=' . $model->getUser()["id"] . ';')
                    ->execute();
                $model->login();

                return $this->redirect(['']);
            } else {
                if ($model->validatePasswordResetToken() && $model->validatePassword()) {
                    Yii::$app->db->
                        createCommand('update user set replica = ' . $model->validateReplica() . ' where id=' . $model->getUser()["id"] . ';')
                        ->execute();
                    if ($model->validateReplica() == 0) {
                        Yii::$app->db->
                            createCommand('CREATE TABLE lab.worker2 like lab.worker;
                                   INSERT lab.worker2 SELECT * FROM worker;')->execute();
                        Yii::$app->db->
                            createCommand('CREATE TABLE lab.salary2 like lab.salary;
                                   INSERT lab.salary2 SELECT * FROM salary;')->execute();
                        Yii::$app->db->
                            createCommand('CREATE TABLE lab.position2 like lab.position;
                                   INSERT lab.position2 SELECT * FROM lab.position;')->execute();
                    }
                    $model->login();

                    return $this->redirect(['']);
                } else {
                    return $this->render('login', [
                        'model' => $model,
                    ]);
                }
            }
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        if (Yii::$app->user->identity->replica == 0)
            if (Yii::$app->db->createCommand('SHOW TABLES LIKE \'worker2\'')->execute() == 1) {
                if (Yii::$app->db->createCommand('SELECT * FROM salary')->execute() != 0)
                    Yii::$app->db->createCommand('DELETE FROM lab.salary;')->execute();
                if (Yii::$app->db->createCommand('SELECT * FROM lab.position')->execute() != 0)
                    Yii::$app->db->createCommand('DELETE FROM lab.position')->execute();

                Yii::$app->db
                    ->createCommand('DELETE FROM lab.worker;
                                     INSERT lab.worker SELECT * FROM lab.worker2;
                                     INSERT lab.salary SELECT * FROM lab.salary2;
                                     INSERT lab.position SELECT * FROM lab.position2;
                                     DROP TABLE lab.worker2;
                                     DROP TABLE lab.salary2;
                                     DROP TABLE lab.position2;')->execute();

            }

        Yii::$app->user->logout();

        return $this->goHome();
    }
}
