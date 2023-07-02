<?php

include "pdo.php";

require "NavBar.html";

$sql = "SELECT * FROM `users` order by Classe";
$rqt = $pdo->prepare($sql);
$rqt->execute();
$ListeUsers = $rqt->fetchAll();


?>
    <head>
    <script>
		function openNewWindow() {
			window.open('AjtUser.php', '_blank', 'height=600,width=800');
		}
	</script>
    <style>
      table {
        margin-top : 1%;
        margin-left : 3% ;
        margin-right : 3% ;
        border-collapse: collapse;
        width: 94%;
        font-family: Arial, sans-serif;
        font-size: 14px;
      }
      tr{
        margin : 5px;
      }
      th, td {
        padding: 8px;
        text-align: left;   
        border-bottom: 1px solid ;
      }

      button {
        margin-top: 30px;
    color: #fff;
    background: 
        linear-gradient(black, black) padding-box,
        linear-gradient(to right, red,blue) border-box;
    border-radius: 30px;
    border: 5px solid transparent;
    text-decoration:none;
    padding: 12px 40px;
    font-size: 13px;
    position:relative;
    cursor:pointer;
    }

    </style>
  </head>
  <body>
    <div class="AjtUser">
    <button class="button" onclick="openNewWindow()">Ajouter un nouvelle utilisateur</button>
    </div>
    <table>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Mot de passe</th>
        <th>Langue</th>
        <th>Role</th>
        <th>Classe</th>
      </tr>
      <?php foreach ($ListeUsers as $row){ ?>
        <tr>
          <td><?php echo $row[0]; ?></td>
          <td><?php echo $row[1]; ?></td>
          <td><?php echo $row[2]; ?></td>
          <td><?php echo $row[3]; ?></td>
          <td><?php echo $row[4]; ?></td>
          <td><?php echo $row[5]; ?></td>
          <td><?php echo $row[6]; ?></td>
          <td><?php echo $row[7]; ?></td>
        </tr>
      <?php } ?>
    </table>
  </body>
  





