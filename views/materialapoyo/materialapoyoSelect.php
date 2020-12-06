<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Descripcion</th>
            <th>Archivo</th>
            <th>Fase</th>
            <th>Usuario</th>


            <th>eliminar</th>
            <th>Descargar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($this->material->Select() as $filas): ?>

        <?php $grupal = "'".$filas->map_id."','".$filas->map_titulo."','".$filas->map_fecpub."','".$filas->map_descrp."','".$filas->map_archurl."','".$filas->map_fass_id."','".$filas->map_usr_id."'" ?>

        <tr>
            <td><?php echo $filas->map_id; ?></td>
            <td><?php echo $filas->map_titulo; ?></td>
            <td><?php echo $filas->map_fecpub; ?></td>
            <td><?php echo $filas->map_descrp; ?></td>
            <td><?php echo $filas->map_archurl; ?></td>
            <td><?php echo $filas->map_fass_id; ?></td>
            <td><?php echo $filas->map_usr_id; ?></td>

            <?php $group = "'".$filas->map_id."','".$filas->map_archurl."'";?>
            <td><button onclick="BorrarArchivo(<?php echo $group;?>);">Eliminar</button></td>

            <td><a title="Descargar" href="../assets/images/adjuntos/<?php echo $filas->map_archurl;?>"
                    download="<?php echo $filas->map_archurl;?>"> Descargar <span class="glyphicon glyphicon-download-alt"
                        aria-hidden="true"></span> </a></td>
        </tr>



        <?php endforeach;?>
    </tbody>

</table>