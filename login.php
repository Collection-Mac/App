<?php
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mpd'])){
        $pseudo_defaut = "admin";
        $mdp_defaut = "admin@1";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi == $pseudo_defaut AND $mdp_saisi == $mdp_defaut){
            
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
        <meta charset="utf-8">
        <title>Portail de Gestion</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper login">
            <div class="container">
                <div class="col-left">
                    <div class="login-text">
                        <h2>PORTAIL</h2>
                        <p>De Gestion d'ALLAKRO</p>
                        <a class="btn" href="">S'inscrire</a>
                    </div>
                </div>
                <div class="col-right">
                    <div class="login-form">
                        <h2>Connexion</h2>
                        <form method="POST" action="">
                            <p>
                                <label>Nom d'utilisateur<span>*</span></label>
                                <input type="text" name="pseudo" placeholder="Nom utiliateur" autocomplete="none">
                            </p>
                            <p>
                                <label>Mot de passe<span>*</span></label>
                                <input type="password" name="mdp" placeholder="Mot de passe" >
                            </p>
                            <p>
                                <input type="submit" name="valider" value="Se connecter" />
                            </p>
                            <p>
                                <a href="">Mot de passe oublier ?</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="credit">
                Portail de gestion ALLAKRO <a href=""></a>
            </div>
        </div>
    </body>
</html>
