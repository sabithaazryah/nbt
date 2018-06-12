<?php

use yii\helpers\Html;
?>

<section class="in-main-link-section-allpage"><!--in-main-link-section-allpage-->
        <div class="container">
                <div class="row">
                        <div class="col-lg-4">
                                <h2><span>Digital</span> <br>
                                        marketing</h2>
                                <p>We discern the fact that effective digital marketing is the future of business communication and marketing. With our expertise and enterprises, we help you take the right decisions and thereby make your business triumphant online.</p>
                        </div>
                        <div class="col-lg-4">
                                <ul class="list">
                                        <li><?= Html::a('Reputation Management', ['/site/reputation-management']) ?></li>
                                        <li><?= Html::a('Search Engine Optimisation', ['/site/serach-engine-optimisation']) ?></li>
                                        <li><?= Html::a('Search Engine Marketing', ['/site/serach-engine-marketing']) ?></li>
                                        <li><?= Html::a('Pay-Per Click', ['/site/pay-per-click']) ?></li>

                                </ul>
                        </div>
                        <div class="col-lg-4">
                                <ul class="list">
                                        <li><?= Html::a('Social Media Marketing', ['/site/social-media-marketing']) ?></li>
                                        <li><?= Html::a('Email Marketing', ['/site/email-marketing']) ?></li>
                                        <li><?= Html::a('Content Marketing', ['/site/content-marketing']) ?></li>
                                        <li><?= Html::a('Local SEO', ['/site/local-seo']) ?></li>
                                </ul>
                        </div>
                </div>
                <?= Html::a('View All Services', ['/site/digital-marketing'], ['class' => 'link']) ?>
</section>