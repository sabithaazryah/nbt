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
                                        <h1>offers</h1>
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
                                        <li>offers</li>
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
                <div class="in-offer-section">
                        <div class="row">
                            <?php foreach($offers as $offer) {?>
                                <div class="col-md-6">
                                        <div class="offer-box">
                                                <div class="img-box">
                                                        <img src="<?= Yii::$app->homeUrl ?>uploads/offers/<?=$offer->id?>/image.<?=$offer->image?>" alt="<?=$offer->alt_tag?>" class="img-responsive">
                                                        <div class="off"><?=$offer->off?>% off</div>
                                                </div>
                                                <h4 class="text"><?=$offer->title?></h4>
                                        </div>
                                </div>
                                
                            <?php } ?>
                                
                        </div>
                </div>
        </div>
</section>
<!--End services single area-->
<!--Start free appoinment area-->
<?=\common\components\ContactFormWidget::widget();?>
<!--End free appoinment area-->
