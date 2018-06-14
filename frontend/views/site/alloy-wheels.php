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
                                    
                                    <?php foreach($brands as $brand){
                                        $brand_alloy_wheels=\common\models\AlloyWheels::find()->where(['status'=>1,'brand'=>$brand->id])->all();
                                        if(count($brand_alloy_wheels)>0){
                                        ?>
                                        <div class="product-details-section">
                                                <div class="head-text-detail2"><img src="<?= Yii::$app->homeUrl ?>uploads/brands/<?=$brand->id?>/image.<?=$brand->image?>" class="img-responsive"></div>
                                                <div class="row">
                                                    <?php foreach($brand_alloy_wheels as $wheels){?>
                                                        <div class="col-md-4 col-sm-6 col-xs-6">
                                                                <div class="details-box">
                                                                        <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>uploads/alloy-wheels/<?=$wheels->id?>/image.<?=$wheels->image?>" class="img-responsive"></div>
                                                                        <div class="link"><a href="appointment.html">enquiry Now</a></div>
<div class="cont-box">
                                                                                <h3>Specification</h3>
                                                                                <p><?=$wheels->spec_1?>:  <?=$wheels->spec_1_value?> </p>
                                                                                <p><?=$wheels->spec_2?>:  <?=$wheels->spec_2_value?></p>
                                                                        </div>
                                                                        
                                                                </div>
                                                        </div>
                                                        <?php } ?>
                                                </div>
                                        </div>
                                      
                                    <?php }} ?>

                                </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 pull-left">
                                <div class="single-services-sidebar">
                                        <!--Start Single item-->
                                        <div class="single-item">
                                                <ul class="services-list">
                                                    
                                                        <li><a href="<?= Url::to(['site/tyres']) ?>">TYRES<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                        <li class="active"><a href="<?= Url::to(['site/alloy-wheels']) ?>">ALLOY WHEELS<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                        <li><a href="<?= Url::to(['site/batteries']) ?>">BATTERIES<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                                </ul>
                                        </div>
                                        <!--End Single item-->
                                        <!--Start Single item-->
                                        <?=\common\components\BrochureWidget::widget();?>
                                        <!--End Single item-->
                                        <!--Start Single item-->

                                        <!--End Single item-->
                                </div>
                        </div>
                </div>
        </div>
</section>
<!--End services single area-->
<!--Start free appoinment area-->
<?=\common\components\ContactFormWidget::widget();?>
<!--End free appoinment area-->