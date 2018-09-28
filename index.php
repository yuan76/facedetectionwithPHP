<?php 
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Face Recognition | Yuanita</title>
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <link href="assets/metisMenu.min.css" rel="stylesheet">
	<link href="assets/sb-admin-2.css" rel="stylesheet">
	<link href="assets/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="image/logo.png">    
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Face Detection</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="proses.php" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="gambar" type="file">
                                </div>
                                <button type="submit" class="btn btn-warning btn-block">Detect Face</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
