<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'transaction-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'useremail',array('class'=>'span5','maxlength'=>150)); ?>

	<?php echo $form->textFieldRow($model,'userrole',array('class'=>'span5','maxlength'=>150)); ?>

	<?php echo $form->textFieldRow($model,'date',array('class'=>'span5','maxlength'=>150)); ?>
	
	<?php echo $form->textFieldRow($model,'accountname',array('class'=>'span5','maxlength'=>150)); ?>
	
	<?php echo $form->textFieldRow($model,'accounttype',array('class'=>'span5','maxlength'=>150)); ?>
	
	<?php echo $form->textFieldRow($model,'openingbalance',array('class'=>'span5','maxlength'=>150)); ?>
	
	<?php echo $form->textFieldRow($model,'maincat',array('class'=>'span5','maxlength'=>150)); ?>
	
	<?php echo $form->textFieldRow($model,'subcat',array('class'=>'span5','maxlength'=>150)); ?>
	
	<?php echo $form->textFieldRow($model,'inorout',array('class'=>'span5','maxlength'=>150)); ?>
	
	<?php echo $form->textFieldRow($model,'payee',array('class'=>'span5','maxlength'=>150)); ?>
	
	<?php echo $form->textFieldRow($model,'amount',array('class'=>'span5','maxlength'=>150)); ?>
	
	<?php echo $form->textFieldRow($model,'reconciled',array('class'=>'span5','maxlength'=>150)); ?>
	
	<?php echo $form->textFieldRow($model,'notes',array('class'=>'span5','maxlength'=>150)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
