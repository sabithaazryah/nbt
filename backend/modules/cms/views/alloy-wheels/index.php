<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AlloyWheelsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alloy Wheels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alloy-wheels-index">

        <div class="row">
                <div class="col-md-12">

                        <div class="panel panel-default">
                                <div class="panel-heading">
                                        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                                </div>
                                <div class="panel-body">
                                                                                            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                                        <?= common\widgets\Alert::widget() ?>
                                        <?=  Html::a('<i class="fa-th-list"></i><span> Add Alloy Wheels</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                                                                                                                                                        <?= GridView::widget([
                                                'dataProvider' => $dataProvider,
                                                'filterModel' => $searchModel,
        'columns' => [
                                                ['class' => 'yii\grid\SerialColumn'],

                                                          //  'id',
            [
                                                    'attribute' => 'image',
                                                    'format' => 'raw',
                                                    'value' => function ($data) {
                                                            if (!empty($data->image))
                                                                    $img = '<img width="120px" src="' . Yii::$app->homeUrl . '../uploads/alloy-wheels/' . $data->id . '/small.' . $data->image . '"/>';
                                                            return $img;
                                                    },
                                                ],
             [
                                                    'attribute' => 'brand',
                                                    'value' => function ($data) {
                                                            if (!empty($data->brand)){
                                                                $brand=Brands::findOne($data->brand);
                                                                return $brand->title;
                                                            }
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
            // 'spec_2_value',
            // 'image',
            // 'alt_tag',
            // 'status',
            // 'CB',
            // 'UB',
            // 'DOC',
            // 'DOU',

                                                ['class' => 'yii\grid\ActionColumn',
                                                    'template'=>'{update}{delete}'],
                                                ],
                                                ]); ?>
                                                                                                                </div>
                        </div>
                </div>
        </div>
</div>


