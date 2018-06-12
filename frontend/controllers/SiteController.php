<?php

namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Slider;
use common\models\CmsMetaTags;
use common\models\Services;

/**
 * Site controller
 */
class SiteController extends Controller {

        /**
         * {@inheritdoc}
         */
        public function behaviors() {
                return [
                    'access' => [
                        'class' => AccessControl::className(),
                        'only' => ['logout', 'signup'],
                        'rules' => [
                                [
                                'actions' => ['signup'],
                                'allow' => true,
                                'roles' => ['?'],
                            ],
                                [
                                'actions' => ['logout'],
                                'allow' => true,
                                'roles' => ['@'],
                            ],
                        ],
                    ],
                    'verbs' => [
                        'class' => VerbFilter::className(),
                        'actions' => [
                            'logout' => ['post'],
                        ],
                    ],
                ];
        }

        /**
         * {@inheritdoc}
         */
        public function actions() {
                return [
                    'error' => [
                        'class' => 'yii\web\ErrorAction',
                    ],
                    'captcha' => [
                        'class' => 'yii\captcha\CaptchaAction',
                        'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                    ],
                ];
        }

        /**
         * Displays homepage.
         *
         * @return mixed
         */
        public function actionIndex() {
                $sliders = Slider::find()->where(['status' => 1])->all();
                $testimonials = \common\models\Testimonials::find()->where(['type' => 1])->all();
                $contact = new \common\models\ContactForm;
                $contact->setScenario('enquiry');
                $meta_tags = CmsMetaTags::find()->where(['id' => 1])->one();
                \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
                \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
                return $this->render('index', [
                            'sliders' => $sliders,
                            'testimonials' => $testimonials,
                            'meta_title' => $meta_tags->meta_title,
                            'contact' => $contact,
                ]);
        }

        /**
         * Logs in a user.
         *
         * @return mixed
         */
        public function actionLogin() {
                if (!Yii::$app->user->isGuest) {
                        return $this->goHome();
                }

                $model = new LoginForm();
                if ($model->load(Yii::$app->request->post()) && $model->login()) {
                        return $this->goBack();
                } else {
                        $model->password = '';

                        return $this->render('login', [
                                    'model' => $model,
                        ]);
                }
        }

        /**
         * Logs out the current user.
         *
         * @return mixed
         */
        public function actionLogout() {
                Yii::$app->user->logout();

                return $this->goHome();
        }

        /**
         * Signs user up.
         *
         * @return mixed
         */
        public function actionSignup() {
                $model = new SignupForm();
                if ($model->load(Yii::$app->request->post())) {
                        if ($user = $model->signup()) {
                                if (Yii::$app->getUser()->login($user)) {
                                        return $this->goHome();
                                }
                        }
                }

                return $this->render('signup', [
                            'model' => $model,
                ]);
        }

        /**
         * Requests password reset.
         *
         * @return mixed
         */
        public function actionRequestPasswordReset() {
                $model = new PasswordResetRequestForm();
                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                        if ($model->sendEmail()) {
                                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                                return $this->goHome();
                        } else {
                                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
                        }
                }

                return $this->render('requestPasswordResetToken', [
                            'model' => $model,
                ]);
        }

        /**
         * Resets password.
         *
         * @param string $token
         * @return mixed
         * @throws BadRequestHttpException
         */
        public function actionResetPassword($token) {
                try {
                        $model = new ResetPasswordForm($token);
                } catch (InvalidParamException $e) {
                        throw new BadRequestHttpException($e->getMessage());
                }

                if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
                        Yii::$app->session->setFlash('success', 'New password saved.');

                        return $this->goHome();
                }

                return $this->render('resetPassword', [
                            'model' => $model,
                ]);
        }

        /**
         * Displays about page.
         *
         * @return mixed
         */
        public function actionAbout() {
                $about = \common\models\About::findOne(1);
                $meta_tags = CmsMetaTags::find()->where(['id' => 2])->one();
                \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
                \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
                return $this->render('about', ['about' => $about, 'meta_title' => $meta_tags->meta_title,]);
        }

        /**
         * Displays contact page.
         *
         * @return mixed
         */
        public function actionContact() {
                $contact_details = \common\models\ContactAddress::findOne(1);
                $model = new \common\models\ContactForm();
                $model->setScenario('contact-form');
                $meta_tags = CmsMetaTags::find()->where(['id' => 7])->one();
                \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
                \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                        $model->date = date('Y-m-d');
                        if (isset($_POST['g-recaptcha-response']))
                                $captcha = $_POST['g-recaptcha-response'];
                        if ($captcha) {
                                if ($model->save()) {
                                        $this->Sendmail($model);
                                        Yii::$app->session->setFlash('success', 'Your enquiry submitted successfully.');
                                        $model = new \common\models\ContactForm();
                                }
                        }
                }
                return $this->render('contact', [
                            'model' => $model,
                            'contact_details' => $contact_details,
                            'meta_title' => $meta_tags->meta_title,
                ]);
        }

        /*
         * Displays offer page.
         */

        public function actionOffers() {
                return $this->render('offers', [
                ]);
        }

        /*
         * Displays service page.
         */

        public function actionServices() {
                return $this->render('services', [
                ]);
        }

        /*
         * Displays privilege page.
         */

        public function actionPrivileges() {
                return $this->render('privileges', [
                ]);
        }

        /*
         * Displays tyres page.
         */

        public function actionTyres() {
                return $this->render('tyres', [
                ]);
        }

        public function actionTyresDetail() {
                return $this->render('tyres-detail', [
                ]);
        }

        public function actionAlloyWheels() {
                return $this->render('alloy-wheels', [
                ]);
        }

        public function actionBatteries() {
                return $this->render('batteries', [
                ]);
        }

        public function Sendmail($model) {
                $to = "wails@epitome.ae,daniel@epitome.ae";
                $subject = "Enquiry";
                $message = $this->renderPartial('contact-mail', ['model' => $model]);
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= 'From: <info@coralepitome.com>' . "\r\n";
                mail($to, $subject, $message, $headers);
        }

}
