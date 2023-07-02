<?php

// Inclusion du fichier contenant la définition de la classe Circuit
   require_once('user.php');

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       // Récupération des valeurs du formulaire
       $nom = $_POST['nom'];
       $prenom = $_POST['prenom'];
       $email = $_POST['email'];
       $password=$_POST['passwd'];
       $langue=$_POST['langue'];
       $role=$_POST['role'];
       $classe=$_POST['classe'];
       

       // Création d'un nouvel objet Circuit
       $nouvellePersonne = new User ($nom, $prenom, $email, $password, $langue, $role, $classe);

       // Insertion du nouvel objet Circuit dans la base de données
       $nouvellePersonne->insertIntoDB();

       // Redirection vers une page de confirmation
       
       exit();}

include "pdo.php";



$sql = "SELECT * FROM `Groupe`";
$rqt = $pdo->prepare($sql);
$rqt->execute();
$ListeGroupe = $rqt->fetchAll();





?>
<!DOCTYPE html>
<html>
<head>
	<style>
		*{
			margin :1%
		}

	</style>

	
</head>
<body>
	<h1>Inscription</h1>
	<form action="" method="POST">
		<label for="nom">Nom :</label>
		<input type="text" id="nom" name="nom" required><br><br>

		<label for="prenom">Prénom :</label>
		<input type="text" id="prenom" name="prenom" required><br><br>

		<label for="email">Email :</label>
		<input type="email" id="email" name="email" required><br><br>

		<label for="motdepasse">Mot de passe :</label>
		<input type="text" id="passwd" name="passwd" required><br><br>

		<label for="langue">Langue :</label>
		<select id="langue" name="langue">
			<option value="francais">Français</option>
			<option value="anglais">Anglais</option>
			<option value="espagnol">Espagnol</option>
			<option value="allemand">Allemand</option>
		</select><br><br>

		<label for="role">Rôle :</label>
		<input type="radio" id="etudiant" name="role" value="etudiant" required>
		<label for="etudiant">Etudiant</label>
		<input type="radio" id="professeur" name="role" value="professeur">
		<label for="professeur">Professeur</label><br><br>

		<label for="classe">Classe :</label>
		<select id="classe" name="classe">
		<?php foreach ($ListeGroupe as $row){ ?>
			<option value=<?php echo $row[1] ?>><?php echo $row[1] ?></option>
     	 <?php } ?>
	
		</select><br><br>

		<input  type="submit" value="S'inscrire">
		
	</form>

</body>
</html>
