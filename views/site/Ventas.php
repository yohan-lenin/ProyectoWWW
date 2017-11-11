<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Ventas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-Ventas">
    <h1 align="center"><?= Html::encode($this->title) ?></h1>

        <div class="form-group">
                    <div class="form-group">
                        <label for="codigo" class="col-lg-2 control-label">Codigo</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" id="codigo" placeholder="codigo" name="codigo">
                        </div>
                        <button type="button" class="btn btn-default form-control-feedback" aria-label="right Align">
                        
                          <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                        </button>
                    
                        <label for="nombre" class="col-lg-2 control-label ">Nombre</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre del producto" name="nombre">
                        </div>
                    </div>
                    <br><br><br>
                    <div class="form-group">
                      <label for="cercania" class="col-lg-2 control-label">cantidad</label>
                      <div class="col-lg-3">
                          <input type="text" class="form-control" id="cantidad" placeholder="cantidad" name="email">
                      </div>

                  
                    
                    
                        <label for="precio" class="col-lg-2 control-label">Precio</label>
                        <div class="col-lg-3">
                            <input type="text" class="form-control disabled" id="precio" placeholder="0000.00" name="precio">
                        </div>
                      </div>

                
                    <br><br>
                   <hr/>

            <br><br>
            <div class="form group">
                <?php echo Html::submitButton("Añadir Producto", ["class" => "btn btn-primary  btn-lg center-block"]) ?>

            </div>
            <br><br>
            <div class="table-responsive">

            <table class="table table-hover">
              <tr>
                  <td>CODIGO</td>
                  <td>NOMBRE</td>
                  <td>CANTIDAD</td>
                  <td>Precio</td>
              </tr>
              <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td></td>
                  <td></td>
                  <td>Total</td>
                  <td>00.0</td>
              </tr>
            </table>
        </div>
        <br><br>
        <hr/>



</div>
