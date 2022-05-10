<?php 
require_once("producto.php");
$obj= new Producto();
if(!isset($_POST['idM'])){
 ?>
<form class='formulario' action=""  method="post">
<h3>Producto</h3>
<label>Costo</label>
<input type="text" name="p_cost"><br>
<label>Precio</label>
<input type="text" name="p_precio"><br>
<label>Nombre</label>
<input type="text" name="p_nombre"><br>
<label>Descripcion</label>
<input type="text" name="p_descri"><br>
<input type="submit" name="Alta" value="Agregar">
<a href="vistaModificarProducto.php">Modificar</a>		

</form>
<?php
}
if(isset($_POST['Alta'])){
$obj->alta();
echo"<h4> Abono agregado</h4>";


}
  ?>

