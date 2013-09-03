<?php
$this->breadcrumbs=array(
	'Transaction'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Transactions','url'=>array('index')),
	array('label'=>'Manage Transactions','url'=>array('admin')),
);
?>

<h1>Create a new Transaction</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
