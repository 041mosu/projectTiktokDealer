<?php
     session_start(); 
     include('sever.php');

        if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "Lets Login first";
        header('location: index.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Product</title>
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


    <!---ตกแต่ง---->
    <div class="container">
    <div class="alert alert-dark h3 text-center mb-4 mt-4" role="alert">
  Show Product
</div>
    <a class="btn btn-outline-success" href="fr_product.php" role="button" >Add</a>
    <a class="btn btn-outline-warning " href="index2.php" role="button" >เข้าสู่หน้าเมนูหลัก</a>
        <table class="table table-dark table-striped table-hover mt-4">
        <tbody>
        <tr class="table-active">
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>ประเภทสินค้า</th>
            <th>ราคา</th>
            <th>รายละเอียด</th>
            <th>จำนวน</th>
            <th>รูปภาพ</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <!---ระบบการทำงาน---->
        <?php
        $sql="SELECT * FROM product,type WHERE product.type_id =type.type_id  ";
        $hand = mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($hand)){
     ?>
        <tr>
            <td><?=$row['pro_id']?> </td>
            <td><?=$row['pro_name']?> </td>
            <td><?=$row['type_name']?> </td>
            <td><?=$row['price']?> </td>
            <td><?=$row['datail']?> </td>
            <td><?=$row['amount']?> </td>
            <td><image src="image/<?=$row['image']?>" width="200px" hieght="400px"> </td>
            <td><a class="btn btn-outline-warning" href="edit_product.php?>id=<?=$row['pro_id']?>">Edit</a></td>

            <td><a href="delete_product.php?id=<?php echo $row['pro_id']; ?>" class="btn btn-outline-danger" onclick="Del(this.href);return false;">Delete</a></td>
        </tr>
            <?php
            }
            mysqli_close($conn);
            ?>
            <tbody>
        </table>
    </div>



<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
</body>
</html>


<!---Alert box---->
<script language="Javascript">
    function Del(mypage){
        var agree=confirm("คุณต้องการลบข้อมูลหรือไม่")
        if(agree){
            window.location=mypage;
        }
    }
</script>