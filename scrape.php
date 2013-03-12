
<?php
require 'simple_html_dom.php';

$host = "mysql10.000webhost.com";
$user = "a7487523_root";
$db_name = "a7487523_sticker";
$password= "password1";

//create db connection

$con = mysql_connect($host, $user, $password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db_name, $con);

$result = mysql_query("SELECT * FROM items");

//update the DB
while($row = mysql_fetch_array($result)) {
	$html = file_get_contents($row['link']);
	preg_match_all(
    '/$*',
    $html,
    $posts, // will contain the blog posts
    PREG_SET_ORDER // formats data into an array of posts
    foreach ($posts as $post) {
    $price = $post[1];
     // do something with data
    if ($price < $row['itemprice'] )
    	mysqli_query($con,"UPDATE items SET price= '$price'
        WHERE FirstName='Peter' AND LastName='Griffin'");
       //send email shit
   }

   
}








?>

