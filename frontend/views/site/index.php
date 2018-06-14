<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

if (isset($meta_title) && $meta_title != '')
        $this->title = $meta_title;
else
        $this->title = 'New Bharath Pitstop';
?>

<section class="rev_slider_wrapper ">
        <div class="rev_slider slider1" data-version="5.0" data-controller="true">
                <ul>
                        <?php foreach ($sliders as $slider) { ?>
                                <li data-transition="random" data-title="Wheel Installation" data-thumb="img/slides/1.jpg"> <img src="<?= Yii::$app->homeUrl ?>uploads/sliders/<?= $slider->id ?>/image.<?= $slider->image ?>" alt="" width="1920" height="613" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" >
                                        <div class="tp-caption tp-resizeme"
                                             data-x="left" data-hoffset="0"
                                             data-y="center" data-voffset="142"
                                             data-transform_idle="o:1;"
                                             data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                                             data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                             data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                                             data-splitin="none"
                                             data-splitout="none"
                                             data-start="500">
                                                <div class="wheel-installation">
                                                        <?php if (isset($slider->title_1) && $slider->title_1 != '') { ?>
                                                                <h1><?= $slider->title_1 ?></h1>
                                                        <?php } ?>
                                                        <?php if (isset($slider->title_2) && $slider->title_2 != '') { ?>
                                                                <span class="border"></span> <b><?= $slider->title_2 ?></b>
                                                        <?php } ?>

                                                        <?php if (isset($slider->title_3) && $slider->title_3 != '') { ?>

                                                                <?= wordwrap($slider->title_3, 80, "<br />\n"); ?>
                                                        <?php } ?>
                                                </div>
                                        </div>
                                </li>
                        <?php } ?>

                </ul>

        </div>
</section>

<!--Start Call To Action Area-->
<section class="brand-area">
        <div class="container">
                <div class="content">
                        <div class="slider lazy wow fadeInDown" >
                                <?php foreach ($brands as $barnd) { ?>
                                        <div class="col-md-3 out_lin">
                                                <center>
                                                        <img src="<?= Yii::$app->homeUrl ?>uploads/brands/<?= $barnd->id ?>/image.<?= $barnd->image ?>" class="img-responsive">
                                                </center>
                                        </div>
                                <?php } ?>

                        </div>
                </div>
        </div>
</section>
<section class="call-to-action-area">
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                <div class="box">
                                        <div class="row">
                                                <div class="col-md-8">
                                                        <h2>Get First Class Services For Your Vichcle</h2>
                                                </div>
                                                <div class="col-md-4"> <a href="appointment.html">Get Free Appoinment</a> </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>
<!--End Call To Action Area-->
<!--Start quality service area-->
<section class="quality-service-area">
        <div class="container">
                <div class="row">
                        <div class="col-md-7">
                                <div class="service-content">
                                        <div class="sec-title text-left">
                                                <h2>Welcom to New Bharath Tyres</h2>
                                                <span class="decor"></span> </div>
                                        <p>Welcome to NEW BHARATH TYRES. New Bharath Tyres offers a complete range of Tyres, Alloy-wheels and modern tyre services.<br>
                                                <br>
                                                <img src="img/icon/since.png"><br>
                                                <br>
                                                The Best quality products and 100% customer satisfaction at unbeatable price .<br>
                                                NewBharath Tyres, the pioneers in tyre retailing with over 60 years of excellence has been accredited the No.1 dealer by world’s leading tyre manufacturers. </p>
                                        <a class="aut-cr-btn" href="about-us.html">Read More</a> <a class="aut-cr-btn" href="services.html">View Services</a> </div>
                        </div>
                        <div class="col-md-5">
                                <div class="service-client-carousel">
                                        <div id="service-client-carousel" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                        <!--Start single item-->
                                                        <?php
                                                        $t = 0;
                                                        foreach ($testimonials as $test) {
                                                                $t++;
                                                                ?>
                                                                <div class="item <?= $t == 1 ? 'active' : '' ?>">
                                                                        <div class="single-item">
                                                                                <div class="img-holder"> <img src="<?= Yii::$app->homeUrl ?>uploads/testimonials/<?= $test->id ?>/image.<?= $test->image ?>" alt="Awesome Image"> <span class="line"></span> </div>
                                                                                <div class="content">
                                                                                        <h3><?= $test->name ?></h3>
                                                                                        <div class="info-box clearfix">
                                                                                                <h6><?= $test->link ?></h6>
                                                                                                <div class="rating">
                                                                                                        <ul>
                                                                                                                <?php for ($i = 0; $i < $test->rating; $i++) { ?>
                                                                                                                        <li><span class="flaticon-favorite"></span></li>
                                                                                                                <?php } ?>
                                                                                                        </ul>
                                                                                                </div>
                                                                                        </div>
                                                                                        <p><?= $test->content ?></p>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        <?php } ?>
                                                        <!--End single item-->

                                                        <!--End single item-->
                                                        <div class="button"> <a class="left testimonial-control" href="#service-client-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a> <a class="right testimonial-control" href="#service-client-carousel" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a> </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>
<!--End quality service area-->
<!--Start trusted service area-->
<section class="trusted-service-area">
        <div class="container">
                <div class="row">
                        <!--Start single item-->
                        <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="single-item">
                                        <div class="icon-holder"> <span class="flaticon-social"></span> </div>
                                        <div class="content">
                                                <h3>100% Transparency</h3>
                                                <p>We ensure that you get a well detailed break-up of each minor repair work</p>
                                                <!--<a href="#">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a> --></div>
                                </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="single-item">
                                        <div class="icon-holder"> <span class="flaticon-wrench"></span> </div>
                                        <div class="content">
                                                <h3>Genuine Spare Parts</h3>
                                                <p>We useuthorized genuine spare parts & accessories to ensure that your</p>
                                        </div>
                                </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="single-item">
                                        <div class="icon-holder"> <span class="flaticon-map"></span> </div>
                                        <div class="content">
                                                <h3>Trusted & Quality Service</h3>
                                                <p>You can avail our free pickup & drop so that you can just sit & relax</p>
                                        </div>
                                </div>
                        </div>
                        <!--End single item-->
                </div>
        </div>
</section>
<!--End trusted service area-->
<section class="best-service-area">
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                <div class="top-bg"></div>
                        </div>
                </div>
                <div class="sec-title large-title text-center">
                        <h2>Our Products</h2>
                        <span class="decor"></span> </div>
                <div class="row our-best-service-items">
                        <!--Start single item-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-item">
                                        <div class="img-holder"> <img src="img/best-service/1.jpg" alt="Awesome Image"> </div>
                                        <div class="overlay">
                                                <div class="img-holder"> <img src="img/best-service/1-hover.jpg" alt="Awesome Image"/> </div>
                                                <!-- /.img-holder -->
                                                <div class="icon-holder"> <span class="flaticon-float"></span> </div>
                                                <div class="content">
                                                        <h3>Tyres</h3>
                                                        <p>We should point out that maintaining your vehiclewith an occasional visual inspectionfluid level.</p>
                                                        <a href="tyres.html">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a> </div>
                                        </div>
                                        <div class="title clearfix">
                                                <div class="icon-holder"> <span class="flaticon-float"></span> </div>
                                                <h3> Tyres</h3>
                                                <div class="go-top-icon"> <a href="tyres.html"><span class="flaticon-up-arrow"></span></a> </div>
                                        </div>
                                </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-item">
                                        <div class="img-holder"> <img src="img/best-service/2.jpg" alt="Awesome Image"> </div>
                                        <div class="overlay">
                                                <div class="img-holder"> <img src="img/best-service/2-hover.jpg" alt="Awesome Image"/> </div>
                                                <!-- /.img-holder -->
                                                <div class="icon-holder"> <span class="flaticon-car-service"></span> </div>
                                                <div class="content">
                                                        <h3>Alloy Wheels</h3>
                                                        <p>We should point out that maintaining your vehiclewith an occasional visual inspectionfluid level.</p>
                                                        <a href="alloy-wheels.html">Read More<i class="fa fa-caret-right" ></i></a> </div>
                                        </div>
                                        <div class="title clearfix">
                                                <div class="icon-holder"> <span class="flaticon-car-service"></span> </div>
                                                <h3>Alloy Wheels</h3>
                                                <div class="go-top-icon"> <a href="alloy-wheels.html"><span class="flaticon-up-arrow"></span></a> </div>
                                        </div>
                                </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="single-item middle">
                                        <div class="img-holder"> <img src="img/best-service/3.jpg" alt="Awesome Image"> </div>
                                        <div class="overlay">
                                                <div class="img-holder"> <img src="img/best-service/3-hover.jpg" alt="Awesome Image"/> </div>
                                                <!-- /.img-holder -->
                                                <div class="icon-holder"> <span class="flaticon-technology"></span> </div>
                                                <div class="content">
                                                        <h3>Batteries</h3>
                                                        <p>We should point out that maintaining your vehiclewith an occasional visual inspectionfluid level.</p>
                                                        <a href="batteries.html">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a> </div>
                                        </div>
                                        <div class="title clearfix">
                                                <div class="icon-holder"> <span class="flaticon-car-service"></span> </div>
                                                <h3>Batteries</h3>
                                                <div class="go-top-icon"> <a href="batteries.html"><span class="flaticon-up-arrow"></span></a> </div>
                                        </div>
                                </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="products-read-more"><a href="tyres.html">view more</a></div>
                        <!--End single item-->
                </div>
        </div>
</section>
<!--Start wheel work area-->
<section class="wheel-work-area">
        <div class="container">
                <div class="row">
                        <div class="col-lg-8 col-md-7 col-sm-6 col-xs-12 wheel-work-order2">
                                <div class="wheel-work-left">
                                        <div class="tab-content">
                                                <!--Start single tab pane-->
                                                <?php
                                                $serv = 0;
                                                foreach ($our_services as $services) {
                                                        $serv++;
                                                        ?>
                                                        <div class="tab-pane fade <?= $serv == 1 ? 'in active' : '' ?>" id="<?= $services->id ?>">
                                                                <div class="title">
                                                                        <h3><?= $services->title ?></h3>
                                                                </div>
                                                                <div class="row">
                                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="img-holder"> <img src="<?= Yii::$app->homeUrl ?>uploads/our-services//<?= $services->id ?>/image.<?= $services->image ?>" alt="<?= $services->image_alt ?>"> </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="content">
                                                                                        <p><?= $services->content ?> </p>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <?php
                                                                if (isset($services->specifications) && $services->specifications != '') {
                                                                        $specifications = explode(',', $services->specifications);
                                                                        ?>
                                                                        <div class="row">
                                                                                <div class="col-lg-3 col-md-6 col-sm-8">
                                                                                        <div class="single-list-item">
                                                                                                <ul>
                                                                                                        <?php
                                                                                                        $serv_specification = 0;
                                                                                                        foreach ($specifications as $spec) {
                                                                                                                $serv_specification++;
                                                                                                                ?>

                                                                                                                <li><i class="fa fa-check" aria-hidden="true"></i><?= $spec ?></li>
                                                                                                                <?php
                                                                                                                if ($serv_specification % 2 == 0) {
                                                                                                                        echo '</ul></div></div><div class="col-lg-3 col-md-6 col-sm-8"><div class="single-list-item"><ul>';
                                                                                                                }
                                                                                                        }
                                                                                                        ?>
                                                                                                </ul>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                <?php } ?>
                                                                <div class="button"> <a class="aut-cr-btn" href="appointment.html">Get Free Appoinment</a> </div>
                                                        </div>
                                                <?php } ?>

                                        </div>
                                </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wheel-work-order">
                                <div class="wheel-work-right">
                                        <h1>Our Services</h1>
                                        <ul class="otherservice_list">

                                                <?php
                                                $serv_list = 0;
                                                foreach ($our_services as $services) {
                                                        $serv_list++;
                                                        ?>
                                                        <li class="<?= $serv_list == 1 ? 'active' : '' ?>"> <a href="#<?= $services->id ?>" data-toggle="tab" class="otherservices-hover otherservice-mobile">
                                                                        <div class="single-other-service-list">
                                                                                <div class="title">
                                                                                        <div class="title-icon <?= $serv_list == 1 ? '' : 'title-icon' . $serv_list ?>"></div>
                                                                                        <h3><?= $services->title ?></h3>
                                                                                </div>
                                                                        </div>
                                                                </a> </li>
                                                <?php } ?>

                                        </ul>
                                </div>
                        </div>
                </div>
        </div>
</section>
<!--End wheel work area-->
<section class="home-secect-privileges"><!--home-secect-privileges-->
        <div class="container">
                <div class="row">
                        <div class="col-md-6">
                                <div class="privileges-box">
                                        <h3 class="head-text">RIDE ON YOUR <span>PRIVILEGES</span></h3>
                                        <p><?= $privilege->content ?> </p>
                                        <ul class="list">
                                                <li class="silver"><?= Html::a($privilege->privilege_1, ['/site/privileges']) ?></li>
                                                <li class="gold"><?= Html::a($privilege->privilege_2, ['/site/privileges']) ?></li>
                                                <li class="platinum"><?= Html::a($privilege->privilege_3, ['/site/privileges']) ?></li>
                                        </ul>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="img-box"><img alt="<?= $privilege->alt_tag ?>" src="<?= Yii::$app->homeUrl ?>uploads/home-privileges/<?= $privilege->id ?>/image.<?= $privilege->image ?>" class="img-responsive"></div>
                        </div>
                </div>
                <div class="link"><?= Html::a('View More Select Privileges', ['/site/privileges']) ?></div>
        </div>
</section><!--home-secect-privileges-->
<!--Start free appoinment area-->
<section class="free-appoinment-area">
        <div class="container">
                <form class="free-appoinment-form" action="#">
                        <div class="row">
                                <div class="col-md-6">
                                        <div class="sec-title text-left">
                                                <h1>Make Free Appoinment</h1>
                                                <span class="decor"></span> </div>
                                        <div class="row">
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <input type="text" name="name" placeholder="Your Name*">
                                                                <div class="icon-holder"> <span class="flaticon-people"></span> </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <input type="text" name="mobile-number" placeholder="Mobile Num">
                                                                <div class="icon-holder"> <span class="flaticon-telephone"></span> </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <input type="text" name="email" placeholder="Email Address*">
                                                                <div class="icon-holder"> <span class="flaticon-note"></span> </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <textarea name="comment" placeholder="Comments..."></textarea>
                                                                <div class="icon-holder comment"> <span class="flaticon-social-1"></span> </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <p class="select-category">Select Category:</p>
                                        <div class="category-item">
                                                <input type="radio" id="indv" name="indvlcorpt" value="Individual">
                                                <label for="indv">Individual</label>
                                        </div>
                                        <div class="category-item">
                                                <input type="radio" id="corpt" name="indvlcorpt" value="Corporate">
                                                <label for="corpt">Corporate</label>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <input type="text" name="reg-number" placeholder="Vehicle Registration Num*">
                                                                <div class="icon-holder"> <span class="flaticon-sign"></span> </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="row">
                                                                <div class="col-md-6">
                                                                        <div class="input-field">
                                                                                <input type="text" name="reg-number" placeholder="Vehicle Registration Num*">
                                                                                <div class="icon-holder"> <span class="flaticon-sign"></span> </div>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                        <div class="input-field">
                                                                                <input type="text" name="reg-number" placeholder="Vehicle Registration Num*">
                                                                                <div class="icon-holder"> <span class="flaticon-sign"></span> </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <input type="text" name="reg-number" placeholder="Vehicle Registration Num*">
                                                                <div class="icon-holder"> <span class="flaticon-sign"></span> </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="input-field">
                                                                <input type="text" name="date" placeholder="Select Date">
                                                                <div class="icon-holder"> <span class="flaticon-dates"></span> </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <button class="aut-cr-btn" type="button">Book Now</button>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </form>
        </div>
</section>