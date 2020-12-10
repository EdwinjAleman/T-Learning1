<h1>DATOS DE TIPO DE DATOS USUARIO:</h1>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th> FOTO </th>
            <th> USUARIO </th>

            <th> TIPO USUARIO </th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($this->datousu->Select() as $filas): ?>
        <?php $grupal="'".$filas->usu_id."','".$filas->usu_fot."','".$filas->usu_usuari."','".$filas->usu_passwd."','".$filas->nombre."'" ?>

        <tr>
            <th><?php echo $filas->usu_id; ?> </th>
            <th> <img src="<?php echo $filas->usu_fot; ?>" width="100" height="100"></th>
            <th><?php echo $filas->usu_usuari; ?> </th>

            <th><?php echo $filas->nombre; ?> </th>
<<<<<<< HEAD
            
              <?php $group = "'".$filas->usu_id."','".$filas->usu_fot."'";?>    
                <td><button onclick="BorrarArchivo(<?php echo $group;?>);">Eliminar</button></td>
=======

            <?php $group = "'".$filas->usu_id."','".$filas->usu_fot."'";?>
            <td><button onclick="BorrarArchivo(<?php echo $group;?>);">Eliminar</button></td>
>>>>>>> 557e487f4a6b1fae008766737e32cd408e53f2a9
        </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
    </tfoot>
</table>