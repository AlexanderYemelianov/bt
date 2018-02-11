<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $addressModel app\models\Addresses */
/* @var $form yii\widgets\ActiveForm */
?>

<?= $form->field($addressModel, 'post')->textInput(['maxlength' => true]) ?>

<?= $form->field($addressModel, 'country_code')->textInput(['maxlength' => true]) ?>

<?= $form->field($addressModel, 'city')->textInput(['maxlength' => true]) ?>

<?= $form->field($addressModel, 'street')->textInput(['maxlength' => true]) ?>

<?= $form->field($addressModel, 'building_number')->textInput(['maxlength' => true]) ?>

<?= $form->field($addressModel, 'flat_number')->textInput(['maxlength' => true]) ?>
