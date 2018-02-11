<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Addresses */

$this->title = 'Update Address:';
$this->params['breadcrumbs'][] = ['label' => 'Addresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="addresses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $this->render('../addresses/_form-fields', [ 'addressModel' => $model , 'form' => $form ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Update address', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>