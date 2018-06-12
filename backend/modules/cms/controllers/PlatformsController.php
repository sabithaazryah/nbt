<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\Platforms;
use common\models\PlatformsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * PlatformsController implements the CRUD actions for Platforms model.
 */
class PlatformsController extends Controller {

        public function beforeAction($action) {
                if (!parent::beforeAction($action)) {
                        return false;
                }
                if (Yii::$app->user->isGuest) {
                        $this->redirect(['/site/index']);
                        return false;
                }
                return true;
        }

        /**
         * @inheritdoc
         */
        public function behaviors() {
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
         * Lists all Platforms models.
         * @return mixed
         */
        public function actionIndex() {
                $searchModel = new PlatformsSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                return $this->render('index', [
                            'searchModel' => $searchModel,
                            'dataProvider' => $dataProvider,
                ]);
        }

        /**
         * Displays a single Platforms model.
         * @param integer $id
         * @return mixed
         */
        public function actionView($id) {
                return $this->render('view', [
                            'model' => $this->findModel($id),
                ]);
        }

        /**
         * Creates a new Platforms model.
         * If creation is successful, the browser will be redirected to the 'view' page.
         * @return mixed
         */
        public function actionCreate() {
                $model = new Platforms();
                $model->setScenario('create');
                if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
                        $image = UploadedFile::getInstance($model, 'image');
                        $small_image = UploadedFile::getInstance($model, 'small_image');
                        $model->image = $image->extension;
                        $model->small_image = $small_image->extension;
                        if ($model->validate() && $model->save()) {
                                if (!empty($small_image)) {
                                        $path = Yii::$app->basePath . '/../uploads/platforms/' . $model->id . '/index/';
                                        $size = [
                                                ['width' => 100, 'height' => 100, 'name' => 'small'],
                                                ['width' => 635, 'height' => 443, 'name' => 'image'],
                                        ];
                                        Yii::$app->UploadFile->UploadFile($model, $small_image, $path, $size);
                                }

                                if (!empty($image)) {
                                        $path = Yii::$app->basePath . '/../uploads/platforms/' . $model->id . '/';
                                        $size = [
                                                ['width' => 100, 'height' => 100, 'name' => 'small'],
                                                ['width' => 1776, 'height' => 530, 'name' => 'image'],
                                        ];
                                        Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                                }
                                Yii::$app->session->setFlash('success', "Added Successfully");
                                return $this->redirect('index');
                        }
                }
                return $this->render('create', [
                            'model' => $model,
                ]);
        }

        /**
         * Updates an existing Platforms model.
         * If update is successful, the browser will be redirected to the 'view' page.
         * @param integer $id
         * @return mixed
         */
        public function actionUpdate($id) {
                $model = $this->findModel($id);
                $image_ = $model->image;
                $smallimage_ = $model->small_image;

                if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
                        $image = UploadedFile::getInstance($model, 'image');
                        $small_image = UploadedFile::getInstance($model, 'small_image');
                        if (!empty($image))
                                $model->image = $image->extension;
                        else
                                $model->image = $image_;

                        if (!empty($small_image))
                                $model->small_image = $small_image->extension;
                        else
                                $model->small_image = $smallimage_;

                        if ($model->validate() && $model->save()) {
                                if (!empty($small_image)) {
                                        $path = Yii::$app->basePath . '/../uploads/platforms/' . $model->id . '/index/';
                                        $size = [
                                                ['width' => 100, 'height' => 100, 'name' => 'small'],
                                                ['width' => 635, 'height' => 443, 'name' => 'image'],
                                        ];
                                        Yii::$app->UploadFile->UploadFile($model, $small_image, $path, $size);
                                }

                                if (!empty($image)) {
                                        $path = Yii::$app->basePath . '/../uploads/platforms/' . $model->id . '/';
                                        $size = [
                                                ['width' => 100, 'height' => 100, 'name' => 'small'],
                                                ['width' => 1776, 'height' => 530, 'name' => 'image'],
                                        ];
                                        Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                                }
                        }
                        Yii::$app->session->setFlash('success', "Updated Successfully");
                        return $this->redirect('index');
                }
                return $this->render('update', [
                            'model' => $model,
                ]);
        }

        /**
         * Deletes an existing Platforms model.
         * If deletion is successful, the browser will be redirected to the 'index' page.
         * @param integer $id
         * @return mixed
         */
        public function actionDelete($id) {
                $model = $this->findModel($id);
                if ($model->delete()) {
                        $directory = Yii::$app->basePath . '/../uploads/platforms/' . $model->id;
                        foreach (glob("{$directory}/*") as $file) {
                                if (!is_dir($file)) {
                                        unlink($file);
                                }
                        }
                        FileHelper::removeDirectory($directory);
                }
                return $this->redirect(['index']);
        }

        /**
         * Finds the Platforms model based on its primary key value.
         * If the model is not found, a 404 HTTP exception will be thrown.
         * @param integer $id
         * @return Platforms the loaded model
         * @throws NotFoundHttpException if the model cannot be found
         */
        protected function findModel($id) {
                if (($model = Platforms::findOne($id)) !== null) {
                        return $model;
                } else {
                        throw new NotFoundHttpException('The requested page does not exist.');
                }
        }

}
