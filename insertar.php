<?php
    include("conexion.php");

    if(isset($_POST['register'])){
        $hoteles = trim($_POST['hoteles']);
        $hotel_id=$id[$hoteles];
        $fecha = date("Y-m-d", strtotime($_POST['fecha']));
        $precio = $_POST['dias']*$precio[$hoteles];
        $query = "insert into reserva (hotel_id, fecha_reserva,precio)
                    values ('$hotel_id','$fecha','$precio')";

        $consulta=mysqli_query($conex,$query);
        if($consulta){
            echo "<br>datos ingresados con exito";
        }else
            echo "ocurrio un error";
    }
?>