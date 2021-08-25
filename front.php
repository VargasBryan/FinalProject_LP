<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

      <form action="insertar.php" method="POST">
      <form>
            <label for="hoteles">Hoteles:</label>
            <select id="hoteles" name="hoteles">

            <?php 
              include ("conexion.php");
              foreach($id as $key => $val){
            ?>
              <option><?php echo $key;?></option>
            
              <?php
                }
              ?>
            </select> <br>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha"><br>

            <label for="dias">Dias:</label>
            <input type="number" id="dias" name="dias"><br>

            <input type="submit" name="register">
      </form>

   
  </body>
</html>