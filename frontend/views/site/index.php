<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

if (isset($meta_title) && $meta_title != '')
        $this->title = $meta_title;
else
        $this->title = 'Epitome';
?>
<section class="banner">


        <div id="demo" class="carousel slide" data-ride="carousel">

                <ul class="carousel-indicators">

                        <?php
                        $slide = 0;
                        foreach ($sliders as $slider) {
                                ?>
                                <li data-target="#demo" data-slide-to="<?= $slide ?>" class="<?= $slide == 0 ? 'active' : '' ?>"></li>
                                <?php
                                $slide++;
                        }
                        ?>
                </ul>

                <div class="carousel-inner">
                        <?php
                        $slide_count = 0;
                        foreach ($sliders as $slider) {
                                ?>
                                <div class="carousel-item <?= $slide_count == 0 ? 'active' : '' ?>">
                                        <img class="img-fluid" src="<?= Yii::$app->homeUrl ?>uploads/sliders/<?= $slider->id ?>/<?= $slider->id ?>.<?= $slider->image ?>" alt="<?= $slider->alt_tag ?>">
                                </div>
                                <?php
                                $slide_count++;
                        }
                        ?>


                </div>


        </div>
        <!-- close carousel -->
</section>
<!--banner-->
<section class="home-service-section"><!--home-service-section-->
        <div class="container">
                <div class="row">
                        <div class="col-lg-4 service-box1">
                                <h1 class="head-text"><span>W</span>hat <br>
                                        <span>w</span>e<br>
                                        <span>D</span>o</h1>
                                <small>Company services </small>
                                <?= $home_page_content->what_we_do ?>
                                <div class="row">
                                        <div class="home-quick-enquiry">
                                                <h3>quick enquiry</h3>
                                                <p>Fill in the form below, and we'll get back to you within 24 hours.</p>
                                                <?= common\widgets\Alert::widget() ?>
                                               <?php $form = ActiveForm::begin(['action' => ['site/enquiry'], 'options' => ['class' => 'in-main-form','id'=>'home-enquiry-form']]); ?>
                                                <div class="row">
                                                        <div class="col-md-12">
                                                                <div class="form-group">
                                                                        <?= $form->field($contact, 'name')->textInput(['placeholder' => 'Name'])->label(FALSE) ?>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                                <div class="form-group">
                                                                        <?= $form->field($contact, 'email')->textInput(['placeholder' => 'Email'])->label(FALSE) ?>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                                <div class="form-group">
                                                                        <?= $form->field($contact, 'phone')->textInput(['placeholder' => 'Phone No'])->label(FALSE) ?>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                                <div class="form-group">
                                                                        <?= $form->field($contact, 'message')->textArea(['placeholder' => 'Message'])->label(FALSE) ?>
                                                                </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                                <div class="form-group"> <div class="g-recaptcha" id="g-recaptcha"  data-sitekey="6LfB910UAAAAAGGgNs2Bu0Ay1qPAaYG_tjOYslCI"></div> </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                                <div class="form-group">
                                                                        <input name="home_contact" type="submit" value="Send Request!" class="submit">
                                                                </div>
                                                        </div>
                                                </div>
                                                <?php ActiveForm::end(); ?>
                                        </div>
                                </div>
                        </div>
                        <div class="col-lg-8">
                                <div class="row">
                                        <div class="col-md-6 border-right border-bottom">
                                                <div class="service-box2">
                                                        <div class="icon"></div>
                                                        <h3 class="head-text"><span>web designing & </span>development</h3>
                                                        <p><?= strip_tags($home_page_content->service_1) ?> </p>

                                                        <?= Html::a('Read More', ['/site/it-services'], ['class' => 'link']) ?>
                                                        <div class="logo-icon"></div>
                                                </div>
                                        </div>
                                        <div class="col-md-6 border-bottom">
                                                <div class="service-box2">
                                                        <div class="icon icon2"></div>
                                                        <h3 class="head-text"><span>Digital</span>Marketing</h3>
                                                        <p><?= strip_tags($home_page_content->service_2) ?></p>
                                                        <?= Html::a('Read More', ['/site/digital-marketing'], ['class' => 'link']) ?>
                                                </div>
                                        </div>
                                        <div class="col-md-6 border-right border-bottom">
                                                <div class="service-box2">
                                                        <div class="icon icon3"></div>
                                                        <h3 class="head-text"><span>ecommerce</span> Platforms</h3>
                                                        <p><?= strip_tags($home_page_content->service_3) ?> </p>
                                                        <?= Html::a('Read More', ['/site/platforms'], ['class' => 'link']) ?>
                                                        <div class="logo-icon"></div>
                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="service-box2 border-bottom">
                                                        <div class="icon icon5"></div>
                                                        <h3 class="head-text"><span>mobiloe app </span> development</h3>
                                                        <p><?= strip_tags($home_page_content->service_4) ?></p>
                                                        <?= Html::a('Read More', ['/site/services', 'service' => 'mobile-app-development'], ['class' => 'link']) ?>
                                                </div>
                                        </div>
                                        <div class="col-md-6 border-right">
                                                <div class="service-box2">
                                                        <div class="icon icon4"></div>
                                                        <h3 class="head-text"><span> our</span> products</h3>
                                                        <p><?= strip_tags($home_page_content->service_5) ?></p>
                                                        <?= Html::a('Read More', ['/site/index'], ['class' => 'link']) ?>
                                                </div>
                                        </div>
                                        <div class="col-md-6 ">
                                                <div class="service-box2">
                                                        <div class="icon icon6"></div>
                                                        <h3 class="head-text"><span>erp</span> solutions</h3>
                                                        <p><?= strip_tags($home_page_content->service_6) ?> </p>
                                                        <?= Html::a('Read More', ['/site/services', 'service' => 'erp-solutions'], ['class' => 'link']) ?>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>
<!--home-service-section-->

<section class="home-who-we-are"><!--home-who-we-are-->
        <div class="container">
                <div class="main-head1">
                        <h2><span>W</span>ho <span>w</span>e <span>a</span>re</h2>
                        <small>company profile</small></div>
                <div class="img-box">
                        <img src="<?= Yii::$app->homeUrl ?>images/company-profile-img.png" class="img-fluid" alt="who-we-are" title="">
                </div>
                <?php $who_we_are = str_ireplace('<p>', '', $home_page_content->who_we_are) ?>
                <?= $home_page_content->who_we_are?>
                <?= Html::a('MORE DETAILS', ['/site/about'], ['class' => 'link']) ?>
        </div>
</section>
<!--home-who-we-are-->

<section class="our-clients-section"><!--our-clients-section-->
        <div class="container">
                <div class="main-head2">
                        <h2><span>O</span>ur <span>H</span>appy <span>C</span>lients</h2>
                        <small>Our CLIENTS</small></div>
                <p>Sucessfully completed more than <b>120+ INTENATIONAL PROJECTS</b> from <b>80+ OVERSEAS CLIENTS </b>around the world</p>
                <div class="row">
                        <?php
                        $c = 0;
                        foreach ($clients as $client) {
                                if ($c % 5 == 0) {
                                        $client_class = 'border-bottom border-right';
                                } else {
                                        $client_class = 'border-bottom';
                                }
                                ?>
                                <div class="col-md-3 <?= $client_class ?>">
                                        <div class="clients-box">
                                                <img src="<?= Yii::$app->homeUrl ?>uploads/clients/<?= $client->id ?>/image.<?= $client->image ?>" class="img-fluid" alt="<?= $client->alt_tag ?>" title="">
                                        </div>
                                </div>

                        <?php } ?>
                </div>
                <div class="clear"></div>
        </div>
</section>


<?php if (count($testimonials) > 0) { ?>
        <!--our-clients-section-->
        <section class="our-clients-say"><!--our-clients-say-->
                <div class="container">
                        <div class="main-head1">
                                <h2><span>O</span>ur <span>C</span>lients <span>S</span>ays</h2>
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
                                                                <h3> <?= $test->name ?> </h3>
                                                                <div class="star-rating">
                                                                        <?php for ($i = 0; $i < 5; $i++) { ?>
                                                                                <span class="fa fa-star  <?php if ($i < $test->rating) { ?> checked <?php } ?>"></span>
                                                                        <?php } ?>
                                                                </div>
                                                                <p><?= strip_tags($test->content); ?> </p>
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
                                                <div class="modal fade" id="exampleModal<?= $t ?>" tabindex="-1" role="dialog" >
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
<!--our-clients-say-->
<!--our-clients-say-->
<?php if (count($blogs) > 0) { ?>
        <section class="home-blog-section"><!--home-blog-section-->
                <div class="container">
                        <div class="main-head1">
                                <h2><span>W</span>hat <span>W</span>e <span>S</span>ays</h2>
                                <small>RECENT BLOG</small></div>
                        <div class="row">
                                <?php foreach ($blogs as $blog) {
                                        ?>

                                        <div class="col-md-6">
                                                <div class="blog-box">
                                                        <div class="date"><?= date('d', strtotime($blog->blog_date)) ?><br>
                                                                <small><?= date('M', strtotime($blog->blog_date)) ?></small></div>
                                                        <h3><?= $blog->title ?> </h3>
                                                        <p><?= strip_tags(substr($blog->content, 0, 250)); ?></p>
                                                        <?= Html::a('Read More', ['/site/blog-detail', 'blog' => $blog->canonical_name], ['class' => 'link']) ?>
                                                </div>
                                        </div>
                                <?php } ?>
                        </div>
                </div>
        </section>
<?php } ?>
<!--home-blog-section-->

<script>
    $(document).ready(function () {
        $('#home-enquiry-form').on('submit', function (e) {
            var res = grecaptcha.getResponse();
            if (res == "" || res == undefined || res.length == 0)
            {
                e.preventDefault();
                if ($("#g-recaptcha").next(".validation").length == 0) // only add if not added
                {
                    $("#g-recaptcha").after("<div class='validation' style='color:#a94442;font-size: 13px;margin-bottom: 14px;'>Please verify that you are not a robot</div>");
                }
            }
        });
    });
</script>
