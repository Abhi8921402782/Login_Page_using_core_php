<?php
require_once('db_connection.php');
session_start();
if(isset($_SESSION['regn_id'])){
    $id=$_SESSION['regn_id'];

}
else{
    ?>
    <script>
        alert('Please Login');
        window.location="login_page.php";
    </script>
    <?php
}
$regn=pg_query($connection, "SELECT * FROM ui_reg where id='$id'");
$arraydata=pg_fetch_array($regn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dashboard</title>
</head>
<body>
<div class="container">
    <div class="container-fluid">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $arraydata[1]; ?></td>
      <td><?php echo $arraydata[2]; ?></td>
      <td><?php echo $arraydata[3]; ?></td>
      <td><?php echo $arraydata[4]; ?></td>
      <td><?php echo $arraydata[5]; ?></td>
    </tr>
    
  </tbody>
</table>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>