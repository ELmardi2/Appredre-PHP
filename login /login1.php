
 <?php

  ?>

  <html>
     <head>
       <meta charset="utf-8">
        <title>Présence Page</title>
        <style type = "text/css">
        </style>
     </head>
     <body style="background-image:url(../employees/accenture.jpg); background-size:140%; background-repeat:no-repeat;">
        <div align = "center" style="background-image:url(ture.jpg); background-size:80%;  padding-top:70px;">
          <h1>Bienvenue sur la page de suivi de présence</h1>
          <h4>Savez-vous que votre présence sera enregisré automatiquement à la base de données</h4>
           <div style = "width:300px; border: solid 1px #333333; " align = "left">
              <div style = "background-color:#333333; color:#FFFFFF; padding:3px; text-align: center;"><b>Présence page</b></div>
              <div style = "margin:30px">
                 <form action = "check.php" method = "POST">
                     utilisateur : <input type = "text" name = "username" ><br /><br />
                      mdpass  : <input type = "password" name = "password"><br/><br />
                    <input type = "submit" value = "Validez "/><br />
                 </form>
                 <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
              </div>
           </div>
        </div>
     </body>
  </html>
