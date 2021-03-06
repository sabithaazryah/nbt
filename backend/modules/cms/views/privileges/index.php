<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PrivilegesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Privileges';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="privileges-index">

        <div class="row">
                <div class="col-md-12">

                        <div class="panel panel-default">
                                <div class="panel-heading">
                                        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                                </div>
                                <div class="panel-body">
                                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                                        <?= common\widgets\Alert::widget() ?>
                                        <?= Html::a('<i class="fa-th-list"></i><span> Add Privileges</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
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
                                                                    $img = '<img width="120px" src="' . Yii::$app->homeUrl . '../uploads/privileges/' . $data->id . '/small.' . $data->image . '"/>';
                                                            return $img;
                                                    },
                                                    'filter' => '',
                                                ],
                                                'title',
                                            [
                                                    'attribute' => 'content',
                                                    'value' => function($data) {
                                                        
                                                            $data->content = strip_tags($data->content);
                                                          
                                                            if (strlen($data->content) > 50) {  
                                                                    $str = substr($data->content, 0, 30);
                                                                    $dot = ' ....';
                                                                   
                                                            } else {
                                                                    $str = $data->content;
                                                                    $dot = '';
                                                            }
                                                            return $str . $dot;
                                                    },
                                                ],
                                                
                                                //'image_alt',
                                                // 'status',
                                                // 'CB',
                                                // 'UB',
                                                // 'DOC',
                                                // 'DOU',
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


