<?php

if(isset($_POST['name'])){


include"connection.php";

$money=$_POST['name'];

$result=mysql_query("SELECT image,price,caption from places where price<='$money'");
while($row=mysql_fetch_array($result)){

  echo"<figure><img src=assets/images/$row[image] width=300 height=300><figcaption>$row[caption]. Prize- $row[price]</figcaption></figure>";

}

}
 ?>
