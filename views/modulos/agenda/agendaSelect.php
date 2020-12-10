<!-- <?php echo $filas->usu_fot; ?><br>
<?php echo $filas->per_nombr; ?><br>
<?php echo $filas->per_aplld; ?><br>
<?php echo $filas->per_corr; ?><br>
<?php echo $filas->per_telfn; ?><br>
 -->

<?php foreach ($this->agenda->Select() as $filas): ?>
<?php $grupal="'".$filas->per_id."','".$filas->per_nombr."','".$filas->per_aplld."','".$filas->per_cedl."','".$filas->per_dirccn."','".$filas->per_corr."','".$filas->per_telfn."','".$filas->per_areid."'" ?>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Agenda De personas </h5>
    <h6 class="card-subtitle mb-2 text-muted">Informacion</h6>
    <p class="card-text"><?php echo $filas->per_nombr; ?> <?php echo $filas->per_aplld; ?></p>
    <a href="#" class="card-link"><?php echo $filas->per_corr; ?><br></a>
    <a href="#" class="card-link"><?php echo $filas->per_telfn; ?></a>
  </div>
</div> 

<?php endforeach; ?>
