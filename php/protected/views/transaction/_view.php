<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->_id),array('view','id'=>$data->_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('useremail')); ?>:</b>
	<?php echo CHtml::encode($data->useremail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userrole')); ?>:</b>
	<?php echo CHtml::encode($data->userrole); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('accountname')); ?>:</b>
	<?php echo CHtml::encode($data->accountname); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('accounttype')); ?>:</b>
	<?php echo CHtml::encode($data->accounttype); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('openingbalance')); ?>:</b>
	<?php echo CHtml::encode($data->openingbalance); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('maincat')); ?>:</b>
	<?php echo CHtml::encode($data->maincat); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('subcat')); ?>:</b>
	<?php echo CHtml::encode($data->subcat); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('inorout')); ?>:</b>
	<?php echo CHtml::encode($data->inorout); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('payee')); ?>:</b>
	<?php echo CHtml::encode($data->payee); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('reconciled')); ?>:</b>
	<?php echo CHtml::encode($data->reconciled); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />


</div>
