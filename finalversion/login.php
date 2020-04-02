<?php
include('config/app.php');
$appinst = new App();
if (isset($_POST['user_name']) && isset($_POST['password'])) {
    $appinst->Login($_POST['user_name'], $_POST['password']);
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <title>Final Project</title>

        <!-- Bootstrap core CSS -->
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="public/css/style.css" rel="stylesheet">
        <link href="public/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="login-body">
        <div class="container">
            <form class="form-signin" method="post" action="login.php">
                <h2 class="form-signin-heading">sign in now</h2>
                <div class="login-wrap">
                    <input type="text" name="user_name" class="form-control" placeholder="User ID" autofocus>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>

                </div>
            </form>

        </div>
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="public/js/jquery.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
    </body>
</html>
