<?php

@include 'pdo.php';

session_start();

if(isset($_POST['submit'])) {

    $identifiant = $pdo->quote($_POST['nom']);
    $pass = $pdo->quote($_POST['password']);

    $select = "SELECT * FROM Users WHERE Users.nom = $identifiant AND Users.password = $pass";

    $result = $pdo->query($select);

    if ($result->rowCount() > 0) {

        
        $sql ="SELECT Users.nom, Users.password FROM Users WHERE Users.nom = $identifiant AND Users.password = $pass";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $admin = $stmt->fetch();

        if (!empty($admin)) {
            
            $_SESSION['Identifiant'] = $identifiant;
            header('location:NavBar.html');
        }
       

    }else{
        $error[] = 'Mot de passe ou identifant incorrect !';
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formulaire de connexion</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Se connecter</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                   echo '<span class="error-msg">'.$error.'</span>';
                };
             };
            ?>
            <input type="text" name="nom" required placeholder="Entrez votre identifiant">
            <input type="password" name="password" required placeholder="Entrez votre mot de passe">
            <input type="submit" name="submit" value="Se connecter" class="form-btn">
        </form>
    </div>
</body>  
</html>    