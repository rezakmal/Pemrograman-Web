<?php
    session_start();
    include("koneksi.php");
    if(isset($_POST['sign-in'])) {
        $user = $_POST['username']; //mengambil username
        $pass = $_POST['password']; //mengambil password
        $query = "SELECT * FROM data_user WHERE username = '$user' AND password = '$pass'";
        $result = mysqli_query($koneksi, $query);
        //membuat session
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['sign-in'] = $user;
            header("location: dashboard.php");
        } else {
            $message = "<span style='color: red; font-size: 11px; text-align: center'>Username atau Password salah!</span>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
        rel="stylesheet"
    />

    <!-- MDB -->
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
    ></script>
</head>

<style>
    .judul {
        margin-bottom: 30px;
        font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: bolder;
    }

    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #d3d3d3;
    }

    .btn-outline-warning {
    box-shadow: 0 4px 4px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    margin-top: 30px;
    font-family: Arial, Helvetica, sans-serif;
    }
</style>

<body>
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
            <div class="judul">
                        <h1>MANAJEMEN DATA BUKU</h1>
                    </div>
                <img src="buku5.svg"
                class="img-fluid" alt="Phone image">
            </div>

            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form action="" method="post">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form1Example13" class="form-control form-control-lg" name="username"/>
                        <label class="form-label" for="form1Example13">Username</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="form1Example23" class="form-control form-control-lg" name="password"/>
                        <label class="form-label" for="form1Example23">Password</label>
                    </div>

                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                        document.querySelectorAll('.form-outline').forEach((formOutline) => {
                        new mdb.Input(formOutline).init();
                        });

                        document.querySelectorAll('.form-outline').forEach((formOutline) => {
                        new mdb.Input(formOutline).update();
                        });
                        });
                    </script>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-lg btn-block" style="background-color: rgb(255, 193, 0);" name="sign-in">Sign in</button>
                    
                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                    </div>
                    <p>Don't have an account? Click the button below.</p>
                    <button type="submit" class="btn btn-lg btn-block" style="background-color: #FFCC00">Sign Up</button>
                    
                </form>
            </div>
        </div>
    </div>
</section>
</body>
</html>