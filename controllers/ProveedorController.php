<?php

namespace app\controllers;
use Yii;

class ProveedorController extends \yii\web\Controller{

	public function actionIndex(){
		$model = new \app\models\Proveedor();
		if($model->load(Yii::$app->request->post()) && $model->validate()){
			$model->save();
		}else{
			return $this->render("Suministro",["model" => $model]);
		}



		/**$proveedors = \app\models\Proveedor::find()->all();
		foreach ($proveedors as $proveedor) {
			echo $proveedor->id;
		}**/
	}
}