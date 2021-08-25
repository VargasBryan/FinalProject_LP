<?php
    include_once("conexion.php");

    if(isset($_POST['register'])){
        $cedula = trim($_POST['cedula']);
        $nombre = trim($_POST['fname']);
        $mail = trim($_POST['mail']);
        $genero = trim($_POST['genero']);
        $pass = trim($_POST['pass']);

        $query = "insert into datos (cedula, nombre, mail, genero, pass)
                    values ('$cedula','$nombre','$mail','$genero','$pass')";

        $consulta=mysqli_query($conex,$query);
        if($consulta){
            echo "<br>datos ingresados con exito";
        }else
            echo "ocurrio un error";
    }
?>