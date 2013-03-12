<?php

$host = "localhost";
$user = "root";
$db_name = "stickershock";
$password= "root";

$con = mysql_connect($host, $user, $password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db_name, $con);

if(isset($_GET['delete'])) {
  $result = mysql_query('DELETE FROM items WHERE itemName = '.(int)$_GET['delete'],$link);
}

mysql_close($con);


?>