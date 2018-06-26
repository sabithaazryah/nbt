<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AppointmentWidget
 *
 * @author
 * JIthin Wails
 */

namespace common\components;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\web\NotFoundHttpException;

class ContactFormWidget extends Widget {

        public function init() {
                parent::init();
                if (!isset(Yii::$app->user->identity->id)) {
                        return '';
                }
        }

        public function run() {
                $model = new \common\models\Appointment();
                $model->setScenario('appointment');
                return $this->render('contact_form', ['model' => $model]);
        }

}

?>
