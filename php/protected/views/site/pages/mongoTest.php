<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>About</h1>

<p>This is a "static" page. You may change the content of this page
by updating the file <code><?php echo __FILE__; ?></code>.</p>

<p>
This is some of the test code to see if the app is connecting to the MongoDB service.



</p>

<?php
		echo '<br /><br /><br /><br /><br /><br /><br /><br /><br />';
		echo 'information<br />';
		//$stuff = Yii::app()->mongodb->cities->find()->info();
		//$stuff = Yii::app()->mongodb->cities;
		//MongoCollection::all()
		//$stuff = Yii::app()->mongodb->users->findAll();
		//var_dump ($stuff);
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		
		
		//get the db object which is a EMongoClient object
		$dbobj = Yii::app()->mongodb;
		var_dump($dbobj);
		echo '<br /><br />';
		
		//$server = 'mongodb://admin:3UtiRg4ZdhYq@'.$OPENSHIFT_MONGODB_DB_HOST.':'.$OPENSHIFT_MONGODB_DB_PORT.'/';
		
		//$connection = new MongoClient($server);
		//var_dump($connection);
		//echo '<br /><br />';
		
		
		
?>

<p>the END</p>
