<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PlatformsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Platforms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="platforms-index">

        <div class="row">
                <div class="col-md-12">

                        <div class="panel panel-default">
                                <div class="panel-heading">
                                        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                                </div>
                                <div class="panel-body">
                                        <?php // echo $this->render('_search', ['model' => $searchModel]);   ?>
                                        <?= common\widgets\Alert::widget() ?>
                                        <?= Html::a('<i class="fa-th-list"></i><span> Add Platforms</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                                        <?=
                                        GridView::widget([
                                            'dataProvider' => $dataProvider,
                                            'filterModel' => $searchModel,
                                            'columns' => [
                                                    ['class' => 'yii\grid\SerialColumn'],
                                                    [
                                                    'attribute' => 'small_image',
                                                    'format' => 'raw',
                                                    'value' => function ($data) {
                                                            if (!empty($data->small_image))
                                                                    $img = '<img width="120px" src="' . Yii::$app->homeUrl . '../uploads/platforms/' . $data->id . '/index/small.' . $data->small_image . '"/>';
                                                            return $img;
                                                    },
                                                ],
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
                                                    'value' => function ($data) {
                                                            if ($data->status == 1) {
                                                                    return 'Enabled';
                                                            } else if ($data->status == 0) {
                                                                    return 'Disabled';
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


