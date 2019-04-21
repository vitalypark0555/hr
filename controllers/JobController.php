<?php

namespace app\controllers;

use app\models\ApplicationForm;
use app\models\EduForm;
use app\models\ExpForm;
use app\models\Model;
use Yii;
use app\models\Job;
use app\models\JobSearch;

use yii\base\Exception;
use yii\data\ActiveDataProvider;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;

/**
 * JobController implements the CRUD actions for Job model.
 */
class JobController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Job models.
     * @return mixed
     */
    public function actionIndex($cat_id = null)
    {
        $q = Yii::$app->request->get('q');
        $query = Job::find();
        if (!empty($q)) {
            $query->andFilterWhere(['like', 'title', $q]);
        }

        $query->andFilterWhere(['cat_id' => $cat_id]);
        $filter = new JobSearch();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'defaultOrder' => [
                    'publish_date' => SORT_DESC,
                    'title' => SORT_ASC,
                ]
            ],
        ]);
        if($filter->load(Yii::$app->request->post())) {
            $q = null;
            $dataProvider = $filter->search(Yii::$app->request->queryParams);
        }
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'filter' => $filter
        ]);
    }

    /**
     * Displays a single Job model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Job model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionApply($id)
    {
        $job = Job::find()->where(['id' => $id])->one();
        $model = new ApplicationForm();
        $modelsEduForm = [new EduForm];
        $modelsExpForm = [new ExpForm];
        if ($model->load(Yii::$app->request->post())) {
            $model->photoFile = UploadedFile::getInstance($model, 'photoFile');
            $model->resumeFile = UploadedFile::getInstance($model, 'resumeFile');
            $model->uploadFiles();
            $modelsEduForm = Model::createMultiple(EduForm::classname());
            $modelsExpForm = Model::createMultiple(ExpForm::classname());
            Model::loadMultiple($modelsEduForm, Yii::$app->request->post());
            Model::loadMultiple($modelsExpForm, Yii::$app->request->post());
            $model->job_id = $id;
            if (Yii::$app->request->isAjax) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ArrayHelper::merge(
                    ActiveForm::validateMultiple($modelsEduForm),
                    ActiveForm::validateMultiple($modelsExpForm),
                    ActiveForm::validate($model)
                );
            }

            $valid = $model->validate();
            if ($valid) {
                $transaction = \Yii::$app->db->beginTransaction();
                try {
                    if ($flag = $model->save(false)) {
                        foreach ($modelsEduForm as $edu) {
                            $edu->app_id = $model->id;
                            if (!($flag = $edu->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag = $model->save(false)) {
                        foreach ($modelsExpForm as $exp) {
                            $exp->app_id = $model->id;
                            if (!($flag = $exp->save(false))) {
                                $transaction->rollBack();
                                break;
                            }
                        }
                    }
                    if ($flag) {
                        $transaction->commit();
                        Yii::$app->session->setFlash('success', 'Your application has been successfully submitted!');
                        return $this->redirect(['index']);
                    } else {
                        Yii::$app->session->setFlash('error', 'Your application has not been submitted!');
                        return $this->redirect(['index']);
                    }
                } catch (Exception $e) {
                    $transaction->rollBack();

                }
            } else {
                Yii::$app->session->setFlash('error', 'Your application has not been submitted!');
                return $this->redirect(['index']);
            }
        }

        return $this->render('apply', [
            'model' => $model,
            'modelsEduForm' => (empty($modelsEduForm)) ? [new EduForm] : $modelsEduForm,
            'modelsExpForm' => (empty($modelsExpForm)) ? [new ExpForm] : $modelsExpForm,
            'job' => $job
        ]);
    }

    public function actionValidation()
    {
//        $model = new ApplicationForm();
//
//        if ($model->load($_POST)){
//            if (Yii::$app->request->isAjax) {
//                return ActiveForm::validate($model);
//            }
//        }
        Yii::$app->response->format = Response::FORMAT_JSON;

        $errors = [];

        if (1 + 1 != 2) {
            $errors['applicationform-phone'] = ["Необходимо заполнить Телефон"];
        }
        return $errors;
    }


    /**
     * Finds the Job model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Job the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Job::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
