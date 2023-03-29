<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Droame</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573"> 
    Customer Data
    </nav>

   <div class="container">
    <?php
    if(isset($GET['msg'])){
        $msg=$_GET['msg'];
        echo '<div class="alert alert-warning alert-dismissible fade show" 
        role="alert">
        // '.$msg.'
        '."New record created successfully".'

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>


    <a href="add_new.php" class="btn btn-dark mb-3"> Add New</a>

    <table class="table table-hover text-center">
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Age</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>


<?php
include "connect.php";

   $sql = "SELECT * FROM `customer`";
   $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($result)){
?>
            <tr>
                 <td>  <?php echo $row['id'] ?>    </td>
                 <td>  <?php echo $row['fname'] ?> </td>
                 <td>  <?php echo $row['email'] ?> </td>
                 <td>  <?php echo $row['phone'] ?> </td>
                 <td>  <?php echo $row['age'] ?>   </td>
            
                 <td>
                   <a href="edit.php?id=<?php echo $row['id'] ?>"
                    class="link-dark">
                        <i class="fa-solid fa-pen-to-square fs-5 me-3"></i> 
                   </a>

                   <a href="delete.php?id=<?php echo $row['id'] ?>"
                    class="link-dark">
                         <i class="fa-sharp fa-solid fa-trash fs-5"></i>  
                   </a>
                 </td>
        
        
            </tr>
        <?php

   }

?>




    
  </tbody>
</table>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/185ef37378.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>  
</body>
</html> 


