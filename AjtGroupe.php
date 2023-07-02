<?php


   require_once('group.php');


   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       
       $nom = $_POST['nom'];
       $email = $_POST['e_mail'];
       $visio = $_POST['visio'];
       

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
	<h1>Groupe</h1>
	<form action="" method="POST">
		<label for="nom">Nom :</label>
		<input type="text" id="nom" name="nom" required><br><br>

		<label for="prenom">Email :</label>
		<input type="email" id="e_mail" name="e_mail" required><br><br>

		<label for="email">Visio :</label>
		<input type="text" id="visio" name="visio" required><br><br>

	
		

		<input  type="submit" value="S'inscrire">
		
	</form>
    <button onclick="CloseWindow()">Terminer</button>
</body>
</html>


