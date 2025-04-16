<div class="login-box" style="position: absolute; top: 50px; right: 20px; width: 225px; border-radius: 10px; overflow: hidden;">
    <div class="login-box-body">
        <p class="login-box-msg">SSAO Officers Log In</p>

        <form action="login/run" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="username" required placeholder="Username">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" required placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <?php if(isset($_GET['hasError'])): ?>
                <p class="alert alert-danger">Login Error!</p>
            <?php endif; ?>
        </div>
        <!-- /.social-auth-links -->
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<div class="login-box" style="position: absolute; top: 300px; right: 20px; width: 225px; border-radius: 10px; overflow: hidden;">
    <div class="login-box-body">
        <p class="login-box-msg">Student Log In</p>

        <form action="login/run" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="username" required placeholder="Username">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" required placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <?php if(isset($_GET['hasError'])): ?>
                <p class="alert alert-danger">Login Error!</p>
            <?php endif; ?>
        </div>
        <!-- /.social-auth-links -->
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->