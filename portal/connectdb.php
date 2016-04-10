<?php

if(getenv('OPENSHIFT_MYSQL_DB_HOST'))
  $servername = getenv('OPENSHIFT_MYSQL_DB_HOST');
else {
  $servername = 'localhost';
}
if(getenv('OPENSHIFT_MYSQL_DB_USERNAME'))
  $username = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
else {
  $username = 'root';
}
if(getenv('OPENSHIFT_MYSQL_DB_PASSWORD'))
  $password = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
else {
  $password = '';
}
if(getenv('OPENSHIFT_GEAR_NAME'))
  $mysql_db = getenv('OPENSHIFT_GEAR_NAME');
else {
  $mysql_db = 'xtasy';
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$mysql_db", $username, $password);
    // set the PDO error mode to exception

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $salt = 'alssrp';
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
