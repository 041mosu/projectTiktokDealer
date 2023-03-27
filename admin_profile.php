<?php 
   
    session_start(); 
     include('sever.php');

        if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "Lets Login first";
        header('location: index.php');
    }
    

  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Welcome Admin!!!!</title>
    <link rel="stylesheet" href="welcomepage.css?v=9999">
</head>
<body>
    <div class="container col-sm-12 mt-5  border">
        <br>
    <div class="alert alert-primary h4" role="alert">
  Welcome Admin!!!!
</div>
<h3>Hi, <?php echo $_SESSION['user']; ?>  ขอให้มีความสุขกับการใช้งานเว็บไซต์ของเรา</h3>
<br>
    <a class="btn btn-primary" href="index2.php">เข้าสู่หน้าเมนูหลัก</a>   หรือ    
    <a class="btn btn-primary" href="show_product.php">เข้าสู่หน้าสำหรับAdmin</a>
    <br>
    <br>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>