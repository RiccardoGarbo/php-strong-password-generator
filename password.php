<?php session_start() ?>
<?php var_dump($_SESSION['password'])?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
    <title>Document</title>
</head>
<body class="container d-flex justify-content-center align-items-center vh-100 flex-column">
    <h1>la tua password è: <?= $_SESSION['password'] ?></h1>
    <a href="index.php">Torna indietro</a> 
</body>
</html>