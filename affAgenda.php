
<?php
include "pdo.php";

require "NavBar.html";

$sql = "SELECT * FROM `users` order by Classe";
$rqt = $pdo->prepare($sql);
$rqt->execute();
$ListeUsers = $rqt->fetchAll();


$sql_gpe = "SELECT * FROM `Groupe`";
$rqt_gpe = $pdo->prepare($sql_gpe);
$rqt_gpe->execute();
$ListeGroupe = $rqt_gpe->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda</title>
</head>
<body>
  <form method="GET" action="">
    <label for="week-picker">Choisissez une semaine:</label>
    <input type="week" id="week-picker" name="week" value="<?php echo isset($_GET['week']) ? $_GET['week'] : ''; ?>">
    <br>
    <label for="classe">Classe :</label>
		<select id="classe" name="classe">
		<?php foreach ($ListeGroupe as $row){ ?>
			<option value=<?php echo $row[1] ?>><?php echo $row[1] ?></option>
     	 <?php } ?>
	
		</select>
    <input type="submit" value="Afficher">
    <br><br><br>
  </form>

  <?php

  if (isset($_GET['week'])) {
    $selectedWeek = $_GET['week'];


    $year = date('Y', strtotime($selectedWeek));
    $weekNumber = date('W', strtotime($selectedWeek));


    $startDate = date("Y-m-d", strtotime("{$year}-W{$weekNumber}-1"));

 
    echo '<table>';
    
    echo '<tbody>';
    $week=["lundi","mardi","mercredi","jeudi","vendredi","samedi","dimanche"];
    for ($i = 0; $i < 7; $i++) {
      $currentDate = date('d', strtotime("{$startDate} +{$i} days"));
      

      echo "<tr>";
      echo $week[$i],' ',$currentDate;
      echo "\t";
      echo "</tr>";
    }
    echo '</tbody>';
    echo '</table>';
  }

  ?>
</body>
</html>
