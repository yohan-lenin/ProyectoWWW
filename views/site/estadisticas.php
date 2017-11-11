<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use  miloschuman\highcharts\Highcharts ; 

/* @var $this yii\web\View */

$this->title = 'Estadisticas';
?>

<div class="site-estadisticas">
<h1 align="center">Estadisticas</h1>

Highcharts::widget ( [ 
   ' opciones ' => ' { 
      "título": {"texto": "Consumo de fruta"}, 
      "eje x": { 
         "categorías": ["Manzanas", "Plátanos", "Naranjas"] 
      }, 
      "yAxis": { 
         "title": {"text": "Fruit comido"} 
      }, 
      "serie": [ 
         {"nombre": "Jane", "data": [1, 0, 4]}, 
         {"nombre": "Juan", "datos": [5, 7,3]} 
      ] 
   } '
] ) ;

<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    Top 10 de Productos menos vendidos.
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
    Top 10 Productos mas vendidos
  </label>
</div> 


</div>