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
                                <li data-transition="random" data-title="Wheel Installation" data-thumb="img/slides/1.jpg"> <img src="<?= Yii::$app->homeUrl ?>uploads/sliders/<?= $slider->id ?>/image.<?= $slider->image ?>" alt="<?= $slider->alt_tag ?>" width="1920" height="613" data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" >
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
                                                                <h2><?= $slider->title_1 ?></h2>
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
                                                <!--<center>-->
                                                <img src="<?= Yii::$app->homeUrl ?>uploads/brands/<?= $barnd->id ?>/image.<?= $barnd->image ?>" class="img-responsive" alt="<?= $barnd->image_alt ?>">
                                                <!--</center>-->
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
                                                        <h2><?= $home_page_cotent->banner_label ?></h2>
                                                </div>
                                                <div class="col-md-4"> <?= Html::a('Get Free Appoinment', ['/site/appointment']) ?> </div>
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
                                                <h2><?= $home_page_cotent->welcome_note ?></h2>
                                                <span class="decor"></span> </div>
                                        <p><?= $home_page_cotent->small_content ?><br>
                                                <br>
                                                <img src="<?= Yii::$app->homeUrl ?>img/icon/since.png" alt="About NBT"><br>
                                                <br>
                                                <?= $home_page_cotent->detail_content ?> </p>
                                        <?= Html::a('Read More', ['/site/about'], ['class' => 'aut-cr-btn']) ?>
                                        <?= Html::a('View Services', ['/site/services', 'service' => 'wheel-alignment'], ['class' => 'aut-cr-btn']) ?>
                                </div>

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
                                                                                <div class="img-holder"> <img src="<?= Yii::$app->homeUrl ?>uploads/testimonials/<?= $test->id ?>/image.<?= $test->image ?>" alt="<?= $test->name ?>"> <span class="line"></span> </div>
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
                                                <h3><?= $home_page_cotent->caption_1 ?></h3>
                                                <p><?= $home_page_cotent->caption_1_detail ?></p>
                                                <!--<a href="#">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a> --></div>
                                </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="single-item">
                                        <div class="icon-holder"> <span class="flaticon-wrench"></span> </div>
                                        <div class="content">
                                                <h3><?= $home_page_cotent->caption_2 ?></h3>
                                                <p><?= $home_page_cotent->caption_2_detail ?></p>
                                        </div>
                                </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="single-item">
                                        <div class="icon-holder"> <span class="flaticon-map"></span> </div>
                                        <div class="content">
                                                <h3><?= $home_page_cotent->caption_3 ?></h3>
                                                <p><?= $home_page_cotent->caption_3_detail ?></p>
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
                                        <div class="img-holder"> <img src="<?= Yii::$app->homeUrl ?>uploads/our-products/1/1/image.<?= $our_products->image_1 ?>" alt="<?= $our_products->image_alt_1 ?>"> </div>
                                        <div class="overlay">
                                                <div class="img-holder"> <img src="<?= Yii::$app->homeUrl ?>uploads/our-products/1/1/hover/image.<?= $our_products->other_image_1 ?>" alt="<?= $our_products->image_alt_1 ?>"/> </div>
                                                <!-- /.img-holder -->
                                                <div class="icon-holder"> <span class="flaticon-float"></span> </div>
                                                <div class="content">
                                                        <h3><?= $our_products->title_1 ?></h3>
                                                        <p><?= $our_products->description_1 ?></p>
                                                        <?= Html::a('Read More<i class="fa fa-caret-right" ></i>', ['/site/tyres']) ?>
                                                </div>
                                        </div>
                                        <div class="title clearfix">
                                                <div class="icon-holder"> <span class="flaticon-float"></span> </div>
                                                <h3> <?= $our_products->title_1 ?></h3>
                                                <div class="go-top-icon">
                                                        <?= Html::a('<span class="flaticon-up-arrow"></span>', ['/site/tyres']) ?>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-item">
                                        <div class="img-holder"> <img src="<?= Yii::$app->homeUrl ?>uploads/our-products/1/2/image.<?= $our_products->image_2 ?>" alt="<?= $our_products->image_alt_2 ?>"> </div>
                                        <div class="overlay">
                                                <div class="img-holder"> <img src="<?= Yii::$app->homeUrl ?>uploads/our-products/1/2/hover/image.<?= $our_products->other_image_2 ?>" alt="<?= $our_products->image_alt_2 ?>"/> </div>
                                                <!-- /.img-holder -->
                                                <div class="icon-holder"> <span class="flaticon-car-service"></span> </div>
                                                <div class="content">
                                                        <h3><?= $our_products->title_2 ?></h3>
                                                        <p><?= $our_products->description_2 ?></p>
                                                        <!--<a href="alloy-wheels.html">Read More<i class="fa fa-caret-right" ></i></a>-->
                                                        <?= Html::a('Read More<i class="fa fa-caret-right" ></i>', ['/site/alloy-wheels']) ?>
                                                </div>
                                        </div>
                                        <div class="title clearfix">
                                                <div class="icon-holder"> <span class="flaticon-car-service"></span> </div>
                                                <h3>Alloy Wheels</h3>
                                                <div class="go-top-icon">
                                                        <?= Html::a('<span class="flaticon-up-arrow"></span>', ['/site/alloy-wheels']) ?>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="single-item middle">
                                        <div class="img-holder"> <img src="<?= Yii::$app->homeUrl ?>uploads/our-products/1/3/image.<?= $our_products->image_3 ?>" alt="<?= $our_products->image_alt_3 ?>"> </div>
                                        <div class="overlay">
                                                <div class="img-holder"> <img src="<?= Yii::$app->homeUrl ?>uploads/our-products/1/3/hover/image.<?= $our_products->other_image_3 ?>" alt="<?= $our_products->image_alt_3 ?>"/> </div>
                                                <!-- /.img-holder -->
                                                <div class="icon-holder"> <span class="flaticon-technology"></span> </div>
                                                <div class="content">
                                                        <h3><?= $our_products->title_3 ?></h3>
                                                        <p><?= $our_products->description_3 ?></p>
                                                        <?= Html::a('Read More<i class="fa fa-caret-right" ></i>', ['/site/batteries']) ?>
                                                </div>
                                        </div>
                                        <div class="title clearfix">
                                                <div class="icon-holder"> <span class="flaticon-car-service"></span> </div>
                                                <h3>Batteries</h3>
                                                <div class="go-top-icon"><?= Html::a('<span class="flaticon-up-arrow"></span>', ['/site/batteries']) ?> </div>
                                        </div>
                                </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="products-read-more"><?= Html::a('view more', ['/site/tyres']) ?></div>
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
                                                                <div class="button">
                                                                        <!--<a class="aut-cr-btn" href="appointment.html">Get Free Appoinment</a>-->
                                                                        <?= Html::a('Get Free Appoinment', ['/site/tyres'], ['class' => 'aut-cr-btn']) ?>
                                                                </div>
                                                        </div>
                                                <?php } ?>

                                        </div>
                                </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 wheel-work-order">
                                <div class="wheel-work-right">
                                        <h2>Our Services</h2>
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
<?= \common\components\ContactFormWidget::widget(); ?>