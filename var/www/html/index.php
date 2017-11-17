<?php
include ('dbconn.php');
$server = gethostname();
list($first, $second, $third, $fourth, $fifth) =
    split("-", $server, 5);
echo "Hello, world! I'm $fifth";

$selectdb = mysql_select_db("will",$con);
$rows = mysql_query("select * from quotes");
$number_of_rows = mysql_num_rows($rows);

$linenum = (rand(10,$number_of_rows));

echo "<br>";

$query = mysql_query("select words from quotes where id = $linenum");

$row = mysql_fetch_row($query);
echo $row[0];

echo "<br>";
mysql_close($con);
?>

