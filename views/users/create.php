<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Addresses */

$this->title = 'Create user';
$this->params['breadcrumbs'][] = ['label' => 'Create user', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'addressModel' => $addressModel
    ]) ?>

</div>
