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
                                                                    $img = '<img width="120px" src="' . Yii::$app->homeUrl . '../uploads/services/' . $data->id . '/small.' . $data->image . '"/>';
                                                            return $img;
                                                    },
                                                ],
                            'heading',
                            // 'canonical_name',
                            // 'meta_title',
                            // 'meta_description:ntext',
                            // 'meta_keyword:ntext',
                            // 'status',
                            // 'CB',
                            // 'UB',
                            // 'DOC',
                            // 'DOU',
                            ['class' => 'yii\grid\ActionColumn',
                                'template'=>'{update}'],
                        ],
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


