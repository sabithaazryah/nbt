<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PortfolioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Portfolios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portfolio-index">

        <div class="row">
                <div class="col-md-12">

                        <div class="panel panel-default">
                                <div class="panel-heading">
                                        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                                </div>
                                <div class="panel-body">
                                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                                        <?= \common\widgets\Alert::widget() ?>
                                        <?= Html::a('<i class="fa-th-list"></i><span> Add Portfolio</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                                        <?=
                                        GridView::widget([
                                            'dataProvider' => $dataProvider,
                                            'filterModel' => $searchModel,
                                            'columns' => [
                                                    ['class' => 'yii\grid\SerialColumn'],
                                                    [
                                                    'attribute' => 'image',
                                                    'format' => 'raw',
                                                    'value' => function ($data) {
                                                            if (!empty($data->image))
                                                                    $img = '<img width="120px" src="' . Yii::$app->homeUrl . '../uploads/portfolio/' . $data->id . '/small.' . $data->image . '"/>';
                                                            return $img;
                                                    },
                                                ],
                                               [
                                                    'attribute' => 'type',
                                                    'value' => function($model) {
                                                            if (isset($model->type) && $model->type != '') {
                                                                    if ($model->type == 1) {
                                                                            return 'Web Design';
                                                                    } else if ($model->type == 2) {
                                                                            return 'Branding Designs';
                                                                    } else if ($model->type == 3) {
                                                                            return 'Brochure Designing';
                                                                    } else if ($model->type == 4) {
                                                                            return 'Social Media';
                                                                    }
                                                            } else if (isset($model->service) && $model->service != '') {
                                                                    $service = common\models\Services::findOne($model->service);
                                                                    return $service->heading;
                                                            }
                                                    },
                                                ],
                                                'name',
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
                                                    ['class' => 'yii\grid\ActionColumn'],
                                            ],
                                        ]);
                                        ?>
                                </div>
                        </div>
                </div>
        </div>
</div>


