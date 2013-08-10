<h1>This is a test page</h1>
<p>This is a test page to see if I can get the Mongo DB to connect to my application</p>

<?php 



$host = getenv($OPENSHIFT_MONGODB_DB_HOST);
$port = getenv($OPENSHIFT_MONGODB_DB_PORT);

$server = 'mongodb://admin:3UtiRg4ZdhYq@'.$host.':'.$port.'/';

echo 'this is the server:'.$server;
		
$connection = new MongoClient($server);
var_dump($connection);
echo '<br /><br />';



?>
