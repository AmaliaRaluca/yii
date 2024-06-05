<?php
/* @var $this DriverCategoryController */
/* @var $model DriverCategory */

$this->breadcrumbs=array(
	'Driver Categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DriverCategory', 'url'=>array('index')),
	array('label'=>'Create DriverCategory', 'url'=>array('create')),
	array('label'=>'Update DriverCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DriverCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DriverCategory', 'url'=>array('admin')),
);
?>

<h1>View DriverCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category_type',
	),
)); ?>
