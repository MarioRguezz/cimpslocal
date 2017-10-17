<?php
include 'conexion.php';

$gaffete = $_POST['gaffete'];
$id = $_POST['id'];

if($gaffete == "0"){
  $variable = "1";
} else{
  $variable = "0";
}
echo  $gaffete;
echo $id;
echo  $variable;
$conec = conect();
$sql = "UPDATE users SET accept='" .$variable."' WHERE id='".$id ."'";

    if(mysqli_query($conec,$sql)){
      header('Location: tabla.php');
    } else{
      echo "gg";
    }


?>
