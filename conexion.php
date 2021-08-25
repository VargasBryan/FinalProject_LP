<?php
include_once("mydata.php");
$id = [];
$precio = [];
$records = mysqli_query($conex,"select * from hotel");
while($data = mysqli_fetch_array($records)){
    $id[$data['nombre']]=$data['hotel_id'];
    $precio[$data['nombre']]=$data['precio'];
}
?>