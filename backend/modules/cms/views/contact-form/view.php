<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ContactForm */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Contact Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
        <div class="col-md-12">

                <div class="panel panel-default">
                        <div class="panel-heading">
                                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                        </div>
                        <div class="panel-body">
                                <?= Html::a('<i class="fa-th-list"></i><span> Manage Contact Form</span>', ['index'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                                <div class="panel-body"><div class="contact-form-view">
                                                <p>
                                                        <?=
                                                        Html::a('Delete', ['delete', 'id' => $model->id], [
                                                            'class' => 'btn btn-danger',
                                                            'data' => [
                                                                'confirm' => 'Are you sure you want to delete this item?',
                                                                'method' => 'post',
                                                            ],
                                                        ])
                                                        ?>
                                                </p>

                                                <table id="w0" class="table table-striped table-bordered detail-view">
                                                        <tbody>

                                                                <tr><th>Name</th><td><?= $model->name ?></td></tr>
                                                                <?php if ($model->last_name != '') { ?><tr><th>Last Name</th><td><?= $model->last_name ?></td></tr><?php } ?>
                                                                <tr><th>Email</th><td><?= $model->email ?></td></tr>
                                                                <tr><th>Phone</th><td><?= $model->phone ?></td></tr>
                                                                <tr><th>Message</th><td style="width: 500px;word-wrap: break-word;"><?= $model->message ?></td></tr>
                                                                <?php if ($model->website_url != '') { ?><tr><th>Subject</th><td><?= $model->website_url ?></td></tr><?php } ?>

                                                                <tr><th>Date</th><td>2018-06-06</td></tr>
                                                        </tbody>
                                                </table>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>


