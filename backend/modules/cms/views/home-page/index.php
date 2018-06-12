<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\HomePageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Home Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-page-index">

        <div class="row">
                <div class="col-md-12">

                        <div class="panel panel-default">
                                <div class="panel-heading">
                                        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                                </div>
                                <div class="panel-body">
                                                                                            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                                        
                                        <?=  Html::a('<i class="fa-th-list"></i><span> Create Home Page</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                                                                                                                                                        <?= GridView::widget([
                                                'dataProvider' => $dataProvider,
                                                'filterModel' => $searchModel,
        'columns' => [
                                                ['class' => 'yii\grid\SerialColumn'],

                                                            'id',
            'what_we_do:ntext',
            'service_1:ntext',
            'service_2:ntext',
            'service_3:ntext',
            // 'service_4:ntext',
            // 'service_5:ntext',
            // 'service_6:ntext',
            // 'who_we_are:ntext',

                                                ['class' => 'yii\grid\ActionColumn'],
                                                ],
                                                ]); ?>
                                                                                                                </div>
                        </div>
                </div>
        </div>
</div>


