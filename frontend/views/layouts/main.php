<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
$contact_details = \common\models\ContactAddress::findOne(1);
$params = $parameters = \yii::$app->getRequest()->getQueryParams();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <!-- Basic -->
                
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <meta name='robots' content='noindex,nofollow' />
                <?= Html::csrfMetaTags() ?>
                <title><?= Html::encode($this->title) ?></title>
                <link rel="shortcut icon" href="<?= Yii::$app->homeUrl ?>favicon/icon.png">
                <script src="<?= yii::$app->homeUrl; ?>js/jquery-min.js"></script>
                <script src='https://www.google.com/recaptcha/api.js'></script>
                <?php $this->head() ?>
        </head>
        <body>
                <?php $action = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id; // controller action id  ?>
                <?php $this->beginBody() ?>
                <div class="main-right-call" itemscope itemtype="http://schema.org/Epitome"><!--main-right-call-->
                        <div class="call-box">
                                <div class="icon"><i class="fa fa-phone"></i></div>
                                <span>Call Us</span>
                                <h3 itemprop="tel"> <?= $contact_details->phone1 ?></h3>
                        </div>
                </div>
                <!--main-right-call-->
                <div class="main-right-chat"><!--main-right-call-->
                        <a href="#">
                                <div class="chat-box">
                                        <div class="icon"><i class="fa fa-comments"></i></div>
                                        <span>Chat</span> </div>
                        </a> </div>
                <header class="header main_head navbar-custom fixed-top"><!--header-->
                        <!--head-top-section-->
                        <section class="top-section"><!--top-section-->
                                <div class="container">
                                        <div class="row">
                                                <div class="col-md-4 col-7">
                                                        <div class="top-cont-left">Express the way you imagine</div>
                                                </div>
                                                <div class="col-md-8 col-5">
                                                        <div class="top-right-section" itemscope itemtype="http://schema.org/Epitome">
                                                                <div class="top-link">
                                                                        <ul>
                                                                                <li><?= Html::a('Blog', ['/site/blogs']) ?></li>
                                                                                <li><span>|</span></li>
                                                                                <li><?= Html::a('Happy Clients', ['/site/portfolio']) ?></li>
                                                                        </ul>
                                                                </div>

                                                                <div class="call"><h6><span>Call Now:</span> <span itemprop="tel" class="top-section-contact"><?= $contact_details->phone1 ?></span></h6></div>
                                                               <div class="mail"><span>Email:</span><?= $contact_details->email ?></div>

                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </section>

                        <!--top-section-->
                        <section class="head-middle-section"><!--head-top-section-->
                                <div class="container">
                                        <div class="row">
                                                <div class="col-md-3">
                                                        <h1 class="logo"><a href="<?= Yii::$app->homeUrl ?>"><img src="<?= Yii::$app->homeUrl ?>images/logo.png" alt="Epitome In Dubai" title="Epitome In Dubai" class="img-fluid"></a></h1>
                                                </div>
                                                <div class="col-md-9">
                                                        <div class="nav-section"><!--nav-section-->
                                                                <nav class="navbar navbar-toggleable-md navbar-light bg-faded navbar-expand-md">
                                                                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span class="nav_titel">Menu</span>
                                                                                <span class="main-icon-bar"> <i class="fa fa-bars"></i></span>
                                                                        </button>
                                                                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                                                                <ul class="navbar-nav">
                                                                                        <li><?= Html::a('Home', ['/site/index'], ['class' => Yii::$app->controller->action->id == 'index' || '' ? 'active' : '', 'title' => 'Epitome In Dubai']) ?></li>
                                                                                        <li><?= Html::a('About Us', ['/site/about'], ['class' => Yii::$app->controller->action->id == 'about' ? 'active' : '', 'title' => 'Epitome In Dubai']) ?></li>
                                                                                        <?php
                                                                                        $service_active = '';
                                                                                        if (Yii::$app->controller->action->id == 'it-services' || Yii::$app->controller->action->id == 'graphic-designing' || Yii::$app->controller->action->id == 'services' || Yii::$app->controller->action->id == 'digital-marketing' || Yii::$app->controller->action->id == 'reputation-management' || Yii::$app->controller->action->id == 'serach-engine-optimisation' || Yii::$app->controller->action->id == 'serach-engine-marketing' || Yii::$app->controller->action->id == 'pay-per-click' || Yii::$app->controller->action->id == 'social-media-marketing' || Yii::$app->controller->action->id == 'email-marketing' || Yii::$app->controller->action->id == 'content-marketing' || Yii::$app->controller->action->id == 'local-seo') {
                                                                                                $service_active = 'active';
                                                                                        }
                                                                                        ?>

                                                                                       <li class="dropdown"> <a href="#" class="dropdown-toggle <?= $service_active ?>" data-toggle="dropdown">Services<!--<span class="fa fa-angle-down"></span>--></a>
                                                                                                <ul class="dropdown-menu animated2 fadeInUp" >
                                                                                                        <div class="sub-main-menu">
                                                                                                                <div class="row">
                                                                                                                        <div class="col-md-8"><?= Html::a('IT Services', ['/site/it-services'], ['class' => 'head', 'title' => 'Epitome In Dubai']) ?>
                                                                                                                                <div class="row"><!--row-->
                                                                                                                                        <div class="col-md-6">
                                                                                                                                                <li> <?= Html::a('Web Design', ['/site/services', 'service' => 'web-design-company-in-dubai'], ['class' => 'dropdown-item sub-head']) ?>
                                                                                                                                                        <div class="sub-menu-list">
                                                                                                                                                                <?= Html::a('Wordpress', ['/site/services', 'service' => 'web-design-company-in-dubai'], ['class' => 'dropdown-item']) ?>
                                                                                                                                                                <?= Html::a('Drupal', ['/site/services', 'service' => 'web-design-company-in-dubai'], ['class' => 'dropdown-item']) ?>
                                                                                                                                                                <?= Html::a('Static web designing', ['/site/services', 'service' => 'web-design-company-in-dubai'], ['class' => 'dropdown-item']) ?>
                                                                                                                                                        </div>
                                                                                                                                                </li>
                                                                                                                                                <li><?= Html::a('Web application development', ['/site/services', 'service' => 'web-application-development'], ['class' => 'dropdown-item']) ?></li>
                                                                                                                                                <li><?= Html::a('Software development', ['/site/services', 'service' => 'software-development'], ['class' => 'dropdown-item sub-head']) ?>
                                                                                                                                                        <div class="sub-menu-list">
                                                                                                                                                                <?= Html::a('Web based softwares', ['/site/services', 'service' => 'software-development'], ['class' => 'dropdown-item']) ?>
                                                                                                                                                                <?= Html::a('Desktop softwares', ['/site/services', 'service' => 'software-development'], ['class' => 'dropdown-item']) ?>
                                                                                                                                                        </div>
                                                                                                                                                </li>
                                                                                                                                                <li> <?= Html::a('Mobile app development', ['/site/services', 'service' => 'mobile-app-development'], ['class' => 'dropdown-item sub-head']) ?>

                                                                                                                                                        <div class="sub-menu-list">

                                                                                                                                                                <?= Html::a('Web based softwares', ['/site/services', 'service' => 'mobile-app-development'], ['class' => 'dropdown-item']) ?>
                                                                                                                                                                <?= Html::a('Desktop softwares', ['/site/services', 'service' => 'mobile-app-development'], ['class' => 'dropdown-item']) ?>

                                                                                                                                                        </div>
                                                                                                                                                </li>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-md-6">
                                                                                                                                                <li> <?= Html::a('E-commerce applications', ['/site/services', 'service' => 'e-commerce-applications'], ['class' => 'dropdown-item sub-head']) ?>

                                                                                                                                                        <div class="sub-menu-list">

                                                                                                                                                                <?= Html::a('Single vendor Shopping cart', ['/site/services', 'service' => 'e-commerce-applications'], ['class' => 'dropdown-item']) ?>
                                                                                                                                                                <?= Html::a('Multi vendor shopping cart', ['/site/services', 'service' => 'e-commerce-applications'], ['class' => 'dropdown-item']) ?>

                                                                                                                                                        </div>
                                                                                                                                                </li>
                                                                                                                                                <li><?= Html::a('ERP solutions', ['/site/services', 'service' => 'erp-solutions'], ['class' => 'dropdown-item']) ?></li>
                                                                                                                                                <li> <?= Html::a('Graphic Designing', ['/site/graphic-designing'], ['class' => 'dropdown-item sub-head']) ?>

                                                                                                                                                        <div class="sub-menu-list">
                                                                                                                                                                <?= Html::a('Logo Designing', ['/site/services', 'service' => 'logo-designing'], ['class' => 'dropdown-item']) ?>
                                                                                                                                                                <?= Html::a('Brochure Designing', ['/site/services', 'service' => 'brochure-designing'], ['class' => 'dropdown-item']) ?>
                                                                                                                                                                <?= Html::a('Flyer Designing', ['/site/services', 'service' => 'flyer-designing'], ['class' => 'dropdown-item']) ?>
                                                                                                                                                                <?= Html::a('Business card design', ['/site/services', 'service' => 'business-card-design'], ['class' => 'dropdown-item']) ?>
                                                                                                                                                                <?= Html::a('Catlog designing', ['/site/services', 'service' => 'catlog-designing'], ['class' => 'dropdown-item']) ?>
                                                                                                                                                                <?= Html::a('Flex designing', ['/site/services', 'service' => 'flex-designing'], ['class' => 'dropdown-item']) ?>

                                                                                                                                                        </div>
                                                                                                                                                </li>
                                                                                                                                        </div>
                                                                                                                                </div>
                                                                                                                                <!--row-->
                                                                                                                        </div>
                                                                                                                        <div class="col-md-4"> <?= Html::a('Digital marketing', ['/site/digital-marketing'], ['class' => 'head']) ?>
                                                                                                                                <li><?= Html::a('Reputation Management', ['/site/reputation-management']) ?></li>
                                                                                                                                <li><?= Html::a('Search Engine Optimisation', ['/site/serach-engine-optimisation']) ?></li>
                                                                                                                                <li><?= Html::a('Search Engine Marketing', ['/site/serach-engine-marketing']) ?></li>
                                                                                                                                <li><?= Html::a('Pay-Per Click', ['/site/pay-per-click']) ?></li>
                                                                                                                                <li><?= Html::a('Social Media Marketing', ['/site/social-media-marketing']) ?></li>
                                                                                                                                <li><?= Html::a('Email Marketing', ['/site/email-marketing']) ?></li>
                                                                                                                                <li><?= Html::a('Content Marketing', ['/site/content-marketing']) ?></li>
                                                                                                                                <li><?= Html::a('Local SEO', ['/site/local-seo']) ?></li>
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                </ul>
                                                                                        </li>
                                                                                        <li><?= Html::a('Portfolio', ['/site/portfolio'], ['class' => Yii::$app->controller->action->id == 'portfolio' || isset($params['name']) ? 'active' : '', 'title' => 'Epitome In Dubai']) ?></li>
                                                                                        <li><?= Html::a('Platforms', ['/site/platforms'], ['class' => Yii::$app->controller->action->id == 'platforms' || isset($params['id']) ? 'active' : '', 'title' => 'Epitome In Dubai']) ?></li>
                                                                                        <li><?= Html::a('Products', ['#'], ['class' => '', 'title' => 'Epitome In Dubai']) ?></li>
                                                                                        <li><?= Html::a('Contact', ['/site/contact'], ['class' => Yii::$app->controller->action->id == 'contact' ? 'active' : '', 'title' => 'Epitome In Dubai']) ?></li>
                                                                                </ul>
                                                                        </div>
                                                                </nav>
                                                        </div>
                                                        <!--nav-section-->
                                                </div>
                                        </div>
                                </div>
                        </section>
                </header>
                <!--header-->

                <?= $content ?>


                <footer><!--footer-->
                        <section class="top-footer"><!--top-footer-->
                                <div class="container">
                                        <div class="row" itemscope itemtype="http://schema.org/Epitome">
                                                <div class="col-md-3 col-sm-12 f-logo-section">
                                                        <a href="<?= Yii::$app->homeUrl ?>"><img src="<?= Yii::$app->homeUrl ?>images/icon/f-logo.png" class="img-fluid" alt="Epitome" title=""> </a>
                                                        <div class="f-location" itemprop="address"><?= $contact_details->address ?></div>
                                                </div>
                                                <div class="col-md-3 col-sm-4  f-more-section">
                                                        <div class="icon">&nbsp;</div>
                                                        <small>contact us</small>
                                                        <h3 itemprop="tel"><?= $contact_details->phone2 ?></h3>
                                                </div>
                                                <div class="col-md-3 col-sm-4 f-more-section">
                                                        <div class="icon icon2">&nbsp;</div>
                                                        <small>Send Mail</small>
                                                          
                                                                <h3 itemprop="email"><?= $contact_details->email ?></h3>
                                                         
                                                         </div>
                                                <div class="col-md-3 col-sm-4 f-more-section border-none">
                                                        <div class="icon icon3">&nbsp;</div>
                                                        <small>Working Time</small>
                                                        <h3>9 AM to 6 PM</h3>
                                                </div>
                                        </div>
                                </div>
                        </section>
                        <!--top-footer-->
                        <section class="footer-middle-section"><!--footer-middle-section-->
                                <div class="container">
                                        <div class="row">
                                                <div class="col-lg-3">
                                                        <h3>QUICK LINKS</h3>
                                                        <ul class="f-list">
                                                                <li><?= Html::a('Home', ['/site/index'], ['class' => 'active', 'title' => 'Epitome In Dubai']) ?></li>
                                                                <li><?= Html::a('About Us', ['/site/about'], ['class' => '', 'title' => 'Epitome In Dubai']) ?></li>
                                                                <li><?= Html::a('IT Services', ['/site/it-services'], ['class' => '', 'title' => 'Epitome In Dubai']) ?></li>
                                                                <li><?= Html::a('Portfolio', ['/site/portfolio'], ['class' => '', 'title' => 'Epitome In Dubai']) ?></li>
                                                                <li><?= Html::a('Platforms', ['/site/platforms'], ['class' => '', 'title' => 'Epitome In Dubai']) ?></li>
                                                                <li><?= Html::a('Products', ['#'], ['class' => '', 'title' => 'Epitome In Dubai']) ?></li>
                                                                <li><?= Html::a('Happy clients', ['/site/portfolio'], ['class' => '', 'title' => 'Epitome In Dubai']) ?></li>
                                                                <li><?= Html::a('Blog', ['/site/blogs'], ['class' => '', 'title' => 'Epitome In Dubai']) ?></li>
                                                                <li><?= Html::a('Contact', ['/site/contact'], ['class' => '', 'title' => 'Epitome In Dubai']) ?></li>

                                                        </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                        <h3>SERVICES</h3>
                                                        <div class="row">
                                                                <div class="col-sm-6">
                                                                        <ul class="f-list">
                                                                                <li><?= Html::a('Digital marketing', ['/site/digital-marketing']) ?></li>
                                                                                <li><?= Html::a('Reputation Management', ['/site/reputation-management']) ?></li>
                                                                                <li><?= Html::a('Search Engine Optimisation', ['/site/serach-engine-optimisation']) ?></li>
                                                                                <li><?= Html::a('Search Engine Marketing', ['/site/serach-engine-marketing']) ?></li>
                                                                                <li><?= Html::a('Pay-Per Click', ['/site/pay-per-click']) ?></li>
                                                                                <li><?= Html::a('Social Media Marketing', ['/site/social-media-marketing']) ?></li>
                                                                                <li><?= Html::a('Email Marketing', ['/site/email-marketing']) ?></li>
                                                                                <li><?= Html::a('Content Marketing', ['/site/content-marketing']) ?></li>
                                                                                <li><?= Html::a('Local SEO', ['/site/local-seo']) ?></li>
                                                                        </ul>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                        <ul class="f-list">

                                                                                <li><?= Html::a('Web Designing', ['/site/services', 'service' => 'web-design-company-in-dubai']) ?></li>
                                                                                <li><?= Html::a('Web Development', ['/site/services', 'service' => 'web-application-development']) ?></li>
                                                                                <li><?= Html::a('Software Development', ['/site/services', 'service' => 'software-development']) ?></li>
                                                                                <li><?= Html::a('Mobile App development', ['/site/services', 'service' => 'mobile-app-development']) ?></li>
                                                                                <li><?= Html::a('E-commerce applications', ['/site/services', 'service' => 'e-commerce-applications']) ?></li>
                                                                                <li><?= Html::a('Graphic Design', ['/site/graphic-designing']) ?></li>
                                                                                <li><?= Html::a('ERP solutions', ['/site/services', 'service' => 'erp-solutions']) ?></li>
                                                                                <li><?= Html::a('Logo Designing', ['/site/services', 'service' => 'logo-designing']) ?></li>
                                                                                <li><?= Html::a('Brochure Designing', ['/site/services', 'service' => 'brochure-designing']) ?></li>



                                                                        </ul>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="col-lg-3">
                                                        <h3>Other Services</h3>
                                                        <ul class="f-list">
                                                                <li><a href="#">Facebook Marketing</a></li>
                                                                <li><a href="#">Google+ Marketing</a></li>
                                                                <li><a href="#">Twitter Marketing</a></li>
                                                                <li><a href="#">YouTube Marketing</a></li>
                                                        </ul>
                                                        <div class="f-follows">
                                                                <h3>follow</h3>
                                                                <ul>
                                                                        <li> <a href="#" target="_blank"> <i class="fa fa-facebook"></i> </a></li>
                                                                        <li> <a href="#" target="_blank"> <i class="fa fa-twitter"></i> </a></li>
                                                                        <li> <a href="#" target="_blank"> <i class="fa fa-linkedin"></i> </a></li>
                                                                        <li> <a href="#" target="_blank"> <i class="fa fa-youtube"></i> </a></li>
                                                                </ul>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </section>
                        <!--footer-middle-section-->
                        <section class="more-section">
                                <div class="container">
                                        <h6>Copyright © <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script> </span> <b>EPITOME.</b> All Rights Reserved.</h6>
                                </div>
                        </section>
                </footer>
                <a href="#" class="scrollup" >Scroll</a> <!--Scroll-->
                <?php $this->endBody() ?>

                <script>
                        $(document).ready(function () {

                                $(window).scroll(function () {
                                        // $('.scrollup').hide();
                                        if ($(this).scrollTop() > 100) {

                                                $('.scrollup').fadeIn();
                                        } else {
                                                $('.scrollup').fadeOut();
                                        }
                                });

                                $('.scrollup').click(function () {
                                        $("html, body").animate({scrollTop: 0}, 1000);
                                        return false;
                                });

                        });
                </script>
        </body>

</html>
<?php $this->endPage() ?>
