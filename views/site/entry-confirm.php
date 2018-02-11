<?php
    use yii\helpers\Html;
?>
<h3>Check entered info:</h3>

<p><label>Name: </label> <?= Html::encode($model->name); ?></p>
<p><label>Email: </label> <?= Html::encode($model->email); ?></p>
