<?php
    include 'condb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


    <!---ตกแต่ง---->

<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <div class="alert alert-info h3 text-center mb-4 mt-4" role="alert">
  ADD Product
</div>

        <form name="form1" method="post" action="insert_product.php" enctype="multipart/form-data">


        <label>ชื่อสินค้า: </label>
        <input type="text" name="pname" class="form-control" placeholder="ชื่อสินค้า" require> <br>
        

        <label>ประเภทสินค้า: </label>
        <select class="form-select" name="typeID">
            <br>


            <!---ระบบDrop downตัวเลือก---->
        <?php 
        $sql="SELECT * FROM type ORDER BY type_name";
        $hand=mysqli_query($conn, $sql);
        while($row=mysqli_fetch_array($hand)){  
        ?>
        <option value="<?=$row['type_id']?>"><?=$row['type_name']?></option>
            <?php
            }
            mysqli_close($conn);
            ?>
        <!---ระบบDrop downตัวเลือก---->



        <!---ตกแต่ง---->
        </select>
        <br>
        <label>ราคา: </label>
        <input type="number" name="price" class="form-control" placeholder="ราคา" require> <br>
        
        <label>จำนวน: </label>
        <input type="text" name="num" class="form-control" placeholder="จำนวน" require> <br>
        <br>
        <label>รูปภาพ: </label>
        <input type="file" name="file1"  require> <br>
        <br>

        <button type="submit" class="btn btn-outline-success">submit</button>
        
    
        <a class="btn btn-outline-danger" href="show_product.php" role="button">Cancel</a>

       
        </form>
        </div>
    </div>
            
</div>
<!---ตกแต่ง---->


 <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
</body>
</html>