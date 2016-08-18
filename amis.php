<?php
$dsn = "mysql:host=localhost;dbname=products";
      $user = "root";
      $pass = 'root';

      try {
          $con = new PDO($dsn,$user,$pass);
          $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "Voilâ tu es bien connecté";

      } catch (Exception $e) {
        echo "Mince" . $e->getMessage() . "<br>";
      }

 ?>
