<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Brands;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TyresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tyres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tyres-index">

        <div class="row">
                <div class="col-md-12">

                        <div class="panel panel-default">
                                <div class="panel-heading">
                                        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                                </div>
                                <div class="panel-body">
                                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                                        <?= common\widgets\Alert::widget() ?>
                                        <?= Html::a('<i class="fa-th-list"></i><span> Add Tyres</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
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
                                                                    $img = '<img width="120px" src="' . Yii::$app->homeUrl . '../uploads/tyres/' . $data->id . '/small.' . $data->image . '"/>';
                                                            return $img;
                                                    },
                                                ],
                                                    [
                                                    'attribute' => 'brand',
                                                    'value' => function ($data) {
                                                            if (!empty($data->brand)) {
                                                                    $brand = Brands::findOne($data->brand);
                                                                    return $brand->title;
                                                            }
                                                    },
                                                ],
                                                    [
                                                    'attribute' => 'type',
                                                    'value' => function ($data) {

                                                            if ($data->type == 1) {
                                                                    return 'Sports Car';
                                                            } else if ($data->type == 0) {
                                                                    return 'Luxury Saloon';
                                                            }
                                                    },
                                                ],
                                                // 'spec_2',
                                                // 'spec_2_value',
                                                // 'image',
                                                // 'alt_tag',
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
                                                // 'CB',
                                                // 'UB',
                                                // 'DOC',
                                                // 'DOU',
                                                ['class' => 'yii\grid\ActionColumn'],
                                            ],
                                        ]);
                                        ?>
                                </div>
                        </div>
                </div>
        </div>
</div>


