<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\About */

$this->title = 'Update About ';
$this->params['breadcrumbs'][] = ['label' => 'Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
        <div class="col-md-12">

                <div class="panel panel-default">
                        <div class="panel-heading">
                                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                        </div>


                        <div class="panel-body">


                                <div class="panel-body"><div class="about-create">

                                                <!--                                                <div class="tab-content tab_data_margin">
                                                                                                        <div class="tab-pane active" id="main-1">
                                                                                                                <ul class="nav nav-tabs">
                                                                                                                        <li class="active" style="width: 45%;">
                                                                                                                                <a href="#home" data-toggle="tab">
                                                                                                                                        <span class="visible-xs"><i class="fa-home"></i></span>
                                                                                                                                        <span class="hidden-xs">About</span>
                                                                                                                                </a>
                                                                                                                        </li>
                                                                                                                      <li style="width: 45%;">
                                                                                                                                <a href="#profile" data-toggle="tab">
                                                                                                                                        <span class="visible-xs"><i class="fa-user"></i></span>
                                                                                                                                        <span class="hidden-xs">History</span>
                                                                                                                                </a>
                                                                                                                        </li>
                                                                                                                </ul>
                                                                                                        </div>
                                                                                                </div>-->

                                                <br>

                                                <div class="tab-content second-tab">
                                                        <?= common\widgets\Alert::widget() ?>
                                                        <div class="tab-pane active" id="home">
                                                                <?=
                                                                $this->render('_form', [
                                                                    'model' => $model,
                                                                ])
                                                                ?>
                                                        </div>

                                                        <div class="tab-pane" id="profile">
                                                                <?php
                                                                $this->render('history', [
                                                                    'model' => $model,
                                                                    'about_history' => $about_history,
                                                                ])
                                                                ?>
                                                        </div>


                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>
