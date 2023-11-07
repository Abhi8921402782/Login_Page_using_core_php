<?php
    require_once('db_connection.php');
    $message="";
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password=$_POST['password'];
        

        $insert_query = pg_query($connection, "INSERT INTO ui_reg(name,phone,address,email,password) VALUES ('$name','$phone','$address','$email','$password')");
        if($insert_query){
            $message = "User registered successfuly";
        }
        else{
            $message = "Error";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registration</title>
</head>
<body>
    <div class="container">
        <!-- Form -->
        <div class="container-fluid" style="margin-top:50px;">
            <form action="" method="post">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Enter Your Name">
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" name="phone" placeholder="Phone Number">
                    <label for="floatingPassword">Phone Number</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" name="address" placeholder="Address">
                    <label for="floatingPassword">Address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingPassword" name="email" placeholder="Email">
                    <label for="floatingPassword">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating mb-3">
                    <center><button type="submit" value="submit" name="submit" style="border-radius:10px; background-color:transparent; color:#008080">Sign-Up</button></center>
                </div>
                
            </form>    
        </div>
    </div>
    <?php
        echo $message;
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>