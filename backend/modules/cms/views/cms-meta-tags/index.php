<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CmsMetaTagsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Meta Tags';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cms-meta-tags-index">

        <div class="row">
                <div class="col-md-12">

                        <div class="panel panel-default">
                                <div class="panel-heading">
                                        <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                                </div>
                                <div class="panel-body">
                                    <?= \common\widgets\Alert::widget() ?>
                                                                                            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                                        
                                                                                                                                                        <?= GridView::widget([
                                                'dataProvider' => $dataProvider,
                                                'filterModel' => $searchModel,
        'columns' => [
                                                ['class' => 'yii\grid\SerialColumn'],

//            'meta_description:ntext',
//            'meta_keyword:ntext',
//            'CB',
            // 'UB',
            // 'DOC',
            // 'DOU',
             'page_title',
                        'meta_title',

            // 'page_url:url',

                                                ['class' => 'yii\grid\ActionColumn',
                                                    'template'=>'{update}'],
                                                ],
                                                ]); ?>
                                                                                                                </div>
                        </div>
                </div>
        </div>
</div>


