<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/starterkit/resource/php/class/core/init.php';
isLogin();
$view = new view;
$user = new user();
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Registrar Portal</title>
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
   <link href="vendor/css/all.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css"  href="resource/css/styles.css">
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">

 </head>
 <body>
         <nav class="navbar navbar-dark bg-white shadow-sm slide-in-left">
           <a class="navbar-brand" href="https://malolos.ceu.edu.ph/">
             <img src="resource/img/logo.jpg" height="70" class="d-inline-block align-top"
               alt="mdb logo"><h3 class="ib">
           </a>
           <a href="stats.php"><i class="fas fa-chart-line ceucolor"></i></a>
              <a href="userVerification.php"><i class="fas fa-user-plus ceucolor"></i></a>
              <a href="verification.php"><i class="fas fa-user-graduate ceucolor"></i></a>
              <a href="ntransaction.php"><i class="fas fa-file-upload ceucolor"></i></a>
              <a href="pending.php"><i class="fas fa-home ceucolor"></i></a>
              <a href="https:/www.facebook.com/theCEUofficial/"><i class="fab fa-facebook-f ceucolor"></i></a>
              <a href="https://www.instagram.com/ceuofficial/"><i class="fab fa-instagram ceucolor"></i></a>
              <a href="https://twitter.com/ceumalolos"><i class="fab fa-twitter ceucolor"></i></a>
         </nav>

         <div class="container mt-5  pt-5 puff-in-center">
             <div class="row">
                 <div class="col-12">
                   <?php changeP(); ?>
                     <h1 class="text-center">Change Password</h1>
                 </div>
            </div>
            <form action="" method="post">
                <table class="table ">
                    <tr>
                        <td>
                            <div class="row justify-content-center">
                                <div class="form-group col-4">
                                 <label for = "password_current"> Enter Current Password:</label>
                                 <input type="password" class="form-control" name="password_current" id="password" value ="" autocomplete="off"required/>
                                </div>
                                <div class="form-group col-4">
                                 <label for = "password"> Enter New Password:</label>
                                 <input type="password" class="form-control" name="password" id="password" value ="" autocomplete="off"required/>
                                </div>
                                <div class="form-group col-4">
                                 <label for = "ConfirmPassword"> Confirm New Password:</label>
                                 <input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" value ="" autocomplete="off"required/>
                                </div>
                             </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row justify-content-center">
                                <div class="form-group col-7">
                                    <label  >&nbsp;</label>
                                <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />
                                 <input type="submit" value="Change password" class=" form-control btn btn-primary" />
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
             </form>
         </div>
 </body>
 <footer id="sticky-footer" class="py-4 bg-dark text-white-50 fixed-bottom  slide-in-right">
   <div class="container text-center">
       <div class="row">
           <div class="col col-sm-5 text-left">
               <small>Copyright &copy;Centro Escolar University     Office of the Registrar 2019</small>
           </div>
           <div class="col text-right">
               <small>Created by: Reymart Bolasoc, Amelia Valencia , James Mangalile, Kenneth De Leon , Pamela Reyes , Ellen Mijares</small>
           </div>
       </div>
   </div>
 </footer>
     <script src="vendor/js/jquery.js"></script>
     <script src="vendor/js/popper.js"></script>
     <script src="vendor/js/bootstrap.min.js"></script>
     <script src="vendor/js/bootstrap-select.min.js"></script>
 </body>
 </html>
