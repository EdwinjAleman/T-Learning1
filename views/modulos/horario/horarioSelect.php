 <h1>DATOS DE horario:</h1>
 <table>
     <thead>
         <tr>

             <th>nombre </th>
             <th>descripcion </th>
             <th>fecha de inicio </th>
             <th>fecha fin </th>


         </tr>
     </thead>

     <tbody>
         <?php foreach ($this->horario->Select() as $filas): ?>
         <?php $grupal="'".$filas->eve_id."','".$filas->eve_nombr."','".$filas->eve_descrpcn."','".$filas->eve_fech_inc."','".$filas->eve_fech_fn."'" ?>

         <tr>

             <th><?php echo $filas->eve_nombr; ?> </th>
             <th><?php echo $filas->eve_descrpcn; ?> </th>
             <th><?php echo $filas->eve_fech_inc; ?> </th>
             <th><?php echo $filas->eve_fech_fn; ?> </th>

             <th> <button onclick="Editar(<?php echo $grupal;?>);"> Editar </button></th>
             <th> <button onclick="Borrar(<?php echo $grupal;?>);"> Borrar </button></th>
         </tr>
         <?php endforeach; ?>
     </tbody>
 </table>