<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('full_name')); ?>:</b>

	<!-- V1:  personally I prefer this solution because it can be reused and I don't this that this will affect the model in any way
			* please correct me if I am wrong, ty!
	-->
	<!-- <?php echo CHtml::encode($data->getFullName()); ?> -->

	<!-- V2: a more logic and simple way to concat user name -->
	 <?php echo CHtml::encode($data->first_name . ' '. $data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city_id')); ?>:</b>
	<?php echo CHtml::encode(($data->city)? $data->city->city_name : ''); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode(($data->category)? $data->category->category_type : ''); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode(($data->created_at)? $data->created_at : '-'); ?>
	<br />


</div>