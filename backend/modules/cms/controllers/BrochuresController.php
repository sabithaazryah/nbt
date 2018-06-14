<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\Brochures;
use common\models\BrochuresSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;

/**
 * BrochuresController implements the CRUD actions for Brochures model.
 */
class BrochuresController extends Controller {

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
         * Lists all Brochures models.
         * @return mixed
         */
        public function actionIndex() {
                $searchModel = new BrochuresSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                return $this->render('index', [
                            'searchModel' => $searchModel,
                            'dataProvider' => $dataProvider,
                ]);
        }

        /**
         * Displays a single Brochures model.
         * @param integer $id
         * @return mixed
         */
        public function actionView($id) {
                return $this->render('view', [
                            'model' => $this->findModel($id),
                ]);
        }

        /**
         * Creates a new Brochures model.
         * If creation is successful, the browser will be redirected to the 'view' page.
         * @return mixed
         */
        public function actionCreate() {
                $model = new Brochures();

                if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
                        $image = UploadedFile::getInstance($model, 'brochure');
                        $model->brochure = $image->extension;
                        $model->name=$image->name;
                        if ($model->validate() && $model->save()) {
                                if (!empty($image)) {
                                        $path = Yii::$app->basePath . '/../uploads/brochures/' . $model->id . '/';
                                        $size = [
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
         * Updates an existing Brochures model.
         * If update is successful, the browser will be redirected to the 'view' page.
         * @param integer $id
         * @return mixed
         */
        public function actionUpdate($id) {
                $model = $this->findModel($id);
                $image_ = $model->brochure;
                $name_ = $model->name;

                if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
                        $image = UploadedFile::getInstance($model, 'brochure');
                        if (!empty($image)){
                                $model->brochure = $image->extension;
                                $model->name=$image->name;
                        }else{
                                $model->brochure = $image_;
                                $model->name = $name_;
                        }
                        if ($model->validate() && $model->save()) {
                                if (!empty($image)) {
                                        $path = Yii::$app->basePath . '/../uploads/brochures/' . $model->id . '/';
                                        $size = [
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
         * Deletes an existing Brochures model.
         * If deletion is successful, the browser will be redirected to the 'index' page.
         * @param integer $id
         * @return mixed
         */
        public function actionDelete($id) {
                $model = $this->findModel($id);
                if ($model->delete()) {
                        $directory = Yii::$app->basePath . '/../uploads/brochures/' . $model->id;
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
         * Finds the Brochures model based on its primary key value.
         * If the model is not found, a 404 HTTP exception will be thrown.
         * @param integer $id
         * @return Brochures the loaded model
         * @throws NotFoundHttpException if the model cannot be found
         */
        protected function findModel($id) {
                if (($model = Brochures::findOne($id)) !== null) {
                        return $model;
                } else {
                        throw new NotFoundHttpException('The requested page does not exist.');
                }
        }

}
