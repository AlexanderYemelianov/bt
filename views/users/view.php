<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $usersAddresses app\models\Addresses */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Add address', ['addresses/create', 'user_id' => $model->id], ['class' => 'btn btn-warning'])  ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'login',
            'name',
            'surname',
            [
                'attribute' => 'sex',
                'value' => constant(strtoupper($model->sex))
            ],
            'date',
            'email:email',
        ],
    ]) ?>

    <h3>Address information: </h3>
    <?php /*foreach ($usersAddresses as $address):*/?><!--
        <?/*= DetailView::widget([
            'model' => $address,
            'attributes' => [
                'post',
                'country_code',
                'city',
                'street',
                'building_number',
                'flat_number',
            ],
        ]) */?>
    --><?php /*endforeach; */?>

    <?= GridView::widget([
        'dataProvider' => $usersAddresses,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'post',
            'country_code',
            'city',
            'street',
            'building_number',
            'flat_number',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
                'buttons' => [
                    'update' => function ($url, $model) {
                        $url = Url::to(['addresses/update', 'id' => $model->id]);
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, ['title' => 'update']);
                    },
                    'delete' => function ($url, $model) {
                        $url = Url::to(['addresses/delete', 'id' => $model->id]);
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                            'title'        => 'delete',
                            'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                            'data-method'  => 'post',
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>

</div>
