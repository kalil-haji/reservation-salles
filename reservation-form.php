<?php
session_start();//session_start() combiné à $_SESSION (voir en fin de traitement du formulaire) nous permettra de garder le pseudo en sauvegarde pendant qu'il est connecté, si vous voulez que sur une page, le pseudo soit (ou tout autre variable sauvegardée avec $_SESSION) soit retransmis, mettez session_start() au début de votre fichier PHP, comme ici
$bdd=mysqli_connect('localhost','root','','reservationsalles');//'serveur','nom d'utilisateur','pass','nom de la base'
mysqli_set_charset($bdd, 'utf8');
if(!$bdd) {
    echo "Erreur connexion BDD";
    //Dans ce script, je pars du principe que les erreurs ne sont pas affichées sur le site, vous pouvez donc voir qu'elle erreur est survenue avec mysqli_error(), pour cela décommentez la ligne suivante:
    //echo "<br>Erreur retournée: ".mysqli_error($mysqli);
    exit(0);
}
if(!isset($_SESSION['login'])){
    header("Refresh: 5; url=connexion.php");//redirection vers le formulaire de connexion dans 5 secondes
    echo "Vous devez vous connecter pour accéder à l'espace membre.<br><br><i>Redirection en cours, vers la page de connexion...</i>";
    exit(0);//on arrête l'éxécution du reste de la page avec exit, si le membre n'est pas connecté
} 
$Pseudo = $_SESSION['login'];
$id = mysqli_query($bdd,"SELECT id FROM utilisateurs WHERE login='$Pseudo'"); $idd = mysqli_fetch_all($id,MYSQLI_ASSOC); $iduser= $idd[0]['id'];


if(isset($_POST['titre'],$_POST['message'],$_POST['date_1'],$_POST['hour'])){
    if(empty($_POST['titre'])){//le champ login est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "Le champ Titre est vide.";}
    elseif(empty($_POST['message'])){//le champ login est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "Le champ Description est vide.";}
    elseif(empty($_POST['date_1'])){
        echo "Le champ Date est vide.";
    }
    elseif(empty($_POST['hour'])){
        echo "Le champ heure est vide.";
    }
    else{
        if($_POST['hour']=='8h'){
    if(mysqli_num_rows(mysqli_query($bdd,"SELECT * FROM reservations WHERE debut='".$_POST['date_1']." 08:00:00'"))>=1){//on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
        echo "Cette date est déjà utilisé.";}
    elseif(!mysqli_query($bdd,"INSERT INTO reservations SET titre='".$_POST['titre']."', description='".$_POST['message']."', debut='".$_POST['date_1']." 08:00:00', fin='".$_POST['date_1']." 09:00:00', id_utilisateur='$iduser'")){//on crypte le mot de passe avec la fonction propre à PHP: md5()
        echo "Une erreur s'est produite: ".mysqli_error($bdd);//je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
    } else{ echo "Votre Date à était reserver avec succés !";}
    }
    if($_POST['hour']=='9h'){
        if(mysqli_num_rows(mysqli_query($bdd,"SELECT * FROM reservations WHERE debut='".$_POST['date_1']." 09:00:00'"))>=1){//on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
            echo "Cette date est déjà utilisé.";}
        elseif(!mysqli_query($bdd,"INSERT INTO reservations SET titre='".$_POST['titre']."', description='".$_POST['message']."', debut='".$_POST['date_1']." 09:00:00', fin='".$_POST['date_1']." 10:00:00', id_utilisateur='$iduser'")){//on crypte le mot de passe avec la fonction propre à PHP: md5()
            echo "Une erreur s'est produite: ".mysqli_error($bdd);//je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
        } else{ echo "Votre Date à était reserver avec succés !";}
        }
    if($_POST['hour']=='10h'){
    if(mysqli_num_rows(mysqli_query($bdd,"SELECT * FROM reservations WHERE debut='".$_POST['date_1']." 10:00:00'"))>=1){//on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
        echo "Cette date est déjà utilisé.";}
    elseif(!mysqli_query($bdd,"INSERT INTO reservations SET titre='".$_POST['titre']."', description='".$_POST['message']."', debut='".$_POST['date_1']." 10:00:00', fin='".$_POST['date_1']." 11:00:00', id_utilisateur='$iduser'")){//on crypte le mot de passe avec la fonction propre à PHP: md5()
        echo "Une erreur s'est produite: ".mysqli_error($bdd);//je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
    } else{ echo "Votre Date à était reserver avec succés !";}
    }
    if($_POST['hour']=='11h'){
    if(mysqli_num_rows(mysqli_query($bdd,"SELECT * FROM reservations WHERE debut='".$_POST['date_1']." 11:00:00'"))>=1){//on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
        echo "Cette date est déjà utilisé.";}
    elseif(!mysqli_query($bdd,"INSERT INTO reservations SET titre='".$_POST['titre']."', description='".$_POST['message']."', debut='".$_POST['date_1']." 11:00:00', fin='".$_POST['date_1']." 12:00:00', id_utilisateur='$iduser'")){//on crypte le mot de passe avec la fonction propre à PHP: md5()
        echo "Une erreur s'est produite: ".mysqli_error($bdd);//je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
    } else{ echo "Votre Date à était reserver avec succés !";}
    }
    if($_POST['hour']=='12h'){
    if(mysqli_num_rows(mysqli_query($bdd,"SELECT * FROM reservations WHERE debut='".$_POST['date_1']." 12:00:00'"))>=1){//on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
        echo "Cette date est déjà utilisé.";}
    elseif(!mysqli_query($bdd,"INSERT INTO reservations SET titre='".$_POST['titre']."', description='".$_POST['message']."', debut='".$_POST['date_1']." 12:00:00', fin='".$_POST['date_1']." 13:00:00', id_utilisateur='$iduser'")){//on crypte le mot de passe avec la fonction propre à PHP: md5()
        echo "Une erreur s'est produite: ".mysqli_error($bdd);//je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
    } else{ echo "Votre Date à était reserver avec succés !";}
    }
    if($_POST['hour']=='13h'){
    if(mysqli_num_rows(mysqli_query($bdd,"SELECT * FROM reservations WHERE debut='".$_POST['date_1']." 13:00:00'"))>=1){//on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
        echo "Cette date est déjà utilisé.";}
    elseif(!mysqli_query($bdd,"INSERT INTO reservations SET titre='".$_POST['titre']."', description='".$_POST['message']."', debut='".$_POST['date_1']." 13:00:00', fin='".$_POST['date_1']." 14:00:00', id_utilisateur='$iduser'")){//on crypte le mot de passe avec la fonction propre à PHP: md5()
        echo "Une erreur s'est produite: ".mysqli_error($bdd);//je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
    } else{ echo "Votre Date à était reserver avec succés !";}
    }
    if($_POST['hour']=='14h'){
    if(mysqli_num_rows(mysqli_query($bdd,"SELECT * FROM reservations WHERE debut='".$_POST['date_1']." 14:00:00'"))>=1){//on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
        echo "Cette date est déjà utilisé.";}
    elseif(!mysqli_query($bdd,"INSERT INTO reservations SET titre='".$_POST['titre']."', description='".$_POST['message']."', debut='".$_POST['date_1']." 14:00:00', fin='".$_POST['date_1']." 15:00:00', id_utilisateur='$iduser'")){//on crypte le mot de passe avec la fonction propre à PHP: md5()
        echo "Une erreur s'est produite: ".mysqli_error($bdd);//je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
    } else{ echo "Votre Date à était reserver avec succés !";}
    }
    if($_POST['hour']=='15h'){
    if(mysqli_num_rows(mysqli_query($bdd,"SELECT * FROM reservations WHERE debut='".$_POST['date_1']." 15:00:00'"))>=1){//on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
        echo "Cette date est déjà utilisé.";}
    elseif(!mysqli_query($bdd,"INSERT INTO reservations SET titre='".$_POST['titre']."', description='".$_POST['message']."', debut='".$_POST['date_1']." 15:00:00', fin='".$_POST['date_1']." 16:00:00', id_utilisateur='$iduser'")){//on crypte le mot de passe avec la fonction propre à PHP: md5()
        echo "Une erreur s'est produite: ".mysqli_error($bdd);//je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
    } else{ echo "Votre Date à était reserver avec succés !";}
    }
    if($_POST['hour']=='16h'){
    if(mysqli_num_rows(mysqli_query($bdd,"SELECT * FROM reservations WHERE debut='".$_POST['date_1']." 16:00:00'"))>=1){//on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
        echo "Cette date est déjà utilisé.";}
    elseif(!mysqli_query($bdd,"INSERT INTO reservations SET titre='".$_POST['titre']."', description='".$_POST['message']."', debut='".$_POST['date_1']." 16:00:00', fin='".$_POST['date_1']." 17:00:00', id_utilisateur='$iduser'")){//on crypte le mot de passe avec la fonction propre à PHP: md5()
        echo "Une erreur s'est produite: ".mysqli_error($bdd);//je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
    } else{ echo "Votre Date à était reserver avec succés !";}
    }
    if($_POST['hour']=='17h'){
    if(mysqli_num_rows(mysqli_query($bdd,"SELECT * FROM reservations WHERE debut='".$_POST['date_1']." 17:00:00'"))>=1){//on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
        echo "Cette date est déjà utilisé.";}
    elseif(!mysqli_query($bdd,"INSERT INTO reservations SET titre='".$_POST['titre']."', description='".$_POST['message']."', debut='".$_POST['date_1']." 17:00:00', fin='".$_POST['date_1']." 18:00:00', id_utilisateur='$iduser'")){//on crypte le mot de passe avec la fonction propre à PHP: md5()
        echo "Une erreur s'est produite: ".mysqli_error($bdd);//je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
    } else{ echo "Votre Date à était reserver avec succés !";}
    }
    if($_POST['hour']=='18h'){
    if(mysqli_num_rows(mysqli_query($bdd,"SELECT * FROM reservations WHERE debut='".$_POST['date_1']." 18:00:00'"))>=1){//on vérifie que ce pseudo n'est pas déjà utilisé par un autre membre
        echo "Cette date est déjà utilisé.";}
    elseif(!mysqli_query($bdd,"INSERT INTO reservations SET titre='".$_POST['titre']."', description='".$_POST['message']."', debut='".$_POST['date_1']." 18:00:00', fin='".$_POST['date_1']." 19:00:00', id_utilisateur='$iduser'")){//on crypte le mot de passe avec la fonction propre à PHP: md5()
        echo "Une erreur s'est produite: ".mysqli_error($bdd);//je conseille de ne pas afficher les erreurs aux visiteurs mais de l'enregistrer dans un fichier log
    } else{ echo "Votre Date à était reserver avec succés !";}
    }



    }
}



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="./css/index.css" media="screen" type="text/css" />
  <title>Date</title>
</head>

<header>
        <div class="bloc">
            <div class="leg"><a href="https://github.com/kalil-haji/reservation-salles">Lien github</br></a></div>
            <div class="leg"><a href="inscription.php">Inscription</br></a></div>
            <div class="repas"><a href="profil.php">Voir mon Profil</a></div>
            <div class="trav"><a href="connexion.php">Connectez vous</a></div>
        </div>
    </header>


<body>
 
<form action="reservation-form.php" method="post">
    <p>
        <label>Titre : </label><input type="text" name="titre" id="titre">
    </p>
    <p>
        <label>Descritpion : </label><textarea placeholder="Entrer votre message" name="message" id="message"></textarea>
    </p>
    <label>Date de debut : </label><input type="date" class="form-control" size="30" name="date_1" id="date_1" />
    <label for="h-select">Choisir une heure:</label>
    

<select name="hour" id="h-select">
    <option value="">----</option>
    <option value="8h">8h</option>
    <option value="9h">9h</option>
    <option value="10h">10h</option>
    <option value="11h">11h</option>
    <option value="12h">12h</option>
    <option value="13h">13h</option>
    <option value="14h">14h</option>
    <option value="15h">15h</option>
    <option value="16h">16h</option>
    <option value="17h">17h</option>
    <option value="18h">18h</option>
</select>
    <p>
        <label>Date de fin : Ce sont des créneaux d'une heure <br>(faite plusieurs reservations si vous voulez un créneau plus long) </label>
    </p>
    <p>
        <input type="submit" value="Reserver" />
    </p>
</form>
 
<footer>
        <div class="bloc">
            <div class="leg"><a href="planning.php">Planning</br></a></div>
            <div class="repas"><a href="reservation-form.php">Reservation</a></div>
        </div>
</footer>
 
</body>
</html>