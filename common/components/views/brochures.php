<?php

use yii\helpers\Html;


?>

 <div class="single-item">
                                                <div class="sec-title text-left">
                                                        <h2>Our Brochures</h2>
                                                        <span class="decor"></span> </div>
                                                <div class="brochures-content">
                                                        <div class="img-holder"> <img src="<?= Yii::$app->homeUrl ?>img/resources/brochures.jpg" alt=""> </div>
                                                        <ul class="brochures-list">
                                                            <?php foreach($brochure as $broch){ ?>
                                                                <li><a target="_blank" href="<?=Yii::$app->homeUrl?>uploads/brochures/<?=$broch->id?>/<?=$broch->id?>.<?=$broch->brochure?>"><span class="flaticon-interface"></span><?=$broch->name?></a></li>
                                                            <?php } ?>
                                                        </ul>
                                                </div>
                                        </div>

     