<?php 
require_once("cuenta.php");
$obj= new cuentaPagar();
if(!isset($_POST['idM'])){
 ?>
 <form class='formulario' action=""  method="post">
<h3>Cuenta</h3>
<label>Cuenta</label>
<?php 
//echo $obj->comboCliente(); 
 ?><br>
<label>Deuda</label>
<input type="text" name="cu_deuda"><br>
<label>Pedido</label>
<input type="text" name="cu_pedido"><br>
<label>Fecha</label>
<input type="date" name="cu_fecha"><br>
<input type="submit" name="Alta" value="Agregar">
<a href="vistaModificarCuenta.php">Modificar</a>		
</form>

<?php
}
if(isset($_POST['Alta'])){
$obj->alta();
echo"<h4> Cuenta agregada</h4>";


}
  ?>

