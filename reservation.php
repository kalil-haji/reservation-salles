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



if(isset($_GET['event_l8'])){
    $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 8:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
elseif(isset($_GET['event_l9'])){
    $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 9:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
elseif(isset($_GET['event_l10'])){
    $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 10:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
elseif(isset($_GET['event_l11'])){
    $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 11:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
elseif(isset($_GET['event_l12'])){
    $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 12:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
elseif(isset($_GET['event_l13'])){
    $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 13:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
elseif(isset($_GET['event_l14'])){
    $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 14:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
elseif(isset($_GET['event_l15'])){
    $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 15:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}

    
elseif(isset($_GET['event_l16'])){
    $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 16:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC);
    if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}
}

    
elseif(isset($_GET['event_l17'])){
    $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 17:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
elseif(isset($_GET['event_l18'])){
    $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 18:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}



    elseif(isset($_GET['event_m8'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 08:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_m9'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 09:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_m10'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 10:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_m11'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 11:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_m12'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 12:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_m13'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 13:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_m14'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 14:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_m15'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 15:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_m16'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 16:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_m17'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 17:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_m18'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 18:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    

elseif(isset($_GET['event_w8'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 08:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_w9'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 09:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_w10'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 10:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_w11'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 11:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_w12'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 12:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_w13'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 13:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_w14'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 14:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_w15'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 15:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_w16'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 16:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_w17'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 17:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_w18'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 18:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}


elseif(isset($_GET['event_j8'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 08:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_j9'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 09:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_j10'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 10:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_j11'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 11:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_j12'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 12:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_j13'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 13:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_j14'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 14:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_j15'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 15:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_j16'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 16:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_j17'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 17:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_j18'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 18:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    

elseif(isset($_GET['event_v8'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 08:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_v9'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 09:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_v10'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 10:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_v11'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 11:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_v12'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 12:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_v13'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 13:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_v14'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 14:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_v15'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 15:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_v16'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 16:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_v17'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 17:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    elseif(isset($_GET['event_v18'])){
        $newreq = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 18:00:00'"); $req1 = mysqli_fetch_all($newreq,MYSQLI_ASSOC); if (isset($req1[0])){$iduser=$req1[0]['id_utilisateur']; $newreq2 = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$iduser'"); $req2 = mysqli_fetch_all($newreq2,MYSQLI_ASSOC);}}
    


?><!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css" media="screen" type="text/css" />
    <title>Page admin!</title>
</head>
<body>
<header>
        <div class="bloc">
            <div class="leg"><a href="https://github.com/kalil-haji/reservation-salles">Lien github</br></a></div>
            <div class="leg"><a href="inscription.php">Inscription</br></a></div>
            <div class="repas"><a href="profil.php">Voir mon Profil</a></div>
            <div class="trav"><a href="connexion.php">Connectez vous</a></div>
        </div>
    </header>
        
    

    <?php if(isset($req1[0])){ echo 'Utilisateur : '.$req2[0]['login'].'<br>'; echo 'Titre : '.$req1[0]['titre'].'<br>'; echo 'Description : '.$req1[0]['description'].'<br>'; echo 'Heure de debut : '.$req1[0]['debut'].'<br>'; echo 'Heure de fin : '.$req1[0]['fin'];} ?>

    <footer>
        <div class="bloc">
            <div class="leg"><a href="planning.php">Planning</br></a></div>
            <div class="repas"><a href="reservation-form.php">Reservation</a></div>
        </div>
</footer>

</body>
</html>