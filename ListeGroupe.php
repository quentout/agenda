<?php

include "pdo.php";

require "NavBar.html";

$sql = "SELECT * FROM `Groupe`";
$rqt = $pdo->prepare($sql);
$rqt->execute();
$ListeUsers = $rqt->fetchAll();


?>
    <head>
    <script>
		function openNewWindow() {
			window.open('AjtGroupe.php', '_blank', 'height=600,width=800');
		}
	</script>
    <style>
      table {
        margin-top : 1%;
        margin-left : 10% ;
        margin-right : 10% ;
        border-collapse: collapse;
        width: 80%;
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
    <div>
    <button class="button" onclick="openNewWindow()">Ajouter un nouveau groupe</button>
    </div>
    <table>
      <tr>
        <th>ID</th>
        <th>Nom du groupe</th>
        <th>Email</th>
        <th>Visio</th>
        
      </tr>
      <?php foreach ($ListeUsers as $row){ ?>
        <tr>
          <td><?php echo $row[0]; ?></td>
          <td><?php echo $row[1]; ?></td>
          <td><?php echo $row[2]; ?></td>
          <td><?php echo $row[3]; ?></td>

        </tr>
      <?php } ?>
    </table>
  </body>
  





