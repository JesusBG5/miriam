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
<a href="vistaModificarCliente.php">Modificar</a>	
</form>
<?php
}
if(isset($_POST['Alta'])){
$obj->alta();
echo"<h4> Cliente agregado</h4>";


}
  ?>



<?php 
    if(isset($_POST['idM'])){
      $busqueda = $obj->buscar($_POST["idM"]);
      $fila = $busqueda->fetch_assoc();
     ?>
     <form class='formulario' action=""  method="post">
    <h3>Cliente</h3>
    <label>Nombre cliente</label>
    <input type="text" name="cl_nom" value="<?php echo $fila['cl_nom'] ?>"><br>
    <label>Telefono</label>
    <input type="text" name="cl_tel" value="<?php echo $fila['cl_tel'] ?>"><br>
    <label>Direccion</label>
    <input type="text" name="cl_direc" value="<?php echo $fila['cl_direc'] ?>"><br>
    <input type="hidden" name="id_cliente" value="<?php echo $fila['id_cliente'] ?>"><br>
    <input type="submit" name="Modificar" value="Modificar">  
    </form>

    <?php
    }
    if(isset($_POST['Modificar'])){
    $obj->modificar();
    echo"<h4>Modificacion exitosa</h4>";
    }


    if(isset($_POST['idE'])){
      $obj->baja();
      echo"<h4>Cliente eliminado</h4>";
    }
  ?>



<table>
  <th>Nombre</th>
  <th>Teléfono</th>
  <th>Dirección</th>
  <th>Eliminar</th>
  <th>Editar</th>
  <?php 
    $resultado = $obj->consulta();
    while($fila = $resultado->fetch_assoc()){
      echo "<tr>";
      echo "<td>".$fila["cl_nom"]."</td>";
      echo "<td>".$fila["cl_tel"]."</td>";
      echo "<td>".$fila["cl_direc"]."</td>";
      echo "<td>
      <form action='' method='post' id='formEliminar'>
        <input type='hidden' name='idE' value='".$fila["id_cliente"]."'>
        <input type='hidden' name='id_cliente' value='".$fila["id_cliente"]."'>
        <input type='button' value='Eliminar' onclick='eliminar()'>
      </form>
      </td>";
      echo "<td>
      <form action='' method='post'>
        <input type='hidden' name='idM' value='".$fila["id_cliente"]."'>
        <input type='submit' value='Editar'>
      </form>
      </td>";
      echo "</tr>";
    }
   ?>
</table>

<script type="text/javascript">
   function eliminar(){
     let prueba = confirm("¿Seguro que deseas eliminar?");
     if(prueba==true){
       document.getElementById("formEliminar").submit();
     }
   }
</script>
