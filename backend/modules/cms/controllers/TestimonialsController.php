<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\Testimonials;
use common\models\TestimonialsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * TestimonialsController implements the CRUD actions for Testimonials model.
 */
class TestimonialsController extends Controller {

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
         * Lists all Testimonials models.
         * @return mixed
         */
        public function actionIndex() {
                $searchModel = new TestimonialsSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                return $this->render('index', [
                            'searchModel' => $searchModel,
                            'dataProvider' => $dataProvider,
                ]);
        }

        /**
         * Displays a single Testimonials model.
         * @param integer $id
         * @return mixed
         */
        public function actionView($id) {
                return $this->render('view', [
                            'model' => $this->findModel($id),
                ]);
        }

        /**
         * Creates a new Testimonials model.
         * If creation is successful, the browser will be redirected to the 'view' page.
         * @return mixed
         */
        public function actionCreate() {
                $model = new Testimonials();

                $model->setScenario('create');
                if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
                        $image = UploadedFile::getInstance($model, 'image');
                        $model->image = $image->extension;
                        if ($model->validate() && $model->save()) {
                                if (!empty($image)) {
                                        $path = Yii::$app->basePath . '/../uploads/testimonials/' . $model->id . '/';
                                        $size = [
                                                ['width' => 70, 'height' => 70, 'name' => 'small'],
                                                ['width' => 70, 'height' => 70, 'name' => 'image'],
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
         * Updates an existing Testimonials model.
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
                                        $path = Yii::$app->basePath . '/../uploads/testimonials/' . $model->id . '/';
                                        $size = [
                                                ['width' => 70, 'height' => 70, 'name' => 'small'],
                                                ['width' => 70, 'height' => 70, 'name' => 'image'],
                                        ];
                                        Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                                }
                                Yii::$app->session->setFlash('success', "Updated Successfully");
                                return $this->redirect('index');
                        }
                }
                return $this->render('update', [
                            'model' => $model,
                ]);
        }

        /**
         * Deletes an existing Testimonials model.
         * If deletion is successful, the browser will be redirected to the 'index' page.
         * @param integer $id
         * @return mixed
         */
        public function actionDelete($id) {
                $model = $this->findModel($id);
                if ($model->delete()) {
                        $directory = Yii::$app->basePath . '/../uploads/testimonials/' . $model->id;
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
         * Finds the Testimonials model based on its primary key value.
         * If the model is not found, a 404 HTTP exception will be thrown.
         * @param integer $id
         * @return Testimonials the loaded model
         * @throws NotFoundHttpException if the model cannot be found
         */
        protected function findModel($id) {
                if (($model = Testimonials::findOne($id)) !== null) {
                        return $model;
                } else {
                        throw new NotFoundHttpException('The requested page does not exist.');
                }
        }

}
