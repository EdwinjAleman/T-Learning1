<h1>Hola</h1>
<table>
  <!-- Cabecera de la tabla-->
  <thead>
    <tr>
      <th>id</th>
      <th>nombre usuario</th>
      <th>mensaje</th>
      <th>id respuesta</th>
      
    </tr>
  </thead>

  <!--cuerpo de la tabla-->

  <tbody>
    
    <?php foreach ($this->respuesta->Select() as $filas): ?>
      <?php $grupal="'".$filas->res_id."','".$filas->res_usunom."','".$filas->res_mensj."','".$filas->res_com_id."'" ?>

      <tr>
        <th><?php echo $filas->res_id; ?> </th>
        <th><?php echo $filas->res_usunom; ?> </th>
        <th><?php echo $filas->res_mensj; ?> </th>
        <th><?php echo $filas->res_com_id; ?> </th>

        <th> <button onclick="BorrarRespuesta(<?php echo $filas->res_id;?>);"> Eliminar </button></th>
   
      </tr>
     <?php endforeach; ?>
  </tbody>
  <!-- pie de la tabla-->
  <tfoot>
  </tfoot>
</table>

