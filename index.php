<?php
session_start();
if(!isset($_SESSION['captcha'])){

    $n = rand(1000,9999);
    $_SESSION['captcha'] = $n;

}


if(!empty($_POST['captcha'])){
    $c = $_POST['captcha'];

    if($c == $_SESSION['captcha']){
        echo "<script>alert('OK!');</script>";
    } else{
        echo "<script>alert('WRONG!');</script>";
    }
    $n = rand(1000,9999);
    $_SESSION['captcha'] = $n;
}

?>





<!-- Layout -->
<html>
    <head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>

    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>

    </head>

    <body>
        <div class="container">
        <div class="row" style="display: flex; padding-top: 15%;">
        <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card card-signin flex-row my-5">
            <div class="card-img-left d-none d-md-flex">
                <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body">
                <h5 class="card-title text-center">Login</h5>
                <form class="form-signin" method="POST">

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="username"required>
                    <br/>
                </div>
                
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="senha" required>
                </div>

                <div class="form-group">
                    <img src="pic.php" class= "mx-auto d-block" style=" margin: 7px;"witdh="100" height="65"/>

                    <input type="text" class="form-control" placeholder="Captcha" name="captcha" required>
                    <br/>
                </div>



                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
    
    </body>

</html>