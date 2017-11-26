<?php
include ('../dbconn.php');
$server = gethostname();
list($first, $second, $third, $fourth, $fifth) =
    split("-", $server, 5);

$selectdb = mysql_select_db("will",$con);
$rows = mysql_query("select * from quotes");
$number_of_rows = mysql_num_rows($rows);

$linenum = (rand(10,$number_of_rows));


$query = mysql_query("select words from quotes where id = $linenum");

// Send the response

$data = mysql_fetch_row($query);
header('Content-type: application/json');
echo json_encode( $data );


// close the db connection

mysql_close($con);
?>

