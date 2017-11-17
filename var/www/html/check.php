<?php
include ('dbconn.php');

if (!$con) {
    header('HTTP/1.1 500 Internal Server Error');
    die('Could not connect: ' . mysql_error());
}
    header('HTTP/1.1 200 Success');
echo 'Connected successfully';
mysql_close($con);
?>

