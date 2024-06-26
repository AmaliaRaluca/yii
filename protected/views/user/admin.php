<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	})
	return false;
});
$('.filter-button').click(function() {
	filterVal = $('#User_km').val();
	if (!Number(filterVal)) {
       // distance input is not a number
	     $('#distance-error').text('Distance must be number.');
		return false;
	}
 });

 var countChecked = function(event) {
    var checked = $('input:checked').length;
	var numberOfCheckboxes = $( 'input[type=checkbox]').length;
	
	 $('.dynamic-text-checkbox').text('');

	 if (checked > 0) {

	 	//click ok select all checkbox 
		if (event.target.id == 'id_all') 
		{
		  
			if (numberOfCheckboxes == checked + 1) {
				$('.dynamic-text-checkbox').text( numberOfCheckboxes - 2 +  ' checkboxes checked');	
			} else {
				$('.dynamic-text-checkbox').text( numberOfCheckboxes - 1 +  ' checkboxes checked');
			}

		} else {
            // count for individual checkbox
			if ($('input:checked').attr('id') == 'id_all') {
				$('.dynamic-text-checkbox').text( checked -1 + ' checkboxes checked');
			} else {
			 	$('.dynamic-text-checkbox').text( checked + (checked === 1 ? ' checkbox ' :  ' checkboxes ') + 'checked');
			}
     	}

		//click on deselect all 
		if (event.target.id == 'id_all' && numberOfCheckboxes == checked + 1) {
			$('.dynamic-text-checkbox').text('');
		}
	}
};

$( 'input[type=checkbox]').on( 'click', countChecked );

countChecked(); 
");
?>

<h1>Manage Users</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php
	$this->renderPartial('_search',array(
	'model'=>$model
)); ?>

</div><!-- search-form -->

<?php

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=> $model->search(),
	'filter'=> $model,
	'columns'=>array(
		array(
            'id' => 'id',
            'class' => 'CCheckBoxColumn',
			'selectableRows' => 'multiple'
        ),
		'id',
		'first_name',
		'last_name',
		array( 'name'=>'city_search', 'value'=> function($data) {
			$city_name = '';

			if ($data->city) {

				 $city_name = $data->city->city_name;
			 
				//Probably there is a much more elegant solution using CDetailView? ...this is yet to be discovered 
				if ($data->city->distance_from_bucharest >= 250) {
					echo '<span style="color:red">'. $city_name . '</span>';
				} else{
					echo '<span style="color:green">'. $city_name . '</span>';
				}
			}
		}),
		array( 'name'=>'category_search', 'value'=> function($data) {
				echo  $data->category? $data->category->category_type : ' -';
		}),
		'created_at',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<div class="filter-form" style="display:inline">

<?php
	$this->renderPartial('_filter',array(
	'model'=>$model
)); ?>

</div><!-- filter-form -->

<div class="row dynamic-text-checkbox"></div>

