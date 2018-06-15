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
                $brands = \common\models\Brands::find()->where(['status' => 1, 'home_page' => 1])->all();
                $testimonials = \common\models\Testimonials::find()->where(['type' => 1])->all();
                $meta_tags = CmsMetaTags::find()->where(['id' => 1])->one();
                $our_services = \common\models\OurServices::find()->where(['status' => 1])->all();
                $privilege = \common\models\HomePrivilege::findOne(1);
                $home_page_cotent = \common\models\HomePageOther::findOne(1);
                $our_products = \common\models\OurProducts::findOne(1);

                \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
                \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
                return $this->render('index', [
                            'sliders' => $sliders,
                            'testimonials' => $testimonials,
                            'meta_title' => $meta_tags->meta_title,
                            'brands' => $brands,
                            'our_services' => $our_services,
                            'privilege' => $privilege,
                            'home_page_cotent' => $home_page_cotent,
                            'our_products' => $our_products,
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
                $subscribe = new \common\models\Subscribe();
                $meta_tags = CmsMetaTags::find()->where(['id' => 2])->one();
                $contact_details = \common\models\ContactAddress::findOne(1);
                \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
                \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
                if (Yii::$app->request->post()) {
                        $subscribe->email = Yii::$app->request->post('email');
                        $subscribe->save();
                }
                return $this->render('about', ['about' => $about, 'meta_title' => $meta_tags->meta_title, 'subscribe' => $subscribe, 'contact_details' => $contact_details]);
        }

        /**
         * Displays contact page.
         *
         * @return mixed
         */
        public function actionContact() {
                $contact_details = \common\models\ContactAddress::findOne(1);
                $model = new \common\models\ContactForm();
//                $model->setScenario('contact-form');
                $meta_tags = CmsMetaTags::find()->where(['id' => 7])->one();
                \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
                \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
                if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                        $model->date = date('Y-m-d');
                        //  if (isset($_POST['g-recaptcha-response']))
                        // $captcha = $_POST['g-recaptcha-response'];
                        // if ($captcha) {
                        if ($model->save()) {
                                $this->Sendmail($model);
                                Yii::$app->session->setFlash('success', 'Your enquiry submitted successfully.');
                                $model = new \common\models\ContactForm();
                        }
                        // }
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
                $offers = \common\models\Offers::find()->where(['status' => 1])->all();
                $meta_tags = CmsMetaTags::find()->where(['id' => 10])->one();
                \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
                \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
                return $this->render('offers', [
                            'offers' => $offers,
                            'meta_title' => $meta_tags->meta_title,
                ]);
        }

        /*
         * Displays service page.
         */

        public function actionServices($service = null) {
                if (!isset($service) && $service == '') {
                        $service_detail = \common\models\Services::findOne(1);
                } else {
                        $service_detail = \common\models\Services::find()->where(['canonical_name' => $service])->one();
                }
                $meta_tags = CmsMetaTags::find()->where(['id' => 8])->one();
                \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
                \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
                $all_services = \common\models\Services::find()->where(['status' => 1])->all();
                return $this->render('services', [
                            'service_detail' => $service_detail,
                            'services' => $all_services,
                            'meta_title' => $meta_tags->meta_title,
                ]);
        }

        /*
         * Displays privilege page.
         */

        public function actionPrivileges() {
                $privileges = \common\models\Privileges::find()->where(['status' => 1])->all();
                $meta_tags = CmsMetaTags::find()->where(['id' => 9])->one();
                \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
                \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
                $terms = \common\models\TermsAndCondition::findOne(1);
                return $this->render('privileges', [
                            'privileges' => $privileges,
                            'terms' => $terms,
                            'meta_title' => $meta_tags->meta_title,
                ]);
        }

        /*
         * Displays tyres page.
         */

        public function actionTyres() {
                $tyre_brands = \common\models\Brands::find()->where(['type' => 1, 'status' => 1])->all();
                $meta_tags = CmsMetaTags::find()->where(['id' => 3])->one();
                \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
                \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
                return $this->render('tyres', [
                            'brands' => $tyre_brands,
                            'meta_title' => $meta_tags->meta_title,
                ]);
        }

        public function actionTyresDetail($brand) {
                if (isset($brand)) {
                        $types = \common\models\Tyres::find()->where(['status' => 1])->select('type')->distinct()->all();
                        $meta_tags = CmsMetaTags::find()->where(['id' => 4])->one();
                        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
                        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
                        return $this->render('tyres-detail', [
                                    'types' => $types,
                                    'meta_title' => $meta_tags->meta_title,
                        ]);
                } else {
                        $this->redirect('site/error');
                }
        }

        public function actionAlloyWheels() {
                $brands = \common\models\Brands::find()->where(['type' => 2, 'status' => 1])->all();
                $meta_tags = CmsMetaTags::find()->where(['id' => 5])->one();
                \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
                \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
                return $this->render('alloy-wheels', [
                            'brands' => $brands,
                            'meta_title' => $meta_tags->meta_title,
                ]);
        }

        public function actionBatteries() {
                $batteries = \common\models\Batteries::findOne(1);
                $brands = \common\models\Brands::find()->where(['status' => 1, 'type' => 3])->all();
                $meta_tags = CmsMetaTags::find()->where(['id' => 6])->one();
                \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
                \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
                return $this->render('batteries', [
                            'batteries' => $batteries,
                            'brands' => $brands,
                            'meta_title' => $meta_tags->meta_title,
                ]);
        }

        public function Sendmail($model) {
                $to = "wails@epitome.ae,daniel@epitome.ae";
                $subject = "Enquiry";
                $message = $this->renderPartial('contact-mail', ['model' => $model]);
                echo $message;
                exit;
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= 'From: <info@coralepitome.com>' . "\r\n";
                //mail($to, $subject, $message, $headers);
        }

        public function actionAppointment() {
                return $this->render('appointment', [
                                //   'brands' => $brands,
                ]);
        }

        public function actionEnquiry() {
                $model = new \common\models\ContactForm;
                if (Yii::$app->request->post()) {
                        $model->name = Yii::$app->request->post('fname');
                        $model->phone = Yii::$app->request->post('fphone');
                        $model->email = Yii::$app->request->post('femail');
                        $model->message = Yii::$app->request->post('fmessage');
                        $model->date = date('Y-m-d');
                        if ($model->save()) {
                                $this->Sendmail($model);
                                return $this->redirect(Yii::$app->request->referrer);
                        }
                }
        }

}
