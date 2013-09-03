<?php

/*
$this->breadcrumbs=array(
	'Mytestmodel'=>array('index'),
	$model->_id=>array('view','_id'=>$model->_id),
	'Update',
);
*/

$this->breadcrumbs=array(
	'Mytestmodel'=>array('index'),
	$model->desc=>array('view','id'=>$model->_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Transactions','url'=>array('index')),
	array('label'=>'Create Transactions','url'=>array('create')),
	array('label'=>'View Transactions','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Transactions','url'=>array('admin')),
);
?>

<h1>Update Transactions <?php echo $model->_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
