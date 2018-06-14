<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ServicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-index">

        <div class="row">
                <div class="col-md-12">

                        <div class="panel panel-default">
                                <div class="panel-heading">
                                        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                                </div>
                                <div class="panel-body">
                                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                                        <?= common\widgets\Alert::widget() ?>
                                        <?= Html::a('<i class="fa-th-list"></i><span> Add Services</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                                        <?=
                                        GridView::widget([
                                            'dataProvider' => $dataProvider,
                                            'filterModel' => $searchModel,
                                            'columns' => [
                                                    ['class' => 'yii\grid\SerialColumn'],
                                                'title',
                                                    [
                                                    'attribute' => 'content',
                                                    'value' => function($data) {
                                                            $data->content = strip_tags($data->content);
                                                            if (strlen($data->content) > 50) {
                                                                    $str = substr($data->content, 0, strpos(wordwrap($data->content, 50), "\n"));
                                                                    $dot = ' ....';
                                                            } else {
                                                                    $str = $data->content;
                                                                    $dot = '';
                                                            }
                                                            return $str . $dot;
                                                    },
                                                ],
                                                    [
                                                    'attribute' => 'status',
                                                    'value' => function($model, $key, $index, $column) {
                                                            if ($model->status == '0') {
                                                                    return 'Disabled';
                                                            } elseif ($model->status == '1') {
                                                                    return 'Enabled';
                                                            }
                                                    },
                                                    'filter' => [0 => 'Disabled', 1 => 'Enabled'],
                                                ],
                                                    ['class' => 'yii\grid\ActionColumn',
                                                    'template' => '{update}{delete}'],
                                            ],
                                        ]);
                                        ?>
                                </div>
                        </div>
                </div>
        </div>
</div>


