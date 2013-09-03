<?php
$this->breadcrumbs=array(
	'Mytestmodel',
);

$this->menu=array(
	array('label'=>'Create Transactions','url'=>array('create')),
	array('label'=>'Manage Transactions','url'=>array('admin')),
);
?>

<h1>Mytestmodel</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
