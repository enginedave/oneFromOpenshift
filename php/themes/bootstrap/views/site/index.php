<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Welcome to '.CHtml::encode(Yii::app()->name),
)); ?>

<p>Congratulations! You have successfully created your Yii application.</p>

<?php $this->endWidget(); ?>

<p>You may change the content of this page by modifying the following two files:</p>

<ul>
    <li>View file: <code><?php echo __FILE__; ?></code></li>
    <li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>This application has the following entity models:</p>

<ul>
	<li><?php echo CHtml::link("Mytestmodel",array('mytestmodel/index'))?></li>
	<li><?php echo CHtml::link("Transactions",array('transaction/index'))?></li>
	

</ul>

<p>This application has now been cloned to cloud9 ide and sucessfully edited. All good.
The mongo extension has been added (version 3.4.0) which was updated on 29th January 2014. I have uploaded 
this version to the openshift server on 15th February 2014.</p>

<p>For more details on how to further develop this application, please read
    the <a href="http://www.yiiframework.com/doc/">documentation</a>.
    Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
    should you have any questions.</p>
