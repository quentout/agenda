<?php


   require_once('evenement.php');


   if ($_SERVER['REQUEST_METHOD'] == 'POST') {

       
       
       $nom_event = $_POST['nom_event'];
       $debut_event = $_POST['debut_event'];
       $fin_event = $_POST['fin_event'];
       $description = $_POST['description'];
       $lieux = $_POST['lieux'];
       $intervenant = $_POST['intervenant'];
       $visio = $_POST['visio'];
       $recursif = $_POST['recursif'];
       $rappel_event = $_POST['rappel_event'];
       $id_revent = $_POST['id_revent'];

       $nouvellePersonne = new Group ($nom,$email,$visio);


       $nouvellePersonne->insertIntoDB();


       
       exit();}

?>
<!DOCTYPE html>
<html>
<head>
<script>
		function CloseWindow() {
			window.close();
		}
</script>
	
</head>
<body>
	<h1>Evenemement</h1>
	<form action="" method="POST">
		<label for="nom_event">Nom :</label>
		<input type="text" id="nom" name="nom" required><br><br>

		<label for="debut_event">date et heure debut :</label>
		<input type="email" id="e_mail" name="e_mail" required><br><br>

		<label for="fin_event">date et heure fin :</label>
		<input type="text" id="visio" name="visio" required><br><br>

		<label for="description">description :</label>
		<input type="text" id="nom" name="nom" required><br><br>

		<label for="lieux">lieux :</label>
		<input type="email" id="e_mail" name="e_mail" required><br><br>

		<label for="intervenant">intervenanat :</label>
		<input type="text" id="visio" name="visio" required><br><br>

		<label for="visio">visio :</label>
		<input type="text" id="nom" name="nom" required><br><br>

		<label for="recursif">recursif :</label>
		<input type="email" id="e_mail" name="e_mail" required><br><br>

		<label for="r_event">Visio :</label>
		<input type="text" id="visio" name="visio" required><br><br>

		<label for="id_revent">Visio :</label>
		<input type="text" id="visio" name="visio" required><br><br>

	
		

		<input  type="submit" value="S'inscrire">
		
	</form>
    <button onclick="CloseWindow()">Terminer</button>
</body>
</html>


