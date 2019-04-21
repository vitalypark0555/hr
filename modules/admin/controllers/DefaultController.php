<?php

namespace app\modules\admin\controllers;


use app\models\LoginForm;
use app\models\User;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{


    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionError() {
        $exception = Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            if ($exception->statusCode == 404)
                return $this->render('404', ['exception' => $exception]);
            else
                return $this->render('error', ['exception' => $exception]);
        }
    }


    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = 'login';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('index');
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionSignup()
    {
        $this->layout = 'login';

        $model = new User();
        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }
        if ($model->load(Yii::$app->request->post())) {
            if ($model->save())
                Yii::$app->session->setFlash('success', "You have been registered successfully.");
            else {
                Yii::$app->session->setFlash('error', "You have not been registered. Please try again.");
            }
            return $this->redirect('login');
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }


    /**
     * Logout action.
     *
     * @return Response|string
     */
    public
    function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect('/admin/login');
    }

    /**
     * Profile action
     * @param integer $id
     * @return string
     * @throws NotFoundHttpException
     */
    public
    function actionProfile()
    {
        $user = $this->findUser(Yii::$app->user->id);
        return $this->render('profile', [
            'profile' => $user
        ]);
    }

    /**
     * ProfileName action
     * @param integer $id
     * @return string
     * @throws NotFoundHttpException
     */
    public
    function actionProfileName()
    {
        $profile = $this->findUser(Yii::$app->user->id);
        if ($profile->load(Yii::$app->request->post()) && $profile->save()) {
            $this->setSuccessFlashMessage();
            return $this->redirect(['profile']);

        }
        return $this->goBack();
    }

    /**
     * ProfileName action
     * @param integer $id
     * @return string
     * @throws NotFoundHttpException
     */
    public
    function actionProfileImage()
    {
        $profile = $this->findUser(Yii::$app->user->id);
        $imgUpload = new ImageUpload();
        if ($profile->load(Yii::$app->request->post())) {

            $file = UploadedFile::getInstance($profile, 'image');
            if ($profile->saveImage($imgUpload->uploadFile($file, $profile->image))) {
                $profile->save();
                $this->setSuccessFlashMessage();
                return $this->redirect(['profile']);
            }

        }

        return $this->goBack();
    }


    public
    function actionProfilePassword()
    {
        $profile = $this->findUser(Yii::$app->user->id);
        if ($profile->load(Yii::$app->request->post())) {
            if ($profile->password === $profile->repassword) {
                $profile->save();
                $this->setSuccessFlashMessage();
            } else {
                $this->setDangerFlashMessage();
            }
        }
        return $this->redirect(['profile']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected
    function findUser($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public
    function setSuccessFlashMessage()
    {
        Yii::$app->session->setFlash('success', "Данные были успешно изменены.");
    }

    public
    function setDangerFlashMessage()
    {
        Yii::$app->session->setFlash('danger', "Неправильные данные. Попробуйте еще раз.");
    }
}
