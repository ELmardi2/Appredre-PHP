<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // nom de l'utilisateur et mot de pass sera envoyé de formilaire

      $myusername = mysqli_real_escape_string($db,$_POST['utilisateur']);
      $mypassword = mysqli_real_escape_string($db,$_POST['mot de pass']);

      $sql = "SELECT id FROM users WHERE user_name = '$myusername' and user_password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // Si la resultata matched $l'utilisateur et $mdpass, table row must be 1 row

      if($count == 1) {

         $_SESSION['login_user'] = $myusername;

         header("location: welcome.php");
      }else {
         $error = "Votre connexion invalide";
      }
   }
?>
<html>

   <head>
     <meta charset="utf-8">
      <title>Présence Page</title>

      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>

   </head>

   <body background-color = "#FEC">

      <div align = "center" style="background-color:#ece; border-radius:22%;">
        <h1>Bienvenue sur la page de suivi de présence</h1>
        <h4>Savez-vous que votre présence sera enregisré automatiquement à la base de données</h4>
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px; text-align: center;"><b>Présence page</b></div>

            <div style = "margin:30px">

               <form action = "" method = "post">
                   utilisateur :</label><input type = "text" name = "prénom" class = "box"/><br /><br />
                    mdpass  :</label><input type = "password" name = "mdpass" class = "box" /><br/><br />
                  <input type = "submit" value = "Validez "/><br />
               </form>

               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

            </div>

         </div>

      </div>

   </body>
</html>
