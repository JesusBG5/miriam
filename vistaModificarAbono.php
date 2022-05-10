<?php 
require_once("abono.php");
//include("conexion.php");
$obj= new Abono();
if(!isset($_POST['idM'])){
 ?>
<form class='formulario' action="" method="post">
<h3>Abono</h3>
<label>Monto</label>
<input type="text" name="ab_monto"><br>
<label>Fecha</label>
<input type="date" name="ab_fecha"><br>
<input type="submit" name="Modificar" value="Modificar">	

</form>
<?php
}
if(isset($_POST['Modificar'])){
$obj->modificar();
echo"<h4>Modificacion exitosa</h4>";
}
  ?>