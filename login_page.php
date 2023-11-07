<?php
    require_once('db_connection.php');
    $message="";
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $insert=pg_query($connection, "SELECT * FROM ui_reg WHERE email='$email' and password='$password'");
        if(pg_num_rows($insert)>0){
            $arraydata=pg_fetch_array($insert);
            session_start();
            $_SESSION['regn_id']=$arraydata[0];
            header('location:dashboard.php');
        }
        else{
            $message="Login  Failed";
        }
    }
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
    <div class="container">
        <h2>Login Page</h2>
        <div class="container-fluid" style="margin-top:50px">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-3">
                <center><button type="submit" value="submit" name="submit" style="border-radius:10px; background-color:transparent; color:#008080">Login</button></center>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>