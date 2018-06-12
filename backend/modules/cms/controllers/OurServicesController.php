<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\OurServices;
use common\models\OurServicesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * OurServicesController implements the CRUD actions for OurServices model.
 */
class OurServicesController extends Controller {

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
         * Lists all OurServices models.
         * @return mixed
         */
        public function actionIndex() {
                $searchModel = new OurServicesSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                return $this->render('index', [
                            'searchModel' => $searchModel,
                            'dataProvider' => $dataProvider,
                ]);
        }

        /**
         * Displays a single OurServices model.
         * @param integer $id
         * @return mixed
         */
        public function actionView($id) {
                return $this->render('view', [
                            'model' => $this->findModel($id),
                ]);
        }

        /**
         * Creates a new OurServices model.
         * If creation is successful, the browser will be redirected to the 'view' page.
         * @return mixed
         */
        public function actionCreate() {
                $model = new OurServices();

                if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
                        $image = UploadedFile::getInstance($model, 'image');
                        $model->image = $image->extension;
                        if ($model->validate() && $model->save()) {
                                if (!empty($image)) {
                                        $path = Yii::$app->basePath . '/../uploads/our-services/' . $model->id . '/';
                                        $size = [
                                                ['width' => 100, 'height' => 100, 'name' => 'small'],
                                                ['width' => 1920, 'height' => 613, 'name' => 'image'],
                                        ];
                                        Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                                }
                                Yii::$app->session->setFlash('success', "Added Successfully");
                                return $this->redirect(['index']);
                        }
                }
                return $this->render('create', [
                            'model' => $model,
                ]);
        }

        /**
         * Updates an existing OurServices model.
         * If update is successful, the browser will be redirected to the 'view' page.
         * @param integer $id
         * @return mixed
         */
        public function actionUpdate($id) {
                $model = $this->findModel($id);
                $image_ = $model->image;

                if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
                        $image = UploadedFile::getInstance($model, 'image');
                        if (!empty($image))
                                $model->image = $image->extension;
                        else
                                $model->image = $image_;
                        if ($model->validate() && $model->save()) {
                                if (!empty($image)) {
                                        $path = Yii::$app->basePath . '/../uploads/our-services/' . $model->id . '/';
                                        $size = [
                                                ['width' => 100, 'height' => 100, 'name' => 'small'],
                                                ['width' => 1920, 'height' => 613, 'name' => 'image'],
                                        ];
                                        Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                                }
                        }
                        Yii::$app->session->setFlash('success', "Updated Successfully");
                        return $this->redirect(['index']);
                }

                return $this->render('update', [
                            'model' => $model,
                ]);
        }

        /**
         * Deletes an existing OurServices model.
         * If deletion is successful, the browser will be redirected to the 'index' page.
         * @param integer $id
         * @return mixed
         */
        public function actionDelete($id) {
                $model = $this->findModel($id);
                if ($model->delete()) {
                        $directory = Yii::$app->basePath . '/../uploads/our-services/' . $model->id;
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
         * Finds the OurServices model based on its primary key value.
         * If the model is not found, a 404 HTTP exception will be thrown.
         * @param integer $id
         * @return OurServices the loaded model
         * @throws NotFoundHttpException if the model cannot be found
         */
        protected function findModel($id) {
                if (($model = OurServices::findOne($id)) !== null) {
                        return $model;
                } else {
                        throw new NotFoundHttpException('The requested page does not exist.');
                }
        }

}
