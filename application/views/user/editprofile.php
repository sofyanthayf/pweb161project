<div class="row">

    <div class="col-lg-6">
        <form role="form" action="<?= base_url()?>user/update" method="post" enctype="multipart/form-data">
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?= $user['namalengkap']?>" required="required">
            </div>
            <p id="warning_user_name"></p>

            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="file" class="form-control" placeholder="Load Foto" name="foto">
            </div>
            <input type="submit" class="btn btn-default" value="Update">
        </form>
<?php
    $ff = './assets/foto/'.$_SESSION['username'].'.jpg';
    if( file_exists( $ff ) ) {
?>
        <img src="<?= base_url()?>assets/foto/<?=$_SESSION['username']?>.jpg" />
<?php
    }
?>
    </div>
</div>
