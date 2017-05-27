<?php

if(isset($_POST['money'])){


include"connection.php";

$money=$_POST['money'];

$result=mysql_query("SELECT image,price,caption from places where price<='$money'");
while($row=mysql_fetch_array($result)){

  echo"<figure><img src=assets/images/$row[image] width=300 height=300><figcaption>$row[caption]. Prize- $row[price]</figcaption></figure>";

}

}
 ?>
