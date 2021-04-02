<?php
require_once 'includes.php';
requiresAuthentication();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center my-5">
                <h1 class="my-3">Thanks for considering :)</h1>

                <div class="text-center my-3">
                    <a href="https://www.commitstrip.com/en/2015/05/20/coder-interview/?">
                        <img src="https://www.commitstrip.com/wp-content/uploads/2015/05/Strip-Breaz-650-finalenglish.jpg" alt="Coder Interview" class="img-fluid">
                    </a>
                </div>

                <a href="logout.php" class="btn btn-lg shadow btn-primary">Get out of here!</a>
            </div>
        </div>
    </div>
</body>
</html>