<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1 align="center"><?= Html::encode($this->title) ?></h1>

    <div class="form-group">
    	            <div class="form-group">
						<label for="codigo" class="col-lg-2 control-label">Codigo</label>
						<div class="col-lg-2">
							<input type="text" class="form-control" id="codigo" placeholder="codigo" name="codigo">
						</div>
						<button type="button" class="btn btn-default form-control-feedback" aria-label="right Align">
						
						  <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						</button>
					
						<label for="nombre" class="col-lg-2 control-label">Nombre</label>
						<div class="col-lg-3">
							<input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
						</div>
					</div>
					<br><br><br>
					<div class="form-group">
				      <label for="cercania" class="col-lg-2 control-label">cantidad</label>
				      <div class="col-lg-3">
					      <input type="text" class="form-control" id="cantidad" placeholder="cantidad" name="email">
					  </div>

				    </div>
					
					<div class="form-group">
						<label for="precio" class="col-lg-2 control-label">Precio de compra</label>
						<div class="col-lg-3">
							<input type="text" class="form-control" id="precio" placeholder="0000.00" name="precio">
						</div>

					</div>
					<br><br>

		<div class="form-group">
			 <label for="comment" class="col-lg-2 control-label">Descrición</label>
		     <div class="col-lg-3">
				<textarea class="form-control col-lg-2 " rows="2" id="comment"></textarea>
			</div>
		</div>
					<br><br><br>

			<div class="col-md-4 text-center">
				<button type="submit" class="btn btn-primary btn-lg" id="btn1">Añadir producto</span>
			</div>
			<br><br>
		<hr/>


		<div class="col-lg-4">
			<h3>Producto 1</h3>
			<p>Descripcion del producto.
			Precio del producto</p>
		</div>
		<div class="col-lg-4">
			<h3>Producto 2</h3>
			<p>Descripcion del producto.
			Precio del producto</p>
		</div>
		<div class="col-lg-4">
			<h3>Producto 3</h3>
			<p>Descripcion del producto.
			Precio del producto</p>
		</div>
		<div class="col-lg-4" >
			<h3>Producto 4</h3>
			<p>Descripcion del producto.
			Precio del producto</p>
		</div>

</div>
