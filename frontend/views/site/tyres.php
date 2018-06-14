<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

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
                                        <h1>Products</h1>
                                        <h4>Keep Your Vehicle Clean and Smart Like You</h4>
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
                                        <li>Products</li>
                                </ul>
                        </div>
                        <div class="col-md-6 col-sm-7">
                                <p>We are here to provide 100% services to our customers</p>
                        </div>
                </div>
        </div>
</section>
<!--End breadcrumb bottom area-->
<!--Start services single area-->
<section class="services-single-area">
        <div class="container">
                <div class="row">
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">
                                <div class="in-product-section">
                                        <h2 class="head-text">tyres brands</h2>
                                        <div class="main-brand-box">
                                                <?php foreach ($brands as $brand) { ?>
                                                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4">
                                                                <div class="brands-box"><a href="<?= Url::to(['site/tyres-detail', 'brand' => $brand->title]) ?>"><img alt="<?= $brand->title ?>" src="<?= Yii::$app->homeUrl ?>uploads/brands/<?= $brand->id ?>/image.<?= $brand->image ?>" class="img-responsive"></a></div>
                                                        </div>
                                                <?php } ?>

                                        </div>
                                </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 pull-left">
                                <div class="single-services-sidebar">
                                        <!--Start Single item-->
                                        <div class="single-item">
                                                <ul class="services-list">
                                                        <li class="active"><a href="<?= Url::to(['site/tyres']) ?>">TYRES<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                        <li><a href="<?= Url::to(['site/alloy-wheels']) ?>">ALLOY WHEELS<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                        <li><a href="<?= Url::to(['site/batteries']) ?>">BATTERIES<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                </ul>
                                        </div>
                                        <!--End Single item-->
                                        <?=\common\components\BrochureWidget::widget();?>
                                        <!--Start Single item-->
<!--                                        <div class="single-item">
                                                <div class="sec-title text-left">
                                                        <h2>Our Brochures</h2>
                                                        <span class="decor"></span> </div>
                                                <div class="brochures-content">
                                                        <div class="img-holder"> <img src="<?= Yii::$app->homeUrl ?>img/resources/brochures.jpg" alt=""> </div>
                                                        <ul class="brochures-list">
                                                                <li><a href="#"><span class="flaticon-interface"></span>Service Brochure.PDF</a></li>
                                                                <li><a href="#"><span class="flaticon-interface"></span>air conditioner.PDF</a></li>
                                                        </ul>
                                                </div>
                                        </div>-->
                                        <!--End Single item-->
                                        <!--Start Single item-->

                                        <!--End Single item-->
                                </div>
                        </div>
                </div>
        </div>
</section>
<!--End services single area-->
<?=\common\components\ContactFormWidget::widget();?>