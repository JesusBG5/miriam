<?php 
require_once("pedido.php");
$obj= new Pedido();
if(!isset($_POST['idM'])){
 ?>
 <form class='formulario' action=""  method="post">
<h3>Pedido</h3>
<label>Cliente</label>
<?php 
echo $obj->comboCliente(); 
 ?><br>
<label>Precio</label>
<input type="text" name="pe_prec"><br>
<label>Direccion</label>
<input type="text" name="pe_direc"><br>
<label>Fecha</label>
<input type="date" name="pe_fecha">
<input type="submit" name="Alta" value="Agregar">	
</form>

<?php
}
if(isset($_POST['Alta'])){
$obj->alta();
echo"<h4> Pedido agregado</h4>";


}
  ?>

