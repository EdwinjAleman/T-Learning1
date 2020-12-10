<?php 
foreach ($this->agenda->Select() as $filas): ?>
<?php $grupal="'".$filas->per_id."','".$filas->per_nombr."','".$filas->per_aplld."','".$filas->per_cedl."','".$filas->per_dirccn."','".$filas->per_corr."','".$filas->per_telfn."','".$filas->per_areid."'" ?>

<?php echo $filas->usu_fot; ?><br>
<?php echo $filas->per_nombr; ?><br>
<?php echo $filas->per_aplld; ?><br>
<?php echo $filas->per_corr; ?><br>
<?php echo $filas->per_telfn; ?><br>

<?php endforeach; ?>