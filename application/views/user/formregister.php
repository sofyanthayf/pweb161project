<div class="row">

    <div class="col-lg-6">

        <form role="form" action="<?= base_url()?>user/register" method="post">

            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Username" name="user" id="user" required="required">
            </div>
            <p id="warning_user_name"></p>

            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Nama Anda" name="nama">
            </div>

            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Email Anda" name="email" id="email" required="required">
            </div>
            <p id="warningemail"></p>

            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="pass1">
            </div>

            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-check"></i></span>
                <input type="password" class="form-control" placeholder="Verifikasi Password" name="pass2">
            </div>

            <input type="submit" class="btn btn-default" value="Register, pleeease....">
        </form>
    </div>

</div>
<br />
