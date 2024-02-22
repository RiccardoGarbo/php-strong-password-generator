
<?php 
include __DIR__ . '/function.php';
session_start();
$password = $generate_password($pass_length);
$_SESSION['password'] = $password;
if(strlen($password)>0)header('Location: password.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
    <title>Document</title>
</head>
<body class="container flex-column d-flex justify-content-center align-items-center vh-100">
  <h1>Generatore di password:</h1>
<form class="bg-success">
  <div class="mb-3">
    <label class="form-label">Inserisci il numero di caratteri che deve avere la tua password:</label>
    <input type="number" class="form-control" name="pass_length" min="1" max="9" >
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 

    
</body>
</html>