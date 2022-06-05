<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecole projet</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme6.css">
    <link rel="stylesheet" type="text/css" href="css/editor.css">

</head>
<body>
    <div class="form-body" class="container-fluid">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="images/graphic2.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h1 class="ib1 Gtitle">Studi.</h1>
                        <h3>La grande école.</h3>
                        <h4 class="styling">100% en ligne  100% humaine</h4>
                        <div class="page-links">
                            <a href="login6.php">SIGN IN</a><a href="register6.php" class="active">SIGN UP</a>
                        </div>
                        <form action="signup.php" method="post">
                            <input class="form-control" type="text" name="nom" id="nom" placeholder="Full Name" required>
                            <input class="form-control" type="email" name="email" id="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class=" ib1 ibtn">Inscription</button>
                            </div>
                        </form>
                        <div class="other-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-google"></i></a><a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script>
    function inscrire(){
        // using AJAX
        // const email = document.getElementById('nom').value;
        // const nom = document.getElementById('email').value;
        // const password = document.getElementById('password').value;
        // const data = {nom,email,password};
        // //alert(nom + email + password);
        // $(document).ready(function(){
        // // alert(email);
        // $.ajax({
        //     url: "signup.php",
        //     type: "POST",
        //     data: data,
        //     cache: false,
        //     success: function(res){
        //     alert(res);                                            
        //   }
        // });
        // })
        }
</script>
</body>
</html>