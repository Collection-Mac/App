<?php
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mpd'])){
        $pseudo_par_defaut = "admin";
        $mdp_par_defaut = "admin@1";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
            
        }
        else{
            echo "Utilisateur ou mot de passe incorrect !";
        }
    }
    else{
        echo "Veuillez renseigner les champs !";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portail de gestion</title>
</head>
<body>
    <form method="POST" action="" align="center">
        <input type="text" name="pseudo" autocomplete="none" required>
        <br>
        <input type="password" name="mdp" required>
        <br>
        <input type="submit" name="valider">
    </form>
</body>
</html>