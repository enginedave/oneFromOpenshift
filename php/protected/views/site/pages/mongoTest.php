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

		
		
		
		
		
		echo 'Mongo Information<br />';
		//$stuff = Yii::app()->mongodb->cities->find()->info();
		//$stuff = Yii::app()->mongodb->cities;
		//MongoCollection::all()
		//$stuff = Yii::app()->mongodb->users->findAll();
		//var_dump ($stuff);
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		
		
		//get the db object which is a EMongoClient object
		echo '<h1>This is the mongoDB object</h1>';
		$dbobj = Yii::app()->mongodb;
		var_dump($dbobj);
		echo '<br /><br />';
		
		echo '<h1>This is the cities collection object</h1>';
		//select the cities collection from the sample db
		$collection = $dbobj->citys;
		var_dump($collection);
		echo '<br /><br />';
		
		//insert some stuff
		$document = array( 'city' => 'Londonderry', 'state' => 'Northern Ireland' );
		$collection->insert($document);
		$document = array( 'city' => 'Cork', 'state' => 'Ireland' );
		$collection->insert($document);
		$document = array( 'city' => 'New York', 'state' => 'USA' );
		$collection->insert($document);
		
		
		
		
		//find all the records by getting the cursor
		echo '<h1>This is the cursor object</h1>';
		$cursor = $collection->find();
		var_dump($cursor);
		echo '<br /><br />';
		
		
		echo '<h1>This iterates over the cursor and echos the document object</h1>';
		foreach ($cursor as $document) {
			//echo $document['city'] . '<br />'.$document['state'].'<br />';
			var_dump($document);
			echo '<br />';
		}
		
		echo '<h1>This iterates over the cursor and echos the actual values object</h1>';
		foreach($cursor as $doc) {
			echo 'The city is: '.$doc['city'].' and the state is: '.$doc['state'].'<br />';
		}
		
		$mongoVersion = phpversion('mongo');
		echo '<p>The version of the mongo driver is : '.$mongoVersion.' </p>';
		
		
		
?>

<p>the END</p>
