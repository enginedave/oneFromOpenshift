<?php
$this->breadcrumbs=array(
	'Mytestmodel'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Transactions','url'=>array('index')),
	array('label'=>'Manage Transactions','url'=>array('admin')),
);
?>

<h1>Create Mytestmodel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
