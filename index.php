<?php
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
  </head>
    <div class="container-fluid">
    <?php
      $model->setBody("views/contents/mission_and_vision.php");
      $model->display();
    ?>
    </div>
  </body>
</html>
