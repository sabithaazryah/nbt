<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

if (isset($meta_title) && $meta_title != '')
        $this->title = $meta_title;
else
        $this->title = 'New Bharath Pitstop';
?>
<!--Start breadcrumb area-->
<section class="breadcrumb-area privileges-banner">
        <div class="container">
                <div class="row">
                        <div class="col-md-12">
                                <div class="breadcrumbs text-center">
                                        <h1>Ride on your Privileges</h1>
                                        <h4>Keep Your Vehicle Clean and Smart Like You</h4>
                                </div>
                        </div>
                </div>
        </div>
</section>
<!--End breadcrumb area-->
<!--Start breadcrumb bottom area-->
<section class="breadcrumb-bottom-area ">
        <div class="container">
                <div class="row">
                        <div class="col-md-6 col-sm-5">
                                <ul>
                                        <li><a href="<?= Yii::$app->homeUrl ?>">Home</a></li>
                                        <li><i class="fa fa-angle-right"></i></li>
                                        <li>Select Privileges</li>
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

                <?php
                foreach ($privileges as $privilege) {
                        if ($privilege->id == 2) {
                                $clas = 'gold';
                        } else if ($privilege->id == 3) {
                                $clas = 'platinum';
                        } else {
                                $clas = 'silver';
                        }
                        ?>
                        <div class="in-select-privileges">
                                <h3 class="head-text <?= $clas ?> "><?= $privilege->title ?></h3>
                                <div class="main-cont-box">
                                        <div class="row">
                                                <div class="col-md-6">
                                                        <h4>Your Privileges</h4>
                                                        <ul class="list">

        <?= $privilege->content ?>
                                                        </ul>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>uploads/privileges/<?= $privilege->id ?>/image.<?= $privilege->image ?>" class="img-responsive"> </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
<?php } ?>

                <div class="in-select-privileges">
                        <h3 class="head-text red">terms and conditions</h3>
                        <div class="main-cont-box">
                                <div class="row">
                                        <div class="col-md-12 terms-cond">
<?= $terms->content ?>
                                        </div>

                                </div>
                        </div>
                </div>
        </div>
</section>
<!--End services single area-->
<!--Start free appoinment area-->

<!--End free appoinment area-->
<script>
        $(document).ready(function () {
                $('.terms-cond p').addClass('text');
        })
</script>