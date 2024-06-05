<?php
/* @var $this DriverCategoryController */
/* @var $model DriverCategory */

$this->breadcrumbs=array(
	'Driver Categories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DriverCategory', 'url'=>array('index')),
	array('label'=>'Create DriverCategory', 'url'=>array('create')),
	array('label'=>'View DriverCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DriverCategory', 'url'=>array('admin')),
);
?>

<h1>Update DriverCategory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>