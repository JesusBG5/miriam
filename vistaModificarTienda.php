<?php 
require_once("tienda.php");
$obj= new Tienda();
if(!isset($_POST['idM'])){
 ?>
<form class='formulario' action=""  method="post">
<h3>Tienda</h3>
<label>Nombre</label>
<input type="text" name="ti_nom"><br>
<label>Ubicacion</label>
<input type="text" name="ti_ubi"><br>

<input type="submit" name="Modificar" value="Modificar">		

</form>
<?php
}
if(isset($_POST['Modificar'])){
$obj->modificar();
echo"<h4>Modificacion exitosa</h4>";


}
  ?>
