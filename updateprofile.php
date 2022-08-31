<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/starterkit/resource/php/class/core/init.php';
isLogin();
$view = new view;
$user = new user();
updateProfile();
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
   <link rel="stylesheet" type="text/css"  href="resource/css/speech.css">
   <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">

 </head>
 <body>

         <nav class="navbar navbar-dark bg-white shadow-sm slide-in-left">
           <a class="navbar-brand" href="https://malolos.ceu.edu.ph/">
             <img src="resource/img/logo.jpg" height="70" class="d-inline-block align-top"
               alt="mdb logo"><h3 class="ib">
           </a>
           <a href="exportTableAdmin.php"><i class="fas fa-table ceucolor"></i></a>
           <a href="statsAdmin.php"><i class="fas fa-chart-line ceucolor"></i></a>
           <a href="userVerificationAdmin.php"><i class="fas fa-user-plus ceucolor"></i></a>
           <a href="verificationAdmin.php"><i class="fas fa-user-graduate ceucolor"></i></a>
           <a href="viewAlumniAdmin.php"><i class="fa fa-graduation-cap ceucolor"></i></a>
           <a href="nTransactionAdmin.php"><i class="fas fa-file-upload ceucolor"></i></a>
           <a href="view_pending_requests.php"><i class="fas fa-home ceucolor"></i></a>
              <a href="https:/www.facebook.com/theCEUofficial/"><i class="fab fa-facebook-f ceucolor"></i></a>
              <a href="https://www.instagram.com/ceuofficial/"><i class="fab fa-instagram ceucolor"></i></a>
              <a href="https://twitter.com/ceumalolos"><i class="fab fa-twitter ceucolor"></i></a>
         </nav>

         <div class="container mt-5  pt-5 puff-in-center">
             <div class="row">
                 <div class="col-12">
                     <h1 class="text-center">Update your Information</h1>
                 </div>
            </div>
            <form action="" method="post">
                <table class="table ">
                    <tr>
                        <td>
                            <div class="row justify-content-center">
                                <div class="form-group col-4">
                                 <label for = "username" class=""> Username:</label>
                                 <input class="form-control"  type = "text" name="username" id="username" value ="<?php echo escape($user->data()->username); ?>" autocomplete="off"  />
                                </div>
                                <div class="form-group col-4">
                                 <label for = "fullName" class=""> Full Name</label>
                                 <input class="form-control"  type = "text" name="fullName" id="fullName" value ="<?php echo escape($user->data()->name); ?>"/required>
                                </div>
                                <div class="form-group col-4">
                                 <label for = "email" class=""> Email Address</label>
                                 <input class="form-control"  type = "text" name="email" id="email" value ="<?php echo escape($user->data()->email); ?>"/required>
                                </div>
                             </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="row justify-content-center">
                                <div class="form-group col-5">
                                  <label for="College" >College/s to handle</label>
                                      <select id="College" name="College[]" class="selectpicker form-control" data-live-search="true" multiple required>
                                        <?php $view->collegeSP2();?>
                                      </select>
                                </div>
                                <div class="form-group col-5">
                                    <label  >&nbsp;</label>
                                <input type="hidden" name ="Token" value="<?php echo Token::generate();?>" />
                                 <input type="submit" value="Update your profile" class=" form-control btn btn-primary" />
                                </div>
                             </div>
                        </td>
                    </tr>
                </table>
             </form>
             <form action="updatepropic.php" method="post" enctype="multipart/form-data">
                 <table class="table">
                     <tr>
                         <td>
                             <div class="row justify-content-center">
                                 <div class="form-group col-4 text-right">
                                        <?php profilePic(); ?>
                                 </div>
                                 <div class="form-group col-6">
                                     <label for="myfile">Upload your Picture</label>
                                         <input id="myfile" type="file" name="myfile" class="form-control-file" />
                                         <input type="submit" name="pic" value="Update your Picture" class=" mt-4  form-control btn btn-success" accept=".jpg" />
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
