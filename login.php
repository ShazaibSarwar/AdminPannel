   <?php
    $message = '';
    if (isset($_POST["submit"])) {

        include_once 'database.php';

        $database = new Database();
        $db = $database->getConnection();

        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $email  = htmlspecialchars(strip_tags($email));

        $query = "SELECT * FROM `admin` WHERE email = '" . $email . "' AND password = '" . $pass . "';";
        $result =  mysqli_query($db, $query);

        //$result = $db->query($query);

        // echo $result->num_rows;
        // die();

        if ($result > 0) {
            header('Location: index.php');
            exit();
        } else {
            $message = "Email or Password is inncorrect";
        }
    }



    ?>
   <!DOCTYPE html>
   <html lang="en">

   <!-- <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>


</head> -->
   <!-- Head -->
   <?php
    include_once 'include/head.php'

    ?>

   <body class="hold-transition login-page">
       <div class="login-box">
           <!-- /.login-logo -->
           <div class="card card-outline card-primary">
               <div class="card-header text-center">
                   <a href="#" class="h1"><b>Login</b></a>
               </div>
               <div class="card-body">
                   <p class="login-box-msg">Sign in to start your session</p>

                   <form action="login.php" method="post">
                       <div class="input-group mb-3">
                           <input type="email" name="email" class="form-control" placeholder="Email">
                           <div class="input-group-append">
                               <div class="input-group-text">
                                   <span class="fas fa-envelope"></span>
                               </div>
                           </div>
                       </div>
                       <div class="input-group mb-3">
                           <input type="password" name="pass" class="form-control" placeholder="Password">
                           <div class="input-group-append">
                               <div class="input-group-text">
                                   <span class="fas fa-lock"></span>
                               </div>
                           </div>
                       </div>

                       <?php
                        echo $message;

                        ?>
                       <div class="row">

                           <!-- /.col -->
                           <div class="col-12">
                               <button type="submit" name="submit" class="btn btn-primary btn-block float-right">Sign
                                   In</button>
                           </div>
                           <!-- /.col -->
                       </div>
                   </form>

                   <div class="social-auth-links text-center mt-2 mb-3">
                       <!-- <a type="submit" href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a> -->

                   </div>
                   <!-- /.social-auth-links -->

                   <p class="mb-1">
                       <a href="forgot-password.php">I forgot my password</a>
                   </p>

               </div>
               <!-- /.card-body -->
           </div>
           <!-- /.card -->
       </div>
       <!-- /.login-box -->



       <!-- jQuery -->
       <script src="plugins/jquery/jquery.min.js"></script>
       <!-- Bootstrap 4 -->
       <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
       <!-- AdminLTE App -->
       <script src="dist/js/adminlte.min.js"></script>
   </body>

   </html>