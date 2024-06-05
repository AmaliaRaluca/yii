<?php
/* @var $this DriverCategoryController */
/* @var $model DriverCategory */

$this->breadcrumbs=array(
	'Driver Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DriverCategory', 'url'=>array('index')),
	array('label'=>'Manage DriverCategory', 'url'=>array('admin')),
);
?>

<h1>Create DriverCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>