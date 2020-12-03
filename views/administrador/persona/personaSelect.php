<h1>Hola</h1>
<table>
  <!-- Cabecera de la tabla-->
  <thead>
    <tr>
      <th>id</th>
      <th>Nombre </th>
      <th>Apellido </th>
      <th> Fecha Nacimiento</th>
      <th> Direccion </th>
      <th> Correo </th>
      <th> Telefono </th>
      <th> Fecha Creacion </th>
      <th> Fecha upd </th>
      <th> Area </th>
      
    </tr>
  </thead>

  <!--cuerpo de la tabla-->

  <tbody>
    
    <?php foreach ($this->persona->Select() as $filas): ?>
      <?php $grupal="'".$filas->per_id."','".$filas->per_nombre."','".$filas->per_aplldo."','".$filas->per_fchnac."','".$filas->per_dirccn."','".$filas->per_correo."','".$filas->per_telfno."','".$filas->per_fchcrt."','".$filas->per_fchupd."','".$filas->per_areid."'" ?>

      <tr>
        <th><?php echo $filas->per_id; ?> </th>
        <th><?php echo $filas->per_nombre; ?> </th>
        <th><?php echo $filas->per_aplldo; ?> </th>  
        <th><?php echo $filas->per_dirccn; ?> </th>
        <th><?php echo $filas->per_id; ?> </th>
        <th><?php echo $filas->per_nombre; ?> </th>
        <th><?php echo $filas->per_aplldo; ?> </th>
        <th><?php echo $filas->per_dirccn; ?> </th>
        <th><?php echo $filas->per_id; ?> </th>
        <th><?php echo $filas->per_nombre; ?> </th>

        <th> <button onclick="BorrarComentario(<?php echo $filas->com_id;?>);"> Eliminar </button></th>
        <th> <button onclick="ResponderComentario();"> Responder </button></th>   

      </tr>
     <?php endforeach; ?>
  </tbody>
  <!-- pie de la tabla-->
  <tfoot>
  </tfoot>
</table>

