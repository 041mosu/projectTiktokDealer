<?php 
    session_start();
    include('sever.php');
    ?>

<!doctype html>
<html lang="en">
<head>
  <title>Login Page</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="login.css?v=9999" rel="stylesheet">
 
</head>
<body>
   <center><h1 class="htest">Tiktok Dealer</h1></center>


  <div class="login-box">
    <h2>Welcome to Tiktok Dealer</h2>
    

    <form action="login_db.php" method="post">
    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <h3>
                <?php 
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
            </h3>
        </div>
        <?php endif ?>
      <div class="user-box">
        <input type="text" name="username" required="">
        <label for="username">Username</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="">
        <label for="password">Password</label>
      </div>
      <div class="col-12 login-btm login-button justify-content-center d-flex">
                  <button type="submit" name="login_user" class="btn btn-outline-primary">Login</button>
                </div>
     
      <a href="register.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Sign up
      </a>
      
    </form>
  </div>
 <marquee class="mtest "  direction="left">ขายช่องtiktok คนไทย ✅🇹🇭 ไลฟ์สด3ระบบ มีโปรโมท มีตะกร้า(Tiktokshop) มีธุรกิจ มีดาว⭐️ ไม่ผ่านการละเมิด สอนทำธุรกิจต่อยอดช่องต่างๆ 🔥 สอนไลฟ์สด สายเทา🔥 สายพระ 🔥 สายค้าขายต่างๆ🔥 รับจัดหาช่องตามงบลูกค้า ไทย-นอกอยากได้ประเทศ สามารถทักเเชทมาสอบถามได้ครับ Line id : aom.mai46 โทรคุยปรึกษาได้</marquee>
</body>
</html>
