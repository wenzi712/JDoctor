<h2 class="sub-header">Tambah Data Admin</h2>
<form class="form-horizontal" role="form" method="post" action="?ur=tambah_admin__">
  <?php
  $dispLabel = array("Username",
                    "Password", 
                    "Nama Lengkap", 
                    "Tipe"
                    );

	$nameLabel = array("user",
                "passw", 
                "nama", 
                "tipe"
                );

	$jLabel = count($nameLabel);
	for($nLabel=0; $nLabel<$jLabel; $nLabel++){
    if($nLabel == 3){      
?>

  <div class="form-group">
    <label class="col-sm-2 control-label"><?php echo $dispLabel[$nLabel]; ?> :</label>
    <div class="col-sm-10">
      <select class="form-control" required name="<?php echo $nameLabel[$nLabel]; ?>">
        <option value="dokter">Dokter</option>
        <option value="super">Super Admin</option>
        <option value="apoteker">Apoteker</option>
        <option value="resepsionis">Resepsionis</option>
      </select>
    </div>
  </div>

  <?php 
    } //  tutup if 3
    elseif($nLabel==1) {

  ?>

    <div class="form-group">
      <label class="col-sm-2 control-label"><?php echo $dispLabel[$nLabel]; ?> :</label>
      <div class="col-sm-10">
        <input required type="password" class="form-control" name="<?php echo $nameLabel[$nLabel]; ?>">
      </div>
    </div>

  <?php 
    } //  tutup elseif 
    else {

  ?>

    <div class="form-group">
      <label class="col-sm-2 control-label"><?php echo $dispLabel[$nLabel]; ?> :</label>
      <div class="col-sm-10">
        <input required type="text" class="form-control" name="<?php echo $nameLabel[$nLabel]; ?>">
      </div>
    </div>

  <?php
    } // tutup else
	} // END For {label}
  ?>  
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Simpan Data</button>
	     <a href="#" onclick="history.back()"  class="btn btn-default">Batal</a>
    </div>
  </div>

</form>

<script type="text/javascript">
  $("document").ready(function(){
    $("#side-overview").removeClass("active");
    $("#side-tambah").addClass("active");
  });
</script>