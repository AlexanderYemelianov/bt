<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Addresses;
use yii\helpers\Url;

class AddressesController extends Controller
{
    /**
     * Creates a new Addresses models related to specific user.
     *
     * @params integer $user_id
     * @return mixed
     */
    public function actionCreate($user_id)
    {
        $model = new Addresses();

        if($model->load(Yii::$app->request->post()) && is_numeric($model->post)){
            $model->country_code = strtoupper($model->country_code);
            $model->save();

            return $this->redirect(Url::to(['users/view', 'id' => $user_id]));
        }

        return $this->render('create', [
            'model' => $model,
            'userId' => $user_id
        ]);
    }

    /**
     * Deletes an existing Address model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = Addresses::findOne($id);
        $model->delete();

        return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
    }

    /**
     * Updates an existing Address model.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = Addresses::findOne($id);
        $userId = $model->user->id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(Url::to(['users/view', 'id' => $userId]));
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

}
