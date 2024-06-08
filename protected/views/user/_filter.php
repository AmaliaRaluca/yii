<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php

 $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl('user/admin/'),
	'method'=>'get',
)); ?>


<div class="row">
	<?php
	echo $form->label($model,'distance_from_bucharest'); ?>
	<?php echo $form->textField($model, 'km', array('placeholder'=>'Enter a number')); ?>
	<p id='distance-error' style='color:red;'></p>
</div>

<div class="row buttons filter-button">
	<?php echo CHtml::submitButton('Filter'); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- filter-form -->