<?php 
require_once("cliente.php");
$obj= new Cliente();
if(!isset($_POST['idM'])){
 ?>
 <form class='formulario' action=""  method="post">
<h3>Cliente</h3>
<label>Nombre cliente</label>
<input type="text" name="cl_nom"><br>
<label>Telefono</label>
<input type="text" name="cl_tel"><br>
<label>Direccion</label>
<input type="text" name="cl_direc"><br>

<input type="submit" name="Alta" value="Agregar">	
</form>

<?php
}
if(isset($_POST['Alta'])){
$obj->alta();
echo"<h4> Cliente agregado</h4>";


}
  ?>
