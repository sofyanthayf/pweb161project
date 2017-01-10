<div class="row">

    <div class="col-lg-6">

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
