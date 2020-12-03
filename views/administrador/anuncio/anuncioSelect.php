<h1>Hola</h1>
<table>
  <!-- Cabecera de la tabla-->
  <thead>
    <tr>
      <th>id</th>
      <th>titulo</th>
      <th>mensaje</th>
      <th>fecha inicio</th>
      <th>fecha fin</th>
      <th>Nombre Creador</th>
      <th>Editar    </th>
      <th>Eliminar  </th>
      
    </tr>
  </thead>


  <!--cuerpo de la tabla-->
  <tbody>
    
    <?php foreach ($this->anuncio->Select() as $filas): ?>
      <?php $grupal="'".$filas->anun_id."','".$filas->anun_titulo."','".$filas->anun_mensaje."','".$filas->anun_fecha_inicio."','".$filas->anun_fecha_fin.."','".$filas->anun_nombreCreador."'" ?>

      <tr>
        <th><?php echo $filas->anun_id; ?> </th>
        <th><?php echo $filas->anun_titulo; ?> </th>
        <th><?php echo $filas->anun_mensaje; ?> </th>
        <th><?php echo $filas->anun_fecha_inicio; ?> </th>
        <th><?php echo $filas->anun_fecha_fin; ?> </th>
        <th><?php echo $filas->anun_nombreCreador; ?> </th>
        
        <td>  <button onclick="EditarAnuncio(<?php echo $grupal; ?>)"> Editar   </button>    </td>
        <td>  <button onclick="BorrarAnuncio(<?php echo $filas->anu_id;?>);"> Eliminar </button>    </td>   
      </tr>
     <?php endforeach; ?>
  </tbody>
  <!-- pie de la tabla-->
  <tfoot>
  </tfoot>
</table>
