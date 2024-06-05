<?php
/* @var $this DriverCategoryController */
/* @var $data DriverCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_type')); ?>:</b>
	<?php echo CHtml::encode($data->category_type); ?>
	<br />


</div>