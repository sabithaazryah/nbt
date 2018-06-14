<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\HomePageOther */

$this->title = 'Update Contents';
$this->params['breadcrumbs'][] = ['label' => 'Home Page Others', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
        <div class="col-md-12">

                <div class="panel panel-default">
                        <div class="panel-heading">
                                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                        </div>
                        <div class="panel-body">
                            <?= common\widgets\Alert::widget() ?>
                                <div class="panel-body"><div class="home-page-other-create">
						<?= $this->render('_form', [
                                                'model' => $model,
                                                ]) ?>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>
