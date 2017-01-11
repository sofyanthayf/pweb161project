<div class="row">

    <div class="col-lg-6">
        <?php
        switch( $status ){
            case 1:
            echo "<div class='alert alert-danger' role='alert'>
            <span class='fa fa-exclamation-triangle fa-2x' aria-hidden='true'></span>
            Sign-in Gagal:
            Username tidak dikenali atau salah tulis
            </div>";
            break;
            case 2:
            echo "<div class='alert alert-danger' role='alert'>
            <span class='fa fa-exclamation-triangle fa-2x' aria-hidden='true'></span>
            Sign-in Gagal: Password tidak sesuai
            </div>";
            break;
        }
        ?>

        <form role="form" action="<?= base_url()?>user/dologin" method="post">

            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Username" name="user" required="required">
            </div>
            <p id="warning_user_name"></p>

            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="pass">
            </div>


            <input type="submit" class="btn btn-default" value="Login">
        </form>
    </div>

</div>
<br />
