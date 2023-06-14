<?php
  session_start();
  
?>
<html>
    <head>
     <title> PHP Test </title>
    </head>
    <body>
        <?php
          echo 'Esta página foi visualizada ' . $_SESSION['nome'] . 'vezes.';
        ?>
    </body>
</html>
