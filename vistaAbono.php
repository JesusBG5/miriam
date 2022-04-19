<?php 
require_once("abono.php");
$obj= new Abono();
if(!isset($_POST['idM'])){
 ?>
<form class='formulario' action=""  method="post">
<h3>Abono</h3>
<label>Monto</label>
<input type="text" name="ab_monto"><br>
<label>Fecha</label>
<input type="date" name="ab_fecha"><br>
<input type="submit" name="Alta" value="Agregar">	

</form>
<?php
}
if(isset($_POST['Alta'])){
$obj->alta();
echo"<h4> Abono agregado</h4>";


}
  ?>

