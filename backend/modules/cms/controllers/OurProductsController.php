<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\OurProducts;
use common\models\OurProductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * OurProductsController implements the CRUD actions for OurProducts model.
 */
class OurProductsController extends Controller {

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
         * Lists all OurProducts models.
         * @return mixed
         */
        public function actionIndex() {
                $searchModel = new OurProductsSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                return $this->render('index', [
                            'searchModel' => $searchModel,
                            'dataProvider' => $dataProvider,
                ]);
        }

        /**
         * Displays a single OurProducts model.
         * @param integer $id
         * @return mixed
         */
        public function actionView($id) {
                return $this->render('view', [
                            'model' => $this->findModel($id),
                ]);
        }

        /**
         * Creates a new OurProducts model.
         * If creation is successful, the browser will be redirected to the 'view' page.
         * @return mixed
         */
        public function actionCreate() {
                $model = new OurProducts();

                if ($model->load(Yii::$app->request->post()) && $model->save()) {
                        return $this->redirect(['view', 'id' => $model->id]);
                } else {
                        return $this->render('create', [
                                    'model' => $model,
                        ]);
                }
        }

        /**
         * Updates an existing OurProducts model.
         * If update is successful, the browser will be redirected to the 'view' page.
         * @param integer $id
         * @return mixed
         */
        public function actionUpdate($id) {
                $model = $this->findModel($id);
                $image_1_ext = $model->image_1;
                $image_2_ext = $model->image_2;
                $image_3_ext = $model->image_3;

                $other_image_1_ext = $model->other_image_1;
                $other_image_2_ext = $model->other_image_2;
                $other_image_3_ext = $model->other_image_3;
                if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
                        $size = [
                                ['width' => 70, 'height' => 70, 'name' => 'small'],
                                ['width' => 370, 'height' => 380, 'name' => 'image'],
                                ['width' => 370, 'height' => 254, 'name' => 'index'],
                        ];
                        $size1 = [
                                ['width' => 70, 'height' => 70, 'name' => 'small'],
                                ['width' => 370, 'height' => 254, 'name' => 'image'],
                        ];
                        $flag = 0;
                        if ($model->validate() && $model->save()) {
                                $image_1 = UploadedFile::getInstance($model, 'image_1');
                                if (!empty($image_1)) {
                                        $model->image_1 = $image_1->extension;
                                        $flag = 1;
                                        $path = Yii::$app->basePath . '/../uploads/our-products/' . $model->id . '/1/';
                                        Yii::$app->UploadFile->UploadFile($model, $image_1, $path, $size);
                                } else {
                                        $model->image_1 = $image_1_ext;
                                }

                                $other_image_1 = UploadedFile::getInstance($model, 'other_image_1');
                                if (!empty($other_image_1)) {
                                        $model->other_image_1 = $other_image_1->extension;
                                        $flag = 1;
                                        $path = Yii::$app->basePath . '/../uploads/our-products/' . $model->id . '/1/hover/';
                                        Yii::$app->UploadFile->UploadFile($model, $other_image_1, $path, $size1);
                                } else {
                                        $model->other_image_1 = $other_image_1_ext;
                                }

                                $image_2 = UploadedFile::getInstance($model, 'image_2');
                                if (!empty($image_2)) {
                                        $model->image_2 = $image_2->extension;
                                        $flag = 1;
                                        $path = Yii::$app->basePath . '/../uploads/our-products/' . $model->id . '/2/';
                                        Yii::$app->UploadFile->UploadFile($model, $image_2, $path, $size);
                                } else {
                                        $model->image_2 = $image_2_ext;
                                }


                                $other_image_2 = UploadedFile::getInstance($model, 'other_image_2');
                                if (!empty($other_image_2)) {
                                        $model->other_image_2 = $other_image_2->extension;
                                        $flag = 1;
                                        $path = Yii::$app->basePath . '/../uploads/our-products/' . $model->id . '/2/hover/';
                                        Yii::$app->UploadFile->UploadFile($model, $other_image_2, $path, $size1);
                                } else {
                                        $model->other_image_2 = $other_image_2_ext;
                                }

                                $image_3 = UploadedFile::getInstance($model, 'image_3');
                                if (!empty($image_2)) {
                                        $model->image_3 = $image_3->extension;
                                        $flag = 1;
                                        $path = Yii::$app->basePath . '/../uploads/our-products/' . $model->id . '/3/';
                                        Yii::$app->UploadFile->UploadFile($model, $image_3, $path, $size);
                                } else {
                                        $model->image_3 = $image_3_ext;
                                }

                                $other_image_3 = UploadedFile::getInstance($model, 'other_image_3');
                                if (!empty($other_image_3)) {
                                        $model->other_image_3 = $other_image_3->extension;
                                        $flag = 1;
                                        $path = Yii::$app->basePath . '/../uploads/our-products/' . $model->id . '/3/hover/';
                                        Yii::$app->UploadFile->UploadFile($model, $other_image_3, $path, $size1);
                                } else {
                                        $model->other_image_3 = $other_image_3_ext;
                                }
                                $model->update();

                                Yii::$app->session->setFlash('success', "Updated Successfully");
                                return $this->redirect(['update', 'id' => $model->id]);
                        }
                }
                return $this->render('update', [
                            'model' => $model,
                ]);
        }

        /**
         * Deletes an existing OurProducts model.
         * If deletion is successful, the browser will be redirected to the 'index' page.
         * @param integer $id
         * @return mixed
         */
        public function actionDelete($id) {
                $this->findModel($id)->delete();

                return $this->redirect(['index']);
        }

        /**
         * Finds the OurProducts model based on its primary key value.
         * If the model is not found, a 404 HTTP exception will be thrown.
         * @param integer $id
         * @return OurProducts the loaded model
         * @throws NotFoundHttpException if the model cannot be found
         */
        protected function findModel($id) {
                if (($model = OurProducts::findOne($id)) !== null) {
                        return $model;
                } else {
                        throw new NotFoundHttpException('The requested page does not exist.');
                }
        }

}
