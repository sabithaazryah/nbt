<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\HomePrivilege;
use common\models\HomePrivilegeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * HomePrivilegeController implements the CRUD actions for HomePrivilege model.
 */
class HomePrivilegeController extends Controller {

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
         * Lists all HomePrivilege models.
         * @return mixed
         */
        public function actionIndex() {
                $searchModel = new HomePrivilegeSearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                return $this->render('index', [
                            'searchModel' => $searchModel,
                            'dataProvider' => $dataProvider,
                ]);
        }

        /**
         * Displays a single HomePrivilege model.
         * @param integer $id
         * @return mixed
         */
        public function actionView($id) {
                return $this->render('view', [
                            'model' => $this->findModel($id),
                ]);
        }

        /**
         * Creates a new HomePrivilege model.
         * If creation is successful, the browser will be redirected to the 'view' page.
         * @return mixed
         */
        public function actionCreate() {
                $model = new HomePrivilege();

                if ($model->load(Yii::$app->request->post()) && $model->save()) {
                        return $this->redirect(['view', 'id' => $model->id]);
                } else {
                        return $this->render('create', [
                                    'model' => $model,
                        ]);
                }
        }

        /**
         * Updates an existing HomePrivilege model.
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
                                        $path = Yii::$app->basePath . '/../uploads/home-privileges/' . $model->id . '/';
                                        $size = [
                                                ['width' => 100, 'height' => 100, 'name' => 'small'],
                                                ['width' => 470, 'height' => 327, 'name' => 'image'],
                                        ];
                                        Yii::$app->UploadFile->UploadFile($model, $image, $path, $size);
                                }
                        }
                        Yii::$app->session->setFlash('success', "Updated Successfully");
                        return $this->redirect(['update', 'id' => $model->id]);
                }

                return $this->render('update', [
                            'model' => $model,
                ]);
        }

        /**
         * Deletes an existing HomePrivilege model.
         * If deletion is successful, the browser will be redirected to the 'index' page.
         * @param integer $id
         * @return mixed
         */
        public function actionDelete($id) {
                $this->findModel($id)->delete();

                return $this->redirect(['index']);
        }

        /**
         * Finds the HomePrivilege model based on its primary key value.
         * If the model is not found, a 404 HTTP exception will be thrown.
         * @param integer $id
         * @return HomePrivilege the loaded model
         * @throws NotFoundHttpException if the model cannot be found
         */
        protected function findModel($id) {
                if (($model = HomePrivilege::findOne($id)) !== null) {
                        return $model;
                } else {
                        throw new NotFoundHttpException('The requested page does not exist.');
                }
        }

}
