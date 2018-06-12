<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\Portfolio;
use common\models\PortfolioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;
use yii\imagine\Image;

/**
 * PortfolioController implements the CRUD actions for Portfolio model.
 */
class PortfolioController extends Controller {
    
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
         * Lists all Portfolio models.
         * @return mixed
         */
        public function actionIndex() {
                $searchModel = new PortfolioSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                return $this->render('index', [
                            'searchModel' => $searchModel,
                            'dataProvider' => $dataProvider,
                ]);
        }

        /**
         * Displays a single Portfolio model.
         * @param integer $id
         * @return mixed
         */
        public function actionView($id) {
                return $this->render('view', [
                            'model' => $this->findModel($id),
                ]);
        }

        /**
         * Creates a new Portfolio model.
         * If creation is successful, the browser will be redirected to the 'view' page.
         * @return mixed
         */
       public function actionCreate() {
                $model = new Portfolio();

                $model->setScenario('create');
                if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
                        $image = UploadedFile::getInstance($model, 'image');
                        $index_image = UploadedFile::getInstance($model, 'small_image');
                        $model->image = $image->extension;
                        $model->small_image = $index_image->extension;
                        if ($model->validate() && $model->save()) {
                                if (!empty($image)) {
                                        $path = Yii::$app->basePath . '/../uploads/portfolio/' . $model->id . '/';
                                        $size = [
                                                ['width' => 100, 'height' => 100, 'name' => 'small'],
                                                ['width' => 730, 'height' => 1300, 'name' => 'image'],
                                                ['width' => 750, 'height' => 750, 'name' => 'index'],
                                        ];
                                        Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                                }
                                if (!empty($index_image)) {
                                        $path1 = Yii::$app->basePath . '/../uploads/portfolio/' . $model->id . '/index/';
                                        $size1 = [
                                                ['width' => 100, 'height' => 100, 'name' => 'small'],
                                                ['width' => 750, 'height' => 750, 'name' => 'image'],
                                        ];
                                        Yii::$app->UploadFile->UploadFile($model, $index_image, $path1, $size1);
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
         * Updates an existing Portfolio model.
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
                        $index_image = UploadedFile::getInstance($model, 'small_image');
                        if (!empty($image))
                                $model->image = $image->extension;
                        else
                                $model->image = $image_;

                        if (!empty($index_image))
                                $model->small_image = $index_image->extension;
                        else
                                $model->small_image = $smallimage_;


                        if ($model->validate() && $model->save()) {
                                if (!empty($image)) {
                                        $path = Yii::$app->basePath . '/../uploads/portfolio/' . $model->id . '/';
                                        $size = [
                                                ['width' => 100, 'height' => 100, 'name' => 'small'],
                                                ['width' => 730, 'height' => 1300, 'name' => 'image'],
                                                // ['width' => 325, 'height' => 390, 'name' => 'index'],
                                        ];
                                        Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                                }
                                if (!empty($index_image)) {
                                        $path1 = Yii::$app->basePath . '/../uploads/portfolio/' . $model->id . '/index/';
                                        $size1 = [
                                                ['width' => 100, 'height' => 100, 'name' => 'small'],
                                                ['width' => 750, 'height' => 750, 'name' => 'image'],
                                        ];
                                        Yii::$app->UploadFile->UploadFile($model, $index_image, $path1, $size1);
                                }
                                Yii::$app->session->setFlash('success', "Added Successfully");
                                return $this->redirect('index');
                        }
                }
                return $this->render('update', [
                            'model' => $model,
                ]);
        }

        /**
         * Deletes an existing Portfolio model.
         * If deletion is successful, the browser will be redirected to the 'index' page.
         * @param integer $id
         * @return mixed
         */
        public function actionDelete($id) {
                $model = $this->findModel($id);
                if ($model->delete()) {
                        $directory = Yii::$app->basePath . '/../uploads/portfolio/' . $model->id;
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
         * Finds the Portfolio model based on its primary key value.
         * If the model is not found, a 404 HTTP exception will be thrown.
         * @param integer $id
         * @return Portfolio the loaded model
         * @throws NotFoundHttpException if the model cannot be found
         */
        protected function findModel($id) {
                if (($model = Portfolio::findOne($id)) !== null) {
                        return $model;
                } else {
                        throw new NotFoundHttpException('The requested page does not exist.');
                }
        }

}
