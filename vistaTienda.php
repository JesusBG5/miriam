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

<input type="submit" name="Alta" value="Agregar">
<a href="vistaModificarTienda.php">Modificar</a>		

</form>
<?php
}
if(isset($_POST['Alta'])){
$obj->alta();
echo"<h4> Abono agregado</h4>";


}
  ?>

