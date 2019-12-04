<?php
$serverName='DESKTOP-ED6TFT7\SQLEXPRESS';
$connectionInfo= array("Database"=>"sample", "CharacterSet"=>"UTF-8");
$conn_sis = sqlsrv_connect($serverName,$connectionInfo);


$paises = '';
$años = '';
$query='';
// if($conn_sis){
//   if(isset($_POST['pais']) && isset($_POST['año'])){
//     foreach($_POST['pais'] as $value){
//       $paises .= "'".$value."'" . ', ';
//     }
//     foreach($_POST['año'] as $value){
//       $años .= $value . ', ';
//     }
//     $años = substr($años,0,-2);
//     $paises = substr($paises,0,-2);
//     $query1 = "SELECT * from sample1 where pais in ($paises) and año in ($años)";
//   }   
// }
//    echo "fallo en la conexion";
//  die(print_r(sqlsrv_errors(), true));
//  }
// $exec = sqlsrv_query($conn_sis, $query); 


?>