<?php

include "connect.php";
$id=$_GET['id'];
if(isset($_POST['submit'])){
    $fname =$_POST['fname'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $age =$_POST['age'];
    echo $fname;

    //  $sql="INSERT INTO `customer`(`id`, `fname`, `email`, `phone`, `age`) 
    //   VALUES (NULL,'$fname','$email','$phone','$age')";

    $sql="UPDATE `customer` SET `id`='$id',`fname`='$fname',
    `email`='$email',`phone`='$phone',`age`='$age' WHERE id=$id";

    $result=mysqli_query($conn,$sql);

     if($result){
         echo "Inserted";
        header('location:index.php');
    }
    else{
        die(mysqli_error($conn));
    }

}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Droame</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573"> 
    Customer Data
    </nav>

    <?php
    $id= $_GET['id'];
    
    $sql= "SELECT * FROM `customer` WHERE id=$id LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    
    ?>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Edit Customer Details</h3>
        </div>
        <div class="container d-flex justify-content-center">
 <form  method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Name:</label>
    <input type="text"  class="form-control" id="exampleInputEmail1 fname" aria-describedby="emailHelp" name="fname" value="<?php echo $row['fname']?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email:</label>
    <input type="email"  class="form-control" id="exampleInputEmail1 email" aria-describedby="emailHelp" name="email" value="<?php echo $row['email']?>">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone:</label>
    <input type="phone"  class="form-control" id="exampleInputEmail1 phone" aria-describedby="emailHelp" name="phone" value="<?php echo $row['phone']?>">
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Age:</label>
    <input type="text"  class="form-control" id="exampleInputEmail1 age" aria-describedby="emailHelp" name="age" value="<?php echo $row['age']?>">
  </div>
  
  <div>
      <button type="submit" class="btn btn-success" name="submit">Update</button>
      <a href="index.php" class="btn btn-danger">Cancel</a>

  </div>
</form> 






        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>  
</body>
</html> 












 









