<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
$contact_details = \common\models\ContactAddress::findOne(1);
$contents=\common\models\HomePageOther::findOne(1);
$about = \common\models\About::findOne(1);
$params = $parameters = \yii::$app->getRequest()->getQueryParams();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <!-- Basic -->

                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <meta name='robots' content='noindex,nofollow' />
                <?= Html::csrfMetaTags() ?>
                <title><?= Html::encode($this->title) ?></title>
                <link rel="shortcut icon" href="<?= Yii::$app->homeUrl ?>favicon/icon.png">
                <script src="<?= yii::$app->homeUrl; ?>js/jquery-min.js"></script>
                <?php $this->head() ?>
        </head>
        <body class="main-body">
                <?php $action = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id; // controller action id  ?>
                <?php $this->beginBody() ?>

                <?php if (Yii::$app->controller->action->id == 'index' || '') { ?>
                        <div class="left-sd-service">
                                <ul class="list">
                                        <li><a href="tyres.html">tyres</a></li>
                                        <li><a href="batteries.html" class="icon2">Batteries</a></li>
                                        <li><a href="alloy-wheels.html" class="icon3">alloy wheels</a></li>
                                        <li><a href="services.html" class="icon4">wheel alignment</a></li>
                                        <li><a href="services.html" class="icon5">wheel balancing</a></li>
                                        <li><a href="services.html" class="icon6">nitrogen filling</a></li>
                                        <li><a href="services.html" class="icon7">oil change</a></li>
                                        <li><a href="services.html" class="icon8">brakes</a></li>
                                </ul>
                        </div>
                        <div class="main-link"> <a href="#exampleModal" data-toggle="modal" class="quick-enquiry"></a> </div>
                        <!--main-popup-->
                        <div class="main-popup">
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                        <div class="modal-dialog modal-md" role="document">
                                                <div class="modal-content ">
                                                        <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                <h4 class="modal-title">Need Assistance?</h4>
                                                        </div>
                                                        <form>
                                                                <div class="form-box">
                                                                        <input name="" type="text" class="form-control" placeholder="Your Full Name">
                                                                        <input name="" type="text" class="form-control" placeholder="Your Phone Number">
                                                                        <input name="" type="text" class="form-control" placeholder="Your Email">
                                                                        <textarea name="" cols="" rows="" class="form-control" placeholder="Your Message"></textarea>
                                                                        <input name="" type="submit" value="SEND" class="submit">
                                                                </div>
                                                        </form>
                                                </div>
                                        </div>
                                </div>
                        </div>
                <?php } ?>
                <!-- /.customizer-box -->
                <!--Start header area-->
                <header class="main-header stricky">
                        <!--Start header top-->
                        <div class="header-top">
                                <div class="container">
                                        <div class="header-top-content">
                                                <div class="row">
                                                        <div class="col-lg-8 col-md-7 col-sm-9 col-xs-12">
                                                                <div class="header-contact-info">
                                                                        <ul>
                                                                                <li><i class="flaticon-telephone"></i>Customer Support: <?= $about->customer_support_no ?></li>
                                                                                <li><i class="flaticon-interface-1"></i><?= $contact_details->email ?></li>
                                                                        </ul>
                                                                </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-5 col-sm-3 col-xs-12">
                                                                <div class="social-links">
                                                                        <ul>
                                                                                <li><a href="<?= $contact_details->facebook ?>" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                                                                                <li><a href="<?= $contact_details->twitter ?>" target="_blank"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
                                                                                <li><a href="<?= $contact_details->google_plus ?>" target="_blank"><i class="flaticon-google-plus-logo"></i></a></li>
                                                                                <li><a href="<?= $contact_details->instagram ?>" target="_blank"><i class="flaticon-linkedin-logo"></i></a></li>
                                                                        </ul>
                                                                </div>
                                                                <div class="top-map"><a href="<?= $contact_details->map_link ?>" target="_blank"></a></div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <!--End header top-->

                        <nav class="header-lower navbar navbar-default">
                                <div class="container">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="row">
                                                <div class="col-md-3">
                                                        <div class="logo"> <a  href="<?= Yii::$app->homeUrl ?>"><img src="<?= Yii::$app->homeUrl ?>img/resources/logo.png" alt=""></a></div>
                                                </div>
                                                <div class="col-md-7 col-sm-10 col-xs-9">
                                                        <div class="navbar-header">
                                                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                                        </div>

                                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                                                <ul class="nav navbar-nav ">
                                                                        <li class="<?= Yii::$app->controller->action->id == 'index' || '' ? 'active' : '' ?>"><?= Html::a('Home <span class="decor"></span>', ['/site/index'], ['title' => 'New Bharath Pitstop']) ?></li>
                                                                        <li class="<?= Yii::$app->controller->action->id == 'about' || '' ? 'active' : '' ?>"><?= Html::a('About Us', ['/site/about'], ['title' => 'New Bharath Pitstop']) ?></li>
                                                                        <li class="dropdown"> <a href="services.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="true">Products <span class="decor"></span></a>
                                                                                <ul class="dropdown-menu">
                                                                                        <li><a href="<?= Yii::$app->homeUrl ?>site/tyres">Tyres</a></li>
                                                                                        <li><a href="<?= Yii::$app->homeUrl ?>site/alloy-wheels">Alloy Wheels</a></li>
                                                                                        <li><a href="<?= Yii::$app->homeUrl ?>site/batteries">Batteries</a></li>

                                                                                </ul>
                                                                        </li>
                                                                        <li class="dropdown"> <a href="<?= Yii::$app->homeUrl ?>site/services" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="true">Services <span class="decor"></span></a>
                                                                                <ul class="dropdown-menu">
                                                                                        <li><a href="<?= Yii::$app->homeUrl ?>site/services">Wheel Alignment</a></li>
                                                                                        <li><a href="#">Wheel Balancing</a></li>
                                                                                        <li><a href="#">Tyre Fitment</a></li>
                                                                                        <li><a href="#">Wheel Care</a></li>
                                                                                        <li><a href="#">Nitrogen Air</a></li>
                                                                                        <li><a href="#">Air Conditioning</a></li>
                                                                                        <li><a href="#">Brakes</a></li>
                                                                                        <li><a href="#">Window Tinting</a></li>
                                                                                        <li><a href="#">Car Detailing</a></li>
                                                                                </ul>
                                                                        </li>
                                                                        <li class="<?= Yii::$app->controller->action->id == 'privileges' || '' ? 'active' : '' ?>"><?= Html::a('select Privilege', ['/site/privileges'], ['title' => 'New Bharath Pitstop']) ?></li>
                                                                        <li class="<?= Yii::$app->controller->action->id == 'offers' || '' ? 'active' : '' ?>"><?= Html::a('offers', ['/site/offers'], ['title' => 'New Bharath Pitstop']) ?></li>
                                                                        <li class="<?= Yii::$app->controller->action->id == 'contact' || '' ? 'active' : '' ?>"><?= Html::a('Contact', ['/site/contact'], ['title' => 'New Bharath Pitstop']) ?></li>
                                                                </ul>
                                                        </div>
                                                        <!-- /.navbar-collapse -->
                                                </div>
                                                <div class="col-md-2 col-sm-2 col-xs-3">
                                                        <div class="header-years-box"><img src="<?= Yii::$app->homeUrl ?>img/icon/years.png" class="img-responsive"></div>
                                                </div>
                                        </div>
                                </div>
                                <!-- /.container-fluid -->
                        </nav>
                </header>
                <!--End header area-->

                <?= $content ?>

                <footer class="footer-area">
                        <div class="footer-middle">
                                <div class="container">
                                        <div class="row">
                                                <!--Start single footer widget-->
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="single-footer-widget">
                                                                <div class="footer-logo"> <img src="<?= Yii::$app->homeUrl ?>img/resources/footer-logo.png" alt="Awesome Footer Logo"> </div>
                                                                <div class="text">
                                                                        <p><?=$contents->footer_content?></p>
                                                                </div>
                                                        </div>
                                                </div>
                                                <!--End single footer widget-->
                                                <!--Start single footer widget-->
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="single-footer-widget">
                                                                <div class="sec-title text-left">
                                                                        <h2>useful links</h2>
                                                                        <span class="decor"></span> </div>
                                                                <ul class="service-list">
                                                                        <li><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a></li>
                                                                        <li><a href="about-us.html"><i class="fa fa-angle-right" aria-hidden="true"></i>About us </a></li>
                                                                        <li><a href="products.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Products </a></li>
                                                                        <li><a href="services.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Services</a></li>
                                                                        <li><a href="blog.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog </a></li>
                                                                        <li><a href="brand.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Our brand</a></li>
                                                                        <li><a href="contact.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact US</a></li>
                                                                </ul>
                                                        </div>
                                                </div>
                                                <!--End single footer widget-->
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="single-footer-widget">
                                                                <div class="sec-title text-left">
                                                                        <h2>Our Services</h2>
                                                                        <span class="decor"></span> </div>
                                                                <ul class="service-list">
                                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Wheel Alignment</a></li>
                                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Wheel Balancing</a></li>
                                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Tyre Fitment</a></li>
                                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Wheel Care</a></li>
                                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Nitrogen Air</a></li>
                                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Air Conditioning</a></li>
                                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Brakes</a></li>
                                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Window Tinting</a></li>
                                                                        <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Car Detailing</a></li>
                                                                </ul>
                                                        </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="single-footer-widget">
                                                                <div class="sec-title text-left">
                                                                        <h2>CONTACT US</h2>
                                                                        <span class="decor"></span> </div>
                                                                <div class="f-contact"><b>Address</b>
                                                                        <p><?=$contact_details->address?></p>
                                                                </div>
                                                                <div class="f-contact"><b>Phone No</b>
                                                                        <p><?=$contact_details->phone1?></p>
                                                                </div>
                                                                <div class="f-contact"><b>Email</b>
                                                                        <p><?=$contact_details->email?></p>
                                                                </div>
                                                                <div class="footer-social-link">
                                                                        <ul>
                                                                                <li><a href="<?= $contact_details->facebook ?>" target="_blank"><i class="flaticon-facebook-letter-logo"></i></a></li>
                                                                                <li><a href="<?= $contact_details->twitter ?>" target="_blank"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
                                                                                <li><a href="<?= $contact_details->google_plus ?>" target="_blank"><i class="flaticon-google-plus-logo"></i></a></li>
                                                                                <li><a href="<?= $contact_details->instagram ?>" target="_blank"><i class="flaticon-linkedin-logo"></i></a></li>
                                                                        </ul>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="footer-bottom">
                                <div class="container">
                                        <div class="row">
                                                <div class="col-md-12">
                                                        <div class="copy-right">
                                                                <p>Copyright © 2018 New Bharath pitstop. All Rights Reserved.</a></p>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </footer>

                <?php $this->endBody() ?>

                <script>
                        if ($(window).width() > 768) {
                                $('.otherservices-hover').hover(function () {
                                        $(".otherservices-hover").unbind('mouseover mouseleave');
                                        if ($(this).attr('href')) {
                                                $('.tab-pane').removeClass('active');
                                                $($('ul.otherservice_list li.active a').attr("href")).addClass('active');
                                        }
                                        $(this).trigger("click");
                                });

                        } else {
                                $(".otherservice-mobile").removeClass("otherservices-hover");
                        }


                </script>
        </body>

</html>
<?php $this->endPage() ?>
