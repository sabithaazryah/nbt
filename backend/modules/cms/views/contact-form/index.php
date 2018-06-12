<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ContactFormSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contact Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-form-index">

        <div class="row">
                <div class="col-md-12">

                        <div class="panel panel-default">
                                <div class="panel-heading">
                                        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                                </div>
                                <div class="panel-body">
                                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                                        <?=
                                        GridView::widget([
                                            'dataProvider' => $dataProvider,
                                            'filterModel' => $searchModel,
                                            'columns' => [
                                                    ['class' => 'yii\grid\SerialColumn'],
                                                'name',
                                                'email:email',
                                                'phone',
//                                                'message:ntext',
                                                [
                                                    'attribute' => 'message',
                                                    'value' => function($data) {

                                                            if (strlen($data->message) > 50) {
                                                                    $str = substr($data->message, 0, strpos(wordwrap($data->message, 50), "\n"));
                                                                    $dot = ' ....';
                                                            } else {
                                                                    $str = $data->message;
                                                                    $dot = '';
                                                            }
                                                            return $str . $dot;
                                                    },
                                                ],
                                                // 'date',
                                                // 'website_url:url',
                                                // 'last_name',
                                                // 'company_name',
                                                // 'country',
                                                // 'portfolio',
                                                ['class' => 'yii\grid\ActionColumn',
                                                    'template' => '{view}{delete}'],
                                            ],
                                        ]);
                                        ?>
                                </div>
                        </div>
                </div>
        </div>
</div>


