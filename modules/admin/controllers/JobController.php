<?php

namespace app\modules\admin\controllers;

use app\models\Application;
use app\models\JobWithHiringTeam;
use app\models\Question;
use Yii;
use app\models\Job;
use app\models\JobSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
    public function actionIndex()
    {
        $searchModel = new JobSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
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
    public function actionCreate()
    {
        $job = new Job();
        $question = new Question();
        $application = new Application();
        $hiringTeam = new JobWithHiringTeam();
        if ($job->load(Yii::$app->request->post()) && $job->save()) {
            $question->load(Yii::$app->request->post());
            $question->job_id = $job->id;
            $question->save();
            $application->job_id = $job->id;
            $application->load(Yii::$app->request->post());
            $application->save();
            $hiringTeam->load(Yii::$app->request->post());
            $hiringTeam->id = $job->id;
            $hiringTeam->saveHiringTeam();

            return $this->redirect(['view', 'id' => $job->id]);
        }

        return $this->render('create', [
            'job' => $job,
            'question' => $question,
            'application' => $application,
            'hiringTeam' => $hiringTeam
        ]);
    }

    /**
     * Updates an existing Job model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $job = $this->findModel($id);
        $application = Application::find()->where(['job_id' => $id])->one();

        $question = Question::find()->where(['job_id' => $id])->one();
        $hiringTeam = new JobWithHiringTeam();
        $hiringTeam->getHiringTeam();
        $hiringTeam->id = $id;
        $hiringTeam->getHiringTeam();
        if ($job->load(Yii::$app->request->post()) && $job->save()) {
            $question->load(Yii::$app->request->post());
            $question->save();
            $application->load(Yii::$app->request->post());
            $application->save();
            $hiringTeam->load(Yii::$app->request->post());
            $hiringTeam->saveHiringTeam();
            return $this->redirect(['view', 'id' => $job->id]);
        }

        return $this->render('update', [
            'job' => $job,
            'question' => $question,
            'application' => $application,
            'hiringTeam' => $hiringTeam
        ]);
    }

    /**
     * Deletes an existing Job model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
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
