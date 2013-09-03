<?php
$this->breadcrumbs=array(
	'Mytestmodel'=>array('index'),
	$model->_id,
);

$this->menu=array(
	array('label'=>'List Transactions','url'=>array('index')),
	array('label'=>'Create Transactions','url'=>array('create')),
	array('label'=>'Update Transactions','url'=>array('update','id'=>$model->_id)),
	array('label'=>'Delete Transactions','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Transactions','url'=>array('admin')),
);
?>

<h1>View Transactions #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'_id',
		
		'date',
		'desc',
		'amount',
	),
)); ?>
