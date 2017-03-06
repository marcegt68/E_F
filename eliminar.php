<?php 
 include "conexion.php";
 $id=$_POST["id"];
 
 $sql="DELETE FROM servicios where id_servicio='$id'";
 $resp=mysqli_query($conn,$sql);
 
 $datos=array();
 
 if($resp){
 echo 'eliminado correctamente';
 
 }else{
  echo "Error al procesar la eliminacion".mysqli_error(); 
 }
 mysqli_close($conn);
 
?>