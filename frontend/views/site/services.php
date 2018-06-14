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
                                        <h1>Services</h1>
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
                                        <li>Services</li>
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
                                <div class="services-single-content">
                                        <div class="sec-title text-left">
                                                <h1><?=$service_detail->title?></h1>
                                                <span class="decor"></span>
                                        </div>
                                    <?php  
                                    $path = Yii::getAlias('@paths') . '/services/' . $service_detail->id . '/gallery_thumb';
                        if (count(glob("{$path}/*")) > 0) { ?>
                                    
                                        <div id="services-single-carousel" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <?php
                                                    $k = 0;
                                foreach (glob("{$path}/*") as $file) {
                                                    ?>
                                                        <li data-target="#services-single-carousel" data-slide-to="<?=$k?>" class="<?=$k==0?'active':''?>"></li>
                                                        
                                <?php $k++;} ?>
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                     <?php
                                                    $l = 0;
                                foreach (glob("{$path}/*") as $file) {
                                    $arry = explode('/', $file);
                                        $img_nmee = end($arry);

                                        $img_nmees = explode('.', $img_nmee);
                                        if ($img_nmees['1'] != '') {
                                                    ?>
                                                        <div class="item <?=$l==0?'active':''?>">
                                                                <div class="single-item">
                                                                        <div class="img-holder">
                                                                                <img src="<?= Yii::$app->homeUrl ?>uploads/services/<?=$service_detail->id?>/gallery/<?=end($arry)?>" alt="Awesome Image">
                                                                        </div>
                                                                </div>
                                                        </div>
                                <?php $l++;}} ?>   
                                                      
                                                </div>
                                        </div>
                        <?php } ?>
                                        <div class="content">

                                                <?=$service_detail->content?>
                                        </div>



                                </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 pull-left">
                                <div class="single-services-sidebar">
                                        <!--Start Single item-->
                                        <div class="single-item">
                                                <ul class="services-list">
                                                    <?php foreach($services as $service){ ?>
<li class="<?=$service->canonical_name==$service_detail->canonical_name?'active':''?>"><?= Html::a($service->title.' <i class="fa fa-angle-right" aria-hidden="true"></i>', ['/site/services','service'=>$service->canonical_name]) ?> </li>
                                                    <?php }?>
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