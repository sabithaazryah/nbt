<?php

use yii\helpers\Html;

if (isset($meta_title) && $meta_title != '')
        $this->title = $meta_title;
else
        $this->title = 'Epitome';
?>
<section class="in-banner"><!--in-banner-->
        <div class="container">
                <div class="banner-cont">
                        <h2><span>A</span>bouts <span>C</span>omapny</h2>
                </div>
                <div class="main-breadcrumb"><a href="<?= Yii::$app->homeUrl ?>">Home</a><i>|</i><span>Abouts</span> </div>
        </div>
</section>
<!--in-banner-->
<section class="in-top-about"><!--in-top-about-->
        <div class="container">
                <div class="row">
                        <div class="col-md-4">
                                <div class="img-box">
                                        <h3>According of the <span>CEO</span></h3>
                                        <img src="<?= Yii::$app->homeUrl ?>uploads/about/<?= $about->id ?>/<?= $about->id ?>.<?= $about->image ?>"  class="img-fluid" alt="Message From CEO" title="">
                                        <div class="about-box">
                                                <h2><small>ABOUT</small> US</h2>
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-8">
                                <div class="cont">
                                        <?= $about->content ?>

                                </div>
                        </div>
                </div>
        </div>
</section>
<!--in-top-about-->

<section class="in-customer-focused-team"><!--in-customer-focused-team-->
        <div class="container">
                <h3><b>Making your ideas work</b> on the <b>Web Services</b> <br>that will render your business newfangled and futuristic
                </h3>
                <div class="row">
                        <div class="col-md-3 col-sm-6">
                                <div class="focused-team">
                                        <div class="icon"></div>
                                        <h2>100%</h2>
                                        <small>Design</small> </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                                <div class="focused-team">
                                        <div class="icon icon2"></div>
                                        <h2>98%</h2>
                                        <small>Development</small> </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                                <div class="focused-team">
                                        <div class="icon icon3"></div>
                                        <h2>99%</h2>
                                        <small>Marketing</small> </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                                <div class="focused-team">
                                        <div class="icon icon4"></div>
                                        <h2>98%</h2>
                                        <small>Branding</small> </div>
                        </div>
                </div>
        </div>
</section>
<!--in-customer-focused-team-->
<section class="in-work-cycle"><!--in-work-cycle-->
        <div class="container">
                <div class="main-head1">
                        <h2><span>t</span>he <span>W</span>ork <span>C</span>ycle </h2>
                        <small>Our Process</small></div>
                <p class="text-cont"><?= $about->work_cycle ?></p>
                <div class="main-cycle">
                        <div class="row">
                                <div class="col-lg-4">
                                        <div class="cycle-box">
                                                <div class="no">01</div>
                                                <div class="icon"></div>
                                                <h3><?= $about->work_cycle_1 ?></h3>
                                                <p><?= $about->work_cycle_1_content ?></p>
                                        </div>
                                </div>
                                <div class="col-lg-4">
                                        <div class="cycle-box">
                                                <div class="no">02</div>
                                                <div class="icon icon2"></div>
                                                <h3><?= $about->work_cycle_2 ?></h3>
                                                <p><?= $about->work_cycle_2_content ?></p>
                                        </div>
                                </div>
                                <div class="col-lg-4">
                                        <div class="cycle-box">
                                                <div class="no">03</div>
                                                <div class="icon icon3"></div>
                                                <h3><?= $about->work_cycle_3 ?></h3>
                                                <p><?= $about->work_cycle_3_content ?></p>
                                        </div>
                                </div>
                        </div>
                </div>
                <div class="main-cycle2">
                        <div class="row">
                                <div class="col-lg-4 oder1">
                                        <div class="cycle-box">
                                                <div class="no">04</div>
                                                <div class="icon icon4"></div>
                                                <h3><?= $about->work_cycle_4 ?></h3>
                                                <p><?= $about->work_cycle_4_content ?></p>
                                        </div>
                                </div>
                                <div class="col-lg-4 oder2">
                                        <div class="cycle-box">
                                                <div class="no">05</div>
                                                <div class="icon icon5"></div>
                                                <h3><?= $about->work_cycle_5 ?></h3>
                                                <p><?= $about->work_cycle_5_content ?></p>
                                        </div>
                                </div>
                                <div class="col-lg-4 oder3">
                                        <div class="cycle-box">
                                                <div class="no">06</div>
                                                <div class="icon icon6"></div>
                                                <h3><?= $about->work_cycle_6 ?></h3>
                                                <p><?= $about->work_cycle_6_content ?></p>
                                        </div>
                                </div>
                        </div>
                        <div class="cycle-box-main">
                                <h3>Launch</h3>
                                <p>The final campaign is only launched when our experts and client are content with the campaign. The campaign is released at the most opportune moment to ensure that it achieves all the goals it was predicted to attain.</p>
                        </div>
                </div>
        </div>
</section>
<!--in-work-cycle-->

<?= common\components\ServiceListWidget::widget() ?>
<!--in-main-link-section-allpage-->
<section class="in-best-of-us"><!--in-best-of-us-->
        <div class="container">
                <div class="main-head1">
                        <h2><span>t</span>he <span>B</span>est <span>o</span>f <span>u</span>s</h2>
                        <small>Our best of us</small></div>
                <p class="text">Most helpful Web search</p>
                <div class="row">
                        <div class="col-lg-4">
                                <div class="Our-best-box">
                                        <div class="icon"></div>
                                        <h3><small>Professionals</small> At your Service</h3>
                                        <p>Our horde of expert professionals possess years of hands-on industry experience. Our team is headed by industry pundits and marketing maestros. The multitude of workforce stationed in various departments works as different organs of the body, synchronizing our ideas and efforts towards achieving your goals. Our professionals regularly trained and tested to ensure that our client gets an overwhelming response and the best use of his money.</p>
                                        <a href="#" class="link">Browse Know</a>
                                </div>
                        </div>
                        <div class="col-lg-4">
                                <div class="Our-best-box">
                                        <div class="icon icon2"></div>
                                        <h3><small>Successful</small>Track Record</h3>
                                        <p>The series of success stories recorded by us is our biggest testimony. For us, the success pertains to meeting and exceeding the expectations of our client. The number of people reached, number of visits to the website, number of favorable actions recorded as a result, the elevation of the brand image together constitute a digital marketing success story. We have a history of exhilarated clients and colossal victories.</p>
                                        <a href="#" class="link">View More</a>
                                </div>
                        </div>
                        <div class="col-lg-4">
                                <div class="Our-best-box">
                                        <div class="icon icon3"></div>
                                        <h3><small>Demonstrable</small>Results</h3>
                                        <p>Epitome’s digital marketing endeavor has etched the success of over 120 international projects and 80+ overseas clients. We brand has a story to tell, we help you narrate that story enthrallingly.
                                                We create a concrete, convincing online presence for brands with our ingenious digital products, insights, integrated experiences, robust strategies, and captivating story-telling on mobile and web.
                                        </p>
                                        <a href="#" class="link">View More</a>
                                </div>
                        </div>
                </div>
        </div>
</section>
<!--in-best-of-us-->
<?= common\components\ContactFormWidget::widget() ?>

