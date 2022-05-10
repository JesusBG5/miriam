<?php 
require_once("login.php");
$obj= new Login();
if(!isset($_POST['idM'])){
 ?>
<form class='formulario' action=""  method="post">
<h3>Tienda</h3>
<label>Nombre</label>
<input type="text" name="log_nom"><br>
<label>Contraseña</label>
<input type="password" name="log_contra"><br>
<label>Usuario</label>
<input type="text" name="log_usuario"><br>

<input type="submit" name="Alta" value="Agregar">	

</form>
<?php
}
if(isset($_POST['Alta'])){
$obj->alta();
echo"<h4> Abono agregado</h4>";


}
  ?>

