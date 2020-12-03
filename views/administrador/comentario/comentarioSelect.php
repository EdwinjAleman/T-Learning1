<h1>Hola</h1>
<table>
  <!-- Cabecera de la tabla-->
  <thead>
    <tr>
      <th>id</th>
      <th>nombre usuario</th>
      <th>mensaje</th>
      <th>id foro</th>
      
    </tr>
  </thead>

  <!--cuerpo de la tabla-->

  <tbody>
    
    <?php foreach ($this->comentario->Select() as $filas): ?>
      <?php $grupal="'".$filas->com_id."','".$filas->com_usunom."','".$filas->com_mensj."','".$filas->com_foro_id."'" ?>

      <tr>
        <th><?php echo $filas->com_id; ?> </th>
        <th><?php echo $filas->com_usunom; ?> </th>
        <th><?php echo $filas->com_mensj; ?> </th>
        <th><?php echo $filas->com_foro_id; ?> </th>

        <th> <button onclick="BorrarComentario(<?php echo $filas->com_id;?>);"> Eliminar </button></th>
        <th> <button onclick="ResponderComentario();"> Responder </button></th>   

      </tr>
     <?php endforeach; ?>
  </tbody>
  <!-- pie de la tabla-->
  <tfoot>
  </tfoot>
</table>

