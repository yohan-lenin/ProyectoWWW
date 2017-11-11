<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="proveedor-add">
	<?php $form = ActiveForm::begin()?>	 
	<?php echo $form->field($model, "idProveedor") ?>

	<?php echo $form->field($model, "nombreProveedor") ?>
	<div class="form group">
		<?php echo Html::submitButton("Submit", ["class" => "btn btn-primary"]) ?>

	</div>

	<?php ActiveForm::end() ?>
</div>


