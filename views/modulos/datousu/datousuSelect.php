<h1>DATOS DE TIPO DE DATOS USUARIO:</h1>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th> FOTO </th>
            <th> USUARIO </th>
            <th> CONTRASEÑA </th>
            <th> TIPO USUARIO </th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($this->datousu->Select() as $filas): ?>
        <?php $grupal="'".$filas->usu_id."','".$filas->usu_fot."','".$filas->usu_usuari."','".$filas->usu_passwd."','".$filas->nombre."'" ?>

        <tr>
            <th><?php echo $filas->usu_id; ?> </th>
            <th> <?php echo $filas->usu_fot; ?></th>
            <th><?php echo $filas->usu_usuari; ?> </th>
            <th><?php echo $filas->usu_passwd; ?> </th>
            <th><?php echo $filas->nombre; ?> </th>
            
              <?php $group = "'".$filas->usu_id."','".$filas->usu_fot."'";?>    
                <td><button onclick="BorrarArchivo(<?php echo $group;?>);">Eliminar</button></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
    </tfoot>
</table>