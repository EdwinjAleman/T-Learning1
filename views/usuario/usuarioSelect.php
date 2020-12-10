<table id="tblusuario" class="table table-striped table-bordered">

    <thead>
        <tr>
            <th>#</th>
            <th>USUARIO</th>

            <th>FICHA</th>
            <th>PERSONA</th>
            <th>TIPO USUARIO</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>
        </tr>
    </thead>

    <tbody id="tbody">

        <?php foreach($this->usuario->Select() as $value) { 	
					$conjunto="".$value->usu_id."','".$value->usu_usuari."','".$value->usu_passwd."','".$value->usu_ficid."','".$value->usu_perid."','".$value->tipo_usuario_id."";
				?>

        <tr>
            <td> <?php echo $value->usu_id; 		?> </td>
            <td> <?php echo $value->usu_usuari; 	?> </td>

            <td> <?php echo $value->usu_ficid; 		?> </td>
            <td> <?php echo $value->usu_perid; 		?> </td>
            <td> <?php echo $value->tipo_usuario_id;?> </td>
            <td> <button type="button" class="btn btn-warning ToggleOpti" id="edit" data-toggle="modal"
                    data-target="#modaledit" value="<?php echo $conjunto; ?>"> Editar </button> </td>
            <td> <button type="button" class="btn btn-danger ToggleOpti" id="delete"
                    value="<?php echo $value->usu_id; ?>">Eliminar </button> </td>
        </tr>

        <?php } ?>

    </tbody>
</table>