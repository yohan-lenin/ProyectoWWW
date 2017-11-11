<?php

namespace app\models;

class Proveedor extends \yii\db\ActiveRecord{
	public static function tablename(){

		return "proveedor";
	}

	public function rules(){
		return [
			[["idProveedor"], "required"],
			[["nombreProveedor"], "string", "max" => 20]
		];
	}

	public function attributeLabels(){
		return[
			"idProveedor" => "idProveedor",
			"nombreProveedor" => "nombreProveedor"
		];
	}
}