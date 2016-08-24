
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page de présence</title>
    <style media="screen">
      body{background-image: url(../employees/Accenture.png); background-repeat: no-repeat; background-size:130%;}
          h3{text-align: center;}
          h1{text-align: center;}
    </style>
  </head>
  <body>
    <h1>Bienvenue à page de présence</h1>
    <h3>Savez vous que votre présence sera engistré automatiquement </h3>
    <?php
    session_start();
        $admins = array('Mardi', 'Suliman', 'Ali');
        $users = array('Yvan','zaidi','Amin','Bra','Jowa');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $user = $_POST['username'];
      $password = $_POST['password'];
      $t = date("Y/m/d G.i:s", time(NOW));
         if(in_array($user, $admins)){
           echo  "Bienvenue   :" . $user . "Vous êtes admin et vous êtes arrivés à  :" . $t;

         }elseif (in_array($user, $users)){
            echo  "Bienvenue   :" . $user . "Vous êtes user et vous êtes arrivés à  :" . $t;
         }


    else {
      echo "le nom ou le mot de pass est incorrect";
    }

       }
    else {
      echo "Vous ne pouvez pas aficher cette page  directement";
    }
     ?>
  </body>
</html>
