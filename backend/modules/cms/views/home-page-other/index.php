<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\HomePageOtherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Home Page Others';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-page-other-index">

        <div class="row">
                <div class="col-md-12">

                        <div class="panel panel-default">
                                <div class="panel-heading">
                                        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                                </div>
                                <div class="panel-body">
                                                                                            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                                        
                                        <?=  Html::a('<i class="fa-th-list"></i><span> Create Home Page Other</span>', ['create'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                                                                                                                                                        <?= GridView::widget([
                                                'dataProvider' => $dataProvider,
                                                'filterModel' => $searchModel,
        'columns' => [
                                                ['class' => 'yii\grid\SerialColumn'],

                                                            'id',
            'banner_label',
            'welcome_note',
            'small_content',
            'detail_content',
            // 'caption_1',
            // 'caption_1_detail',
            // 'caption_2',
            // 'caption_2_detail',
            // 'caption_3',
            // 'caption_3_detail',
            // 'footer_content:ntext',

                                                ['class' => 'yii\grid\ActionColumn'],
                                                ],
                                                ]); ?>
                                                                                                                </div>
                        </div>
                </div>
        </div>
</div>


