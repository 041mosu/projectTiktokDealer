<?php 
    session_start();
include('sever.php');
?>

<!doctype html>
<html lang="en">
<head>
  <title>Register Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link href="register.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center">
  <div class="container">
    <div class="row justify-content-center" style="margin:20px;">
      <div class="col-lg-6 col-md-8 login-box">
        <div class="col-lg-12 login-title">
          Sign Up
        </div>


        <div class="col-lg-12 login-form">
          <form action="register_db.php" method="post">
            <?php include('errors.php'); ?>
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
            <div class="form-group">
              <label class="form-control-label">Username</label>
              <input type="text"  class="form-control" name="username">
            </div>
            <div class="form-group">
              <label class="form-control-label">Email</label>
              <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
              <label class="form-control-label">Password</label>
              <input type="password" class="form-control"name="password_1">
            </div>
                <div class="form-group">
                  <label class="form-control-label">Confirm Password</label>
                  <input type="password" class="form-control"name="password_2" i>
                </div>
                <div class="col-12 login-btm login-button justify-content-center d-flex">
                  <button type="submit" name="reg_user" class="btn btn-outline-primary">Register</button>
                </div>
            </div>
            <p>Already a member? <a href="login.php">Sign in</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
      </script>
</body>
</html>
