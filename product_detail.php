<?php  include('condb.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Details</title>
    
</head>
<body>

<center>
  <div class="card text-center mt-3 p-2" style="width: 50rem;">
    <?php 
        $ids=$_GET['id'];
        $sql = "SELECT * FROM product, type WHERE product.type_id = type.type_id and product.pro_id='$ids' ";
        $result = mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);
    ?>
    <img src="image/<?=$row['image']?>"width="350px" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> <?=$row['pro_name']?></h5>
      <b class="text-danger"> ID:<?=$row['pro_id']?>
      Price <b class="text-success"> <?=$row['price']?> </b>Baht <br>
      รายละเอียด : <?=$row['datail']?><br>
        <a href="cart.php" class="btn btn-primary">Add to cart</a>
        <a href="product.php" class="btn btn-danger">Cancel</a>
        
    </div>
  </div>
  <?php mysqli_close($conn);?>
</center>
</body>
</html>