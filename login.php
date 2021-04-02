<?php
require_once 'includes.php';

$loginFailed = false;

if (array_key_exists('submit', $_POST)) {
    if (authenticate($_POST['username'], $_POST['password'])) {
        redirect('private.php');
    }
    $loginFailed = true;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Kiddocare</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
                <?php if ($loginFailed) { ?>
                <div class="alert alert-danger">
                    Login failed. Please try again.
                </div>
                <?php } ?>
                
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Login with your username and password.</h5>
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <button name="submit" type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>