<?php
$conn_error='couldnot connect';
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='adventure';

if (!@mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!@mysql_select_db($mysql_db)){
die ($conn_error);
}
?>
<?php
$query1 = "SELECT event FROM event ORDER BY id ";
if ($query_run1 = mysql_query($query1)){
	while ($query_row1 =mysql_fetch_assoc($query_run1)){
		$event1 = $query_row1['event'];
		echo $event1."<br>";
	}
}
else {
	echo "failed";
}
?>
<?php
$query = "SELECT event FROM event ORDER BY id <=5";
if ($query_run = mysql_query($query)){
	while ($query_row =mysql_fetch_assoc($query_run)){
		$event = $query_row['event'];
		echo $event."<br>";
	}
}
else {
	echo "failed";
}

?>
