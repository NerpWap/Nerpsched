<?php
  session_start();
  if(isset($_SESSION["USER_LOGIN"]))
    header("location:admin/");
  require("definition/connection_variables.php");
  require("definition/directory_variables.php");
  require("class/connection.php");
  require("class/model.php");
  $model = new model();
?>
 <html>
  <head>
    <?php
      include("include/jquery.php");
    ?>
  	<link rel="stylesheet" href="style/style.css">
  	<link rel="stylesheet" href="style/style1.css">
  </head>
  <body>
    <?php
      $model->noNavigation();
      $model->setBody("views/forms/login_form.php");
      $model->display();
     ?>
  </body>
 </html>
