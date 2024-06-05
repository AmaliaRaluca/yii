<?php
/* @var $this DriverCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Driver Categories',
);

$this->menu=array(
	array('label'=>'Create DriverCategory', 'url'=>array('create')),
	array('label'=>'Manage DriverCategory', 'url'=>array('admin')),
);
?>

<h1>Driver Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
