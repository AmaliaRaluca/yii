<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city_id'); ?>
		<!-- Select city -->
		<?php echo $form->dropDownList($model,'city_id',
		CHtml::listData(City::model()->findAll(), 'id','city_name'),array('empty'=>'Select a city')); ?>
		<?php echo $form->error($model,'city_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<!-- Select driver category -->
		<?php echo $form->dropDownList($model,'category_id',
		CHtml::listData(DriverCategory::model()->findAll(), 'id','category_type'), array('empty'=>'Select a category')); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php 
		// TO DO - work in progress
		// Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'attribute' => 'created_at',
				'name' => 'created_at',
				'value' => $model->created_at,
				'model' => $model,
				'options'=> array(
					'showAnim' => 'slide',
					'showButtonPanel' => true,
					'dateFormat'=>'yy-mm-dd'
				)
			)); 
		?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->