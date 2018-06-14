<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


if (isset($meta_title) && $meta_title != '')
        $this->title = $meta_title;
else
        $this->title = 'New Bharath Pitstop';
?>



<!--Start breadcrumb area-->
<section class="breadcrumb-area">
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                <div class="breadcrumbs text-center">
                                        <h1>About New Bharath Pitstop</h1>
                                        <h4>Get to Know us Better</h4>
                                </div>
                        </div>
                </div>
        </div>
</section>
<!--End breadcrumb area-->

<!--Start breadcrumb bottom area-->
<section class="breadcrumb-bottom-area">
        <div class="container">
                <div class="row">
                        <div class="col-md-6 col-sm-5">
                                <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><i class="fa fa-angle-right"></i></li>
                                        <li>About</li>
                                </ul>
                        </div>
                        <div class="col-md-6 col-sm-7">
                                <p>We are here to provide 100% services to our customers</p>
                        </div>

                </div>
        </div>
</section>
<!--End breadcrumb bottom area-->

<!--Start customers area-->
<section class="customers-area">
        <div class="container">
                <div class="row">
                        <div class="col-lg-9 col-md-8">
                                <div class="customers-info">
                                        <div class="sec-title text-left">
                                                <h1>Know About Us</h1>
                                                <span class="decor"></span>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-5">
                                                        <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>img/resources/about-sub.jpg" alt="Awesome Image" class="img-responsive"> </div>
                                                </div>
                                                <div class="col-md-7">
                                                        <div class="content">
                                                                <h3>COMPANY OVERVIEW</h3>
                                                                <h5><?= $about->small_content ?></h5>
                                                                <img src="<?= Yii::$app->homeUrl ?>img/icon/since.png"><br><br>

                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="content">

                                                                <p><?= $about->detailed_content ?></p>

                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                                <div class="customer-support">
                                        <h4><?= $about->customer_support ?></h4>
                                        <p><?= $about->customer_support_detail ?></p>
                                        <h3><span class="flaticon-telephone"></span><br><?= $about->customer_support_no ?></h3>
                                        <div class="info-box text-center">
                                                <p>phone: 042630606</p>
                                                <p>Email: dubai@newbharathtyres.com</p>

                                                <div class="social">
                                                        <ul>
                                                                <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
                                                                <li><a href="#"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
                                                                <li><a href="#"><i class="flaticon-google-plus-logo"></i></a></li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>
<!--End customers area-->

<!--Start years tab area-->

<!--End years tab area-->

<!--Fact counter area-->

<!--End counter area-->

<!--Start why choose us area-->
<section class="why-choose-us-area">
        <div class="container">
                <div class="sec-title text-center">
                        <h1>Why Choose Us</h1>
                        <span class="decor"></span>
                </div>
                <div class="row">
                        <!--Start single item-->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="single-item">
                                        <div class="icon-holder">
                                                <span class="flaticon-social"></span>
                                        </div>
                                        <div class="content">
                                                <h3><?= $about->caption_1 ?></h3>
                                                <p><?= $about->caption_1_detail ?></p>

                                        </div>
                                </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="single-item">
                                        <div class="icon-holder">
                                                <span class="flaticon-wrench"></span>
                                        </div>
                                        <div class="content">
                                                <h3><?= $about->caption_2 ?></h3>
                                                <p><?= $about->caption_2_detail ?></p>

                                        </div>
                                </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="single-item">
                                        <div class="icon-holder">
                                                <span class="flaticon-map"></span>
                                        </div>
                                        <div class="content">
                                                <h3><?= $about->caption_3 ?></h3>
                                                <p><?= $about->caption_3_detail ?></p>

                                        </div>
                                </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="single-item">
                                        <div class="icon-holder">
                                                <span class="flaticon-interface-2"></span>
                                        </div>
                                        <div class="content">
                                                <h3><?= $about->caption_4 ?></h3>
                                                <p><?= $about->caption_4_detail ?></p>

                                        </div>
                                </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="single-item">
                                        <div class="icon-holder">
                                                <span class="flaticon-transport-2"></span>
                                        </div>
                                        <div class="content">
                                                <h3><?= $about->caption_5 ?></h3>
                                                <p><?= $about->caption_5_detail ?></p>

                                        </div>
                                </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="single-item">
                                        <div class="icon-holder">
                                                <span class="flaticon-money"></span>
                                        </div>
                                        <div class="content">
                                                <h3><?= $about->caption_6 ?></h3>
                                                <p><?= $about->caption_6_detail ?></p>

                                        </div>
                                </div>
                        </div>
                        <!--End single item-->
                </div>
        </div>
</section>
<!--End why choose us area-->

<!--Start testimonial area-->
<section class="years-tab-area">
        <div class="container">
                <div class="row">
                        <div class="col-lg-9 col-md-8">
                                <div class="years-tab">
                                        <div class="tab-menu">
                                                <ul>
                                                        <li class="active">
                                                                <a href="#launched" data-toggle="tab">
                                                                        <h3>1984</h3>
                                                                        <span>Launched</span>
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="#service" data-toggle="tab">
                                                                        <h3>1986</h3><span>Service of the year</span>
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="#extended" data-toggle="tab">
                                                                        <h3>1987</h3><span>Extended 14 center</span>
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="#engine" data-toggle="tab">
                                                                        <h3>1991</h3><span>Engine Diagnosis </span>
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="#award" data-toggle="tab">
                                                                        <h3>1992</h3><span>Employee Award</span>
                                                                </a>
                                                        </li>
                                                        <li>
                                                                <a href="#offer" data-toggle="tab">
                                                                        <h3>1994</h3><span>Offer of the year</span>
                                                                </a>
                                                        </li>
                                                </ul>
                                        </div>
                                        <div class="tab-content clearfix">
                                                <!--Start single tab pane-->
                                                <div class="tab-pane active" id="launched">
                                                        <div class="title">
                                                                <h2>We Are Started at California - 1984</h2>
                                                                <span class="border"></span>
                                                        </div>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The points of using Lorem Ipsum is that seds uts it has more-or-less normal distribution of letters embarrassing generators  fact that a reader will be distracted by the readable content of a page when looking.</p>
                                                        <div class="row">
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="bottom-text">
                                                                                <p>There are many variations of passages of available, but the majority have suffereed alteration in some forms by seds injected humour or randomiseed words  slightly believable If you are going to user a passages of  you need to be sure theree isn't seds embarrassing hidden in the  fact that a reader.</p>
                                                                        </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="bottom-img-holder">
                                                                                <img src="<?= Yii::$app->homeUrl ?>img/years-tab/1.jpg" alt="">
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <!--End single tab pane-->
                                                <!--Start single tab pane-->
                                                <div class="tab-pane" id="service">
                                                        <div class="title">
                                                                <h2>We Are Started at California - 1984</h2>
                                                                <span class="border"></span>
                                                        </div>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The points of using Lorem Ipsum is that seds uts it has more-or-less normal distribution of letters embarrassing generators  fact that a reader will be distracted by the readable content of a page when looking.</p>
                                                        <div class="row">
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="bottom-text">
                                                                                <p>There are many variations of passages of available, but the majority have suffereed alteration in some forms by seds injected humour or randomiseed words  slightly believable If you are going to user a passages of  you need to be sure theree isn't seds embarrassing hidden in the  fact that a reader.</p>
                                                                        </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="bottom-img-holder">
                                                                                <img src="<?= Yii::$app->homeUrl ?>img/years-tab/2.jpg" alt="">
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <!--End single tab pane-->
                                                <!--Start single tab pane-->
                                                <div class="tab-pane" id="extended">
                                                        <div class="title">
                                                                <h2>We Are Started at California - 1984</h2>
                                                                <span class="border"></span>
                                                        </div>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The points of using Lorem Ipsum is that seds uts it has more-or-less normal distribution of letters embarrassing generators  fact that a reader will be distracted by the readable content of a page when looking.</p>
                                                        <div class="row">
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="bottom-text">
                                                                                <p>There are many variations of passages of available, but the majority have suffereed alteration in some forms by seds injected humour or randomiseed words  slightly believable If you are going to user a passages of  you need to be sure theree isn't seds embarrassing hidden in the  fact that a reader.</p>
                                                                        </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="bottom-img-holder">
                                                                                <img src="<?= Yii::$app->homeUrl ?>img/years-tab/3.jpg" alt="">
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <!--End single tab pane-->
                                                <!--Start single tab pane-->
                                                <div class="tab-pane" id="engine">
                                                        <div class="title">
                                                                <h2>We Are Started at California - 1984</h2>
                                                                <span class="border"></span>
                                                        </div>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The points of using Lorem Ipsum is that seds uts it has more-or-less normal distribution of letters embarrassing generators  fact that a reader will be distracted by the readable content of a page when looking.</p>
                                                        <div class="row">
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="bottom-text">
                                                                                <p>There are many variations of passages of available, but the majority have suffereed alteration in some forms by seds injected humour or randomiseed words  slightly believable If you are going to user a passages of  you need to be sure theree isn't seds embarrassing hidden in the  fact that a reader.</p>
                                                                        </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="bottom-img-holder">
                                                                                <img src="<?= Yii::$app->homeUrl ?>img/years-tab/4.jpg" alt="">
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <!--End single tab pane-->
                                                <!--Start single tab pane-->
                                                <div class="tab-pane" id="award">
                                                        <div class="title">
                                                                <h2>We Are Started at California - 1984</h2>
                                                                <span class="border"></span>
                                                        </div>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The points of using Lorem Ipsum is that seds uts it has more-or-less normal distribution of letters embarrassing generators  fact that a reader will be distracted by the readable content of a page when looking.</p>
                                                        <div class="row">
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="bottom-text">
                                                                                <p>There are many variations of passages of available, but the majority have suffereed alteration in some forms by seds injected humour or randomiseed words  slightly believable If you are going to user a passages of  you need to be sure theree isn't seds embarrassing hidden in the  fact that a reader.</p>
                                                                        </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="bottom-img-holder">
                                                                                <img src="<?= Yii::$app->homeUrl ?>img/years-tab/5.jpg" alt="">
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <!--End single tab pane-->
                                                <!--Start single tab pane-->
                                                <div class="tab-pane" id="offer">
                                                        <div class="title">
                                                                <h2>We Are Started at California - 1984</h2>
                                                                <span class="border"></span>
                                                        </div>
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The points of using Lorem Ipsum is that seds uts it has more-or-less normal distribution of letters embarrassing generators  fact that a reader will be distracted by the readable content of a page when looking.</p>
                                                        <div class="row">
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="bottom-text">
                                                                                <p>There are many variations of passages of available, but the majority have suffereed alteration in some forms by seds injected humour or randomiseed words  slightly believable If you are going to user a passages of  you need to be sure theree isn't seds embarrassing hidden in the  fact that a reader.</p>
                                                                        </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="bottom-img-holder">
                                                                                <img src="<?= Yii::$app->homeUrl ?>img/years-tab/6.jpg" alt="">
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <!--End single tab pane-->
                                        </div>
                                </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                                <div class="working-time">
                                        <h3>Working Time</h3>
                                        <ul>
                                                <li>Monday - Friday<span>9.00 to 18.00</span></li>
                                                <li>Saturday<span>10.00 to 15.00</span></li>
                                                <li>Sunday<span><a href="#">Closed</a></span></li>
                                        </ul>
                                </div>
                                <div class="subscribe">
                                        <h3>Subscribe Us</h3>
                                        <?php $form = ActiveForm::begin(); ?>
                                                <input type="email" name="email" placeholder="Email Address">
                                                <button type="submit"><span class="flaticon-paper"></span></button>
                                                <p>* Your Mail id is Fully Protected.</p>
                                       <?php ActiveForm::end(); ?>
                                </div>
                        </div>
                </div>
        </div>
</section>
<!--End testimonial area-->
