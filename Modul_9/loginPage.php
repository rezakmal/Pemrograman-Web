<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDI KASUS</title>
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!--latest compiled JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<style>
  body {
    background-image:url(https://assets.nflxext.com/ffe/siteui/vlv3/2e884ce2-da1c-4501-ab9a-10c534d30975/ee5c836d-3a48-48cd-9896-2d14c0acc31c/ID-en-20230327-popsignuptwoweeks-perspective_alpha_website_large.jpg);
    background-color: rgba(0, 0, 0, 0.75);
    margin: auto;
    width: auto;
    min-height: 100vh;
    background-position: center;
    background-size: cover;
    color: white;
  }

  .login{
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.5);
  }

  .login-content {
    padding: 20px 70px;
    width: 35%;
    height: 60%;
    margin: auto;
    background-color: rgba(0, 0, 0, 0.75);
    border-radius: 5px;
  }

  .form-group .col-sm-12 .form-control {
    height: 50px;
    background-color: #333;
    border: none;
  }

  .form-group .btn-default {
    height: 50px;
    margin-top: 25px;
    width: 100%;
    color: white;
    background-color: red;
    border: none;
  }
</style>

<script>
  function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Masukkan username dan password");
    return false;
  }
}
</script>

<div class="login">
  <div class="login-content" style="color: white;">
    <h2>Sign In </h2>
    <form class="form-horizontal" name="myForm"
    action=" <?php $_SERVER['PHP_SELF'];?>"
    onsubmit="return validateForm()" method="post">
      <div class="form-group">
        <div class="col-sm-offset-0 col-sm-12">
          <input type="text" class="form-control" id="inputUsername" placeholder="Username" name="fname">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-0 col-sm-12">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-0 col-sm-12">
          <button type="submit" class="btn btn-default">Sign in</button>
        </div>
      </div>
      <?php
      if (isset($_POST['fname'])) {
        echo 'Selamat datang, ' . $_POST['fname'];
      } else {
        echo 'Anda gagal login';
      }
      ?>
    </form>
  </div>
</div>
</body>
</html>