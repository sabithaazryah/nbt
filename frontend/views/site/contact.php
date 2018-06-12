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
                                        <h1>Get Touch With Us</h1>
                                        <h4>We Are Here For You</h4>
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
                        <div class="col-lg-8 col-md-5 col-sm-5">
                                <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><i class="fa fa-angle-right"></i></li>
                                        <li><a href="#">Shop</a></li>
                                        <li><i class="fa fa-angle-right"></i></li>
                                        <li>Contact</li>
                                </ul>
                        </div>
                        <div class="col-lg-4 col-md-7 col-sm-7">
                                <p>We are here to provide 100% services to our customers</p>
                        </div>
                </div>
        </div>
</section>
<!--End breadcrumb bottom area-->

<!--Start contact area-->
<section class="contact-area">
        <div class="container">
                <div class="row">
                        <div class="col-md-4">
                                <div class="getin-touch">
                                        <div class="sec-title text-left">
                                                <h1>Get In Touch</h1>
                                                <span class="decor"></span>
                                        </div>
                                        <p>There are many variations off passages of available, but the majority have suffered alterations in some form, by injected humour look events slightly seds do eiusmod tempor incididunt ut labore.</p>
                                        <ul class="contact-info">
                                                <li class="address">
                                                        <div class="icon-holder">
                                                                <span class="flaticon-map"></span>
                                                        </div>
                                                        <div class="content">
                                                                <h4>Address :</h4>
                                                                <p>21/17, Level 4 Steel Rock St,<br>Melbourne, Victoria 3000 Australia</p>
                                                        </div>
                                                </li>
                                                <li class="email">
                                                        <div class="icon-holder">
                                                                <span class="flaticon-note"></span>
                                                        </div>
                                                        <div class="content">
                                                                <h4>Ask Anything Here :</h4>
                                                                <p>dubai@newbharathtyres.com</p>
                                                        </div>
                                                </li>
                                                <li>
                                                        <div class="icon-holder">
                                                                <span class="flaticon-telephone"></span>
                                                        </div>
                                                        <div class="content">
                                                                <h4>Call Us:</h4>
                                                                <p>042630606</p>
                                                        </div>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                        <div class="col-md-8">
                                <div class="contact-form">
                                        <div class="sec-title text-left">
                                                <h1>Send Message Us</h1>
                                                <span class="decor"></span>
                                        </div>
                                        <form action="#">
                                                <div class="row">
                                                        <div class="col-md-6">
                                                                <input type="text" name="name" placeholder="Your Name*">
                                                        </div>
                                                        <div class="col-md-6">
                                                                <input type="text" name="email" placeholder="Email Address*">
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-6">
                                                                <input type="text" name="phone" placeholder="Phone">
                                                        </div>
                                                        <div class="col-md-6">
                                                                <input type="text" name="subject" placeholder="Subject*">
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-12">
                                                                <textarea name="message" placeholder="Message*"></textarea>
                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-12">
                                                                <button type="submit">Send Message</button>
                                                        </div>
                                                </div>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
</section>
<!--End contact area-->


<div class="google-map" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.80587322747!2d55.383802315011245!3d25.277114983859093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5c374c83da3d%3A0x95fef0a91c98e7f5!2sNew+Bharath+PITSTOP+(New+Bharath+Tyres)!5e0!3m2!1sen!2sin!4v1527771354702" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
