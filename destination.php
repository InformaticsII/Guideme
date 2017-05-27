<?php
if(isset($_POST['id'])){
  include"connection.php";

  $pic_id=$_POST['id'];
  echo $pic_id;

    $likes = mysql_query("SELECT count('user_id') as value from likes where postid='$pic_id'");
    $row=mysql_fetch_array($likes);
echo $row['value'];
}

 ?>
