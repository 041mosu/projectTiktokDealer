<?php
    include 'condb.php';
    
    $p_name = $_POST['pname'];
    $type_id = $_POST['typeID'];
    $price = $_POST['price'];
    $num = $_POST['num'];
    $detail = $_POST['datail'];

    //อัพโหลดรูปภาพ
 if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
    $new_image_name = 'pro_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "./image/".$new_image_name;
    move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
    } else {
    $new_image_name = "";
    }

    //เพิ่มข้อมูลในตาราง
    $sql="INSERT INTO product(pro_name,type_id,price,amount,image) 
    VALUES('$p_name','$type_id','$price','$num','$new_image_name')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script> alert('save complete!!'); </script>";
        echo "<script> window.location='show_product.php'; </script>";
    }else{
        echo "<script> alert('unsuccessful!!); </script>";
    }
?>