<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php

 $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl('user/filterAjax', array(
		'filterVal' => '123')),
	'method'=>'get',
)); ?>

<div class="row">
	<?php
	echo $form->label($model,'distance_from_bucharest'); ?>
	<?php echo $form->textField($model,'distance_from_bucharest', array('placeholder'=>'Enter a number')); ?>
	<p id='distance-error' style='color:red;'></p>
</div>

<div class="row buttons filter-button">
	<?php echo CHtml::ajaxSubmitButton('Filter',UserController::createUrl('user/filterAjax'), array('input' => $model->distance_from_bucharest)); ?>
</div>




<?php $this->endWidget(); ?>

</div><!-- filter-form -->