<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Blogs */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
        <div class="col-md-12">

                <div class="panel panel-default">
                        <div class="panel-heading">
                                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                        </div>
                        <div class="panel-body">
                                <?= Html::a('<i class="fa-th-list"></i><span> Manage Blogs</span>', ['index'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                                <div class="panel-body"><div class="blogs-view">
                                                <p>
                                                        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                                                        <?=
                                                        Html::a('Delete', ['delete', 'id' => $model->id], [
                                                            'class' => 'btn btn-danger',
                                                            'data' => [
                                                                'confirm' => 'Are you sure you want to delete this item?',
                                                                'method' => 'post',
                                                            ],
                                                        ])
                                                        ?>
                                                </p>

                                                <?=
                                                DetailView::widget([
                                                    'model' => $model,
                                                    'attributes' => [
                                                            [
                                                            'attribute' => 'image',
                                                            'format' => 'raw',
                                                            'value' => function ($data) {
                                                                    if (!empty($data->image))
                                                                            $img = '<img width="120px" src="' . Yii::$app->homeUrl . '../uploads/blogs/' . $data->id . '/small.' . $data->image . '"/>';
                                                                    return $img;
                                                            },
                                                        ],
                                                        'title',
                                                        'canonical_name',
                                                        'meta_title',
                                                        'meta_description:ntext',
                                                        'meta_keyword:ntext',
                                                            [
                                                            'attribute' => 'content',
                                                            'value' => function($model) {
                                                                    return strip_tags($model->content);
                                                            }
                                                        ],
                                                            [
                                                            'attribute' => 'blog_date',
                                                            'value' => function($model) {
                                                                    return date('d-M-Y', strtotime($model->blog_date));
                                                            }
                                                        ],
                                                        'alt_tag',
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
                                                    ],
                                                ])
                                                ?>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>


