<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Login Page - Admin Beasiswa
    </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script></script>
</head>

<body>
    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center m-b-md custom-login">
                <h3>Login</h3>
            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="libs/check_login.php" id="loginForm" method="POST">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="username" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" placeholder="password" name="password" class="form-control">
                            </div>
                            <button class="btn btn-success btn-block loginbtn">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="text-center login-footer">
                <p>Copyright © 2019. Pandji Saeful - Teknik Informatika 2015</p>
            </div>
        </div>
    </div>
</body>

</html>