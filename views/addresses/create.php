<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = 'Add address';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="addresses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->hiddenInput(['value'=> $userId])->label(false); ?>

    <?= $this->render('../addresses/_form-fields', [ 'addressModel' => $model , 'form' => $form ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Add address', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>