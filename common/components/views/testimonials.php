<?php

use yii\helpers\Html;

if (count($testimonials) > 0) {
    
     if ($type == 1 || $type == 5 || $type == 7)
                $test_clas = 'in-clients-sub';
        else
                $test_clas = '';
        ?>

        <section class="our-clients-say <?= $test_clas ?>"><!--our-clients-say-->
                <div class="container">
                        <div class="main-head1">
                                <h2><span>O</span>ur <span>T</span>ETIMONIALS</h2>
                                <small>Our TESTIMONIALS</small></div>
                        <div class="main-testmonial">
                                <div class="content">
                                        <div class="slider lazy">
                                                <?php
                                                $test_count = 0;
                                                foreach ($testimonials as $test) {
                                                        $test_count++;
                                                        ?>
                                                        <div class="testmonial-box">
                                                                <div class="img-box"><img src="<?= Yii::$app->homeUrl ?>uploads/testimonials/<?= $test->id ?>/image.<?= $test->image ?>" alt="<?= $test->name ?>" title="" class="img-fluid rounded-circle">
                                                                        <?php if ($test->link != '') { ?>
                                                                                <a href="#exampleModal<?= $test_count ?>" data-toggle="modal">
                                                                                        <div class="icon-play"></div>
                                                                                </a>
                                                                        <?php } else { ?>
                                                                                <div class="icon-text"></div>
                                                                        <?php } ?>
                                                                </div>
                                                                <h2> <?= $test->name ?> </h2>
                                                                <div class="star-rating">
                                                                        <?php for ($i = 0; $i < 5; $i++) { ?>
                                                                                <span class="fa fa-star  <?php if ($i < $test->rating) { ?> checked <?php } ?>"></span>
                                                                        <?php } ?>
                                                                </div>
                                                                <p><?= strip_tags(substr($test->content, 0, 500)); ?> </p>
                                                        </div>


                                                <?php } ?>

                                        </div>
                                </div>
                                <?php
                                $t = 0;
                                foreach ($testimonials as $test_pop_up) {
                                        $t++;
                                        ?>
                                        <div class="main-popup">
                                                <div class="modal fade" id="exampleModal<?= $t ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content ">
                                                                        <div class="modal-header">
                                                                                <h4 class="modal-title">WELCOME TO Epitome</h4>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                        </div>
                                                                        <?= $test_pop_up->link ?>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                <?php } ?>
                        </div>
                </div>
        </section>
<?php } ?>