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

$requete = mysqli_query($bdd, "SELECT * FROM reservations ") or die(mysqli_error($bdd));
$etudiants = mysqli_fetch_all($requete,MYSQLI_ASSOC);

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

    <h1>Planning de la Semaine</h1>
    <div>
<table>
    <thead>
        <tr>
            <th></th>
            <th>Lundi</th>
            <th>Mardi</th>
            <th>Mercredi</th>
            <th>Jeudi</th>
            <th>Vendredi</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>8h - 9h</td><td><?php $reql8 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 08:00:00'"); 
        $l8 = mysqli_fetch_all($reql8,MYSQLI_ASSOC); if(isset($l8[0]['titre'])){echo $l8[0]['titre'];} echo '<br>'; if(isset($l8[0]['id_utilisateur'])){$l8id=$l8[0]['id_utilisateur']; 
        $reql8id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$l8id'"); 
        $l8idd = mysqli_fetch_all($reql8id,MYSQLI_ASSOC); if(isset($l8idd[0]['login'])){echo $l8idd[0]['login'];} $i=$l8[0]['id'];
        ?><form method="get" action="reservation.php?l8"><input type="submit" name="event_l8" value="Voir"></form><?php } ?></td>
        <td><?php $reqm8 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 08:00:00'"); 
        $m8 = mysqli_fetch_all($reqm8,MYSQLI_ASSOC); if(isset($m8[0]['titre'])){echo $m8[0]['titre'];} echo '<br>'; if(isset($m8[0]['id_utilisateur'])){$m8id=$m8[0]['id_utilisateur']; 
        $reqm8id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$m8id'"); 
        $m8idd = mysqli_fetch_all($reqm8id,MYSQLI_ASSOC); if(isset($m8idd[0]['login'])){echo $m8idd[0]['login'];} $i=$m8[0]['id'];
        ?><form method="get" action="reservation.php?m8"><input type="submit" name="event_m8" value="Voir"></form><?php } ?></td>
        <td><?php $reqw8 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 08:00:00'"); 
        $w8 = mysqli_fetch_all($reqw8,MYSQLI_ASSOC); if(isset($w8[0]['titre'])){echo $w8[0]['titre'];} echo '<br>'; if(isset($w8[0]['id_utilisateur'])){$w8id=$w8[0]['id_utilisateur']; 
        $reqw8id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$w8id'"); 
        $w8idd = mysqli_fetch_all($reqw8id,MYSQLI_ASSOC); if(isset($w8idd[0]['login'])){echo $w8idd[0]['login'];} $i=$w8[0]['id'];
        ?><form method="get" action="reservation.php?w8"><input type="submit" name="event_w8" value="Voir"></form><?php } ?></td>
        <td><?php $reqj8 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 08:00:00'"); 
        $j8 = mysqli_fetch_all($reqj8,MYSQLI_ASSOC); if(isset($j8[0]['titre'])){echo $j8[0]['titre'];} echo '<br>'; if(isset($j8[0]['id_utilisateur'])){$j8id=$j8[0]['id_utilisateur']; 
        $reqj8id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$j8id'"); 
        $j8idd = mysqli_fetch_all($reqj8id,MYSQLI_ASSOC); if(isset($j8idd[0]['login'])){echo $j8idd[0]['login'];} $i=$j8[0]['id'];
        ?><form method="get" action="reservation.php?j8"><input type="submit" name="event_j8" value="Voir"></form><?php } ?></td>
        <td><?php $reqv8 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 08:00:00'"); 
        $v8 = mysqli_fetch_all($reqv8,MYSQLI_ASSOC); if(isset($v8[0]['titre'])){echo $v8[0]['titre'];} echo '<br>'; if(isset($v8[0]['id_utilisateur'])){$v8id=$v8[0]['id_utilisateur']; 
        $reqv8id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$v8id'"); 
        $v8idd = mysqli_fetch_all($reqv8id,MYSQLI_ASSOC); if(isset($v8idd[0]['login'])){echo $v8idd[0]['login'];} $i=$v8[0]['id'];
        ?><form method="get" action="reservation.php?v8"><input type="submit" name="event_v8" value="Voir"></form><?php } ?></td>
        
        

        <tr><td>9h - 10h</td><td><?php $reql9 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 09:00:00'"); 
        $l9 = mysqli_fetch_all($reql9,MYSQLI_ASSOC); if(isset($l9[0]['titre'])){echo $l9[0]['titre'];} echo '<br>'; if(isset($l9[0]['id_utilisateur'])){$l9id=$l9[0]['id_utilisateur']; 
        $reql9id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$l9id'"); 
        $l9idd = mysqli_fetch_all($reql9id,MYSQLI_ASSOC); if(isset($l9idd[0]['login'])){echo $l9idd[0]['login'];} $i=$l9[0]['id'];
        ?><form method="get" action="reservation.php?l9"><input type="submit" name="event_l9" value="Voir"></form><?php } ?></td>
        <td><?php $reqm9 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 09:00:00'"); 
        $m9 = mysqli_fetch_all($reqm9,MYSQLI_ASSOC); if(isset($m9[0]['titre'])){echo $m9[0]['titre'];} echo '<br>'; if(isset($m9[0]['id_utilisateur'])){$m9id=$m9[0]['id_utilisateur']; 
        $reqm9id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$m9id'"); 
        $m9idd = mysqli_fetch_all($reqm9id,MYSQLI_ASSOC); if(isset($m9idd[0]['login'])){echo $m9idd[0]['login'];} $i=$m9[0]['id'];
        ?><form method="get" action="reservation.php?m9"><input type="submit" name="event_m9" value="Voir"></form><?php } ?></td>
        <td><?php $reqw9 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 09:00:00'"); 
        $w9 = mysqli_fetch_all($reqw9,MYSQLI_ASSOC); if(isset($w9[0]['titre'])){echo $w9[0]['titre'];} echo '<br>'; if(isset($w9[0]['id_utilisateur'])){$w9id=$w9[0]['id_utilisateur']; 
        $reqw9id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$w9id'"); 
        $w9idd = mysqli_fetch_all($reqw9id,MYSQLI_ASSOC); if(isset($w9idd[0]['login'])){echo $w9idd[0]['login'];} $i=$w9[0]['id'];
        ?><form method="get" action="reservation.php?w9"><input type="submit" name="event_w9" value="Voir"></form><?php } ?></td>
        <td><?php $reqj9 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 09:00:00'"); 
        $j9 = mysqli_fetch_all($reqj9,MYSQLI_ASSOC); if(isset($j9[0]['titre'])){echo $j9[0]['titre'];} echo '<br>'; if(isset($j9[0]['id_utilisateur'])){$j9id=$j9[0]['id_utilisateur']; 
        $reqj9id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$j9id'"); 
        $j9idd = mysqli_fetch_all($reqj9id,MYSQLI_ASSOC); if(isset($j9idd[0]['login'])){echo $j9idd[0]['login'];} $i=$j9[0]['id'];
        ?><form method="get" action="reservation.php?j9"><input type="submit" name="event_j9" value="Voir"></form><?php } ?></td>
        <td><?php $reqv9 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 09:00:00'"); 
        $v9 = mysqli_fetch_all($reqv9,MYSQLI_ASSOC); if(isset($v9[0]['titre'])){echo $v9[0]['titre'];} echo '<br>'; if(isset($v9[0]['id_utilisateur'])){$v9id=$v9[0]['id_utilisateur']; 
        $reqv9id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$v9id'"); 
        $v9idd = mysqli_fetch_all($reqv9id,MYSQLI_ASSOC); if(isset($v9idd[0]['login'])){echo $v9idd[0]['login'];} $i=$v9[0]['id'];
        ?><form method="get" action="reservation.php?v9"><input type="submit" name="event_v9" value="Voir"></form><?php } ?></td>


        <tr><td>10h - 11h</td><td><?php $reql10 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 10:00:00'"); 
        $l10 = mysqli_fetch_all($reql10,MYSQLI_ASSOC); if(isset($l10[0]['titre'])){echo $l10[0]['titre'];} echo '<br>'; if(isset($l10[0]['id_utilisateur'])){$l10id=$l10[0]['id_utilisateur']; 
        $reql10id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$l10id'"); 
        $l10idd = mysqli_fetch_all($reql10id,MYSQLI_ASSOC); if(isset($l10idd[0]['login'])){echo $l10idd[0]['login'];} $i=$l10[0]['id'];
        ?><form method="get" action="reservation.php?l10"><input type="submit" name="event_l10" value="Voir"></form><?php } ?></td>
        <td><?php $reqm10 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 10:00:00'"); 
        $m10 = mysqli_fetch_all($reqm10,MYSQLI_ASSOC); if(isset($m10[0]['titre'])){echo $m10[0]['titre'];} echo '<br>'; if(isset($m10[0]['id_utilisateur'])){$m10id=$m10[0]['id_utilisateur']; 
        $reqm10id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$m10id'"); 
        $m10idd = mysqli_fetch_all($reqm10id,MYSQLI_ASSOC); if(isset($m10idd[0]['login'])){echo $m10idd[0]['login'];} $i=$m10[0]['id'];
        ?><form method="get" action="reservation.php?m10"><input type="submit" name="event_m10" value="Voir"></form><?php } ?></td>
        <td><?php $reqw10 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 10:00:00'"); 
        $w10 = mysqli_fetch_all($reqw10,MYSQLI_ASSOC); if(isset($w10[0]['titre'])){echo $w10[0]['titre'];} echo '<br>'; if(isset($w10[0]['id_utilisateur'])){$w10id=$w10[0]['id_utilisateur']; 
        $reqw10id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$w10id'"); 
        $w10idd = mysqli_fetch_all($reqw10id,MYSQLI_ASSOC); if(isset($w10idd[0]['login'])){echo $w10idd[0]['login'];} $i=$w10[0]['id'];
        ?><form method="get" action="reservation.php?w10"><input type="submit" name="event_w10" value="Voir"></form><?php } ?></td>
        <td><?php $reqj10 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 10:00:00'"); 
        $j10 = mysqli_fetch_all($reqj10,MYSQLI_ASSOC); if(isset($j10[0]['titre'])){echo $j10[0]['titre'];} echo '<br>'; if(isset($j10[0]['id_utilisateur'])){$j10id=$j10[0]['id_utilisateur']; 
        $reqj10id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$j10id'"); 
        $j10idd = mysqli_fetch_all($reqj10id,MYSQLI_ASSOC); if(isset($j10idd[0]['login'])){echo $j10idd[0]['login'];} $i=$j10[0]['id'];
        ?><form method="get" action="reservation.php?j10"><input type="submit" name="event_j10" value="Voir"></form><?php } ?></td>
        <td><?php $reqv10 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 10:00:00'"); 
        $v10 = mysqli_fetch_all($reqv10,MYSQLI_ASSOC); if(isset($v10[0]['titre'])){echo $v10[0]['titre'];} echo '<br>'; if(isset($v10[0]['id_utilisateur'])){$v10id=$v10[0]['id_utilisateur']; 
        $reqv10id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$v10id'"); 
        $v10idd = mysqli_fetch_all($reqv10id,MYSQLI_ASSOC); if(isset($v10idd[0]['login'])){echo $v10idd[0]['login'];} $i=$v10[0]['id'];
        ?><form method="get" action="reservation.php?v10"><input type="submit" name="event_v10" value="Voir"></form><?php } ?></td>



        <tr><td>11h - 12h</td><td><?php $reql11 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 11:00:00'"); 
        $l11 = mysqli_fetch_all($reql11,MYSQLI_ASSOC); if(isset($l11[0]['titre'])){echo $l11[0]['titre'];} echo '<br>'; if(isset($l11[0]['id_utilisateur'])){$l11id=$l11[0]['id_utilisateur']; 
        $reql11id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$l11id'"); 
        $l11idd = mysqli_fetch_all($reql11id,MYSQLI_ASSOC); if(isset($l11idd[0]['login'])){echo $l11idd[0]['login'];} $i=$l11[0]['id'];
        ?><form method="get" action="reservation.php?l11"><input type="submit" name="event_l11" value="Voir"></form><?php } ?></td>
        <td><?php $reqm11 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 11:00:00'"); 
        $m11 = mysqli_fetch_all($reqm11,MYSQLI_ASSOC); if(isset($m11[0]['titre'])){echo $m11[0]['titre'];} echo '<br>'; if(isset($m11[0]['id_utilisateur'])){$m11id=$m11[0]['id_utilisateur']; 
        $reqm11id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$m11id'"); 
        $m11idd = mysqli_fetch_all($reqm11id,MYSQLI_ASSOC); if(isset($m11idd[0]['login'])){echo $m11idd[0]['login'];} $i=$m11[0]['id'];
        ?><form method="get" action="reservation.php?m11"><input type="submit" name="event_m11" value="Voir"></form><?php } ?></td>
        <td><?php $reqw11 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 11:00:00'"); 
        $w11 = mysqli_fetch_all($reqw11,MYSQLI_ASSOC); if(isset($w11[0]['titre'])){echo $w11[0]['titre'];} echo '<br>'; if(isset($w11[0]['id_utilisateur'])){$w11id=$w11[0]['id_utilisateur']; 
        $reqw11id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$w11id'"); 
        $w11idd = mysqli_fetch_all($reqw11id,MYSQLI_ASSOC); if(isset($w11idd[0]['login'])){echo $w11idd[0]['login'];} $i=$w11[0]['id'];
        ?><form method="get" action="reservation.php?w11"><input type="submit" name="event_w11" value="Voir"></form><?php } ?></td>
        <td><?php $reqj11 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 11:00:00'"); 
        $j11 = mysqli_fetch_all($reqj11,MYSQLI_ASSOC); if(isset($j11[0]['titre'])){echo $j11[0]['titre'];} echo '<br>'; if(isset($j11[0]['id_utilisateur'])){$j11id=$j11[0]['id_utilisateur']; 
        $reqj11id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$j11id'"); 
        $j11idd = mysqli_fetch_all($reqj11id,MYSQLI_ASSOC); if(isset($j11idd[0]['login'])){echo $j11idd[0]['login'];} $i=$j11[0]['id'];
        ?><form method="get" action="reservation.php?j11"><input type="submit" name="event_j11" value="Voir"></form><?php } ?></td>
        <td><?php $reqv11 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 11:00:00'"); 
        $v11 = mysqli_fetch_all($reqv11,MYSQLI_ASSOC); if(isset($v11[0]['titre'])){echo $v11[0]['titre'];} echo '<br>'; if(isset($v11[0]['id_utilisateur'])){$v11id=$v11[0]['id_utilisateur']; 
        $reqv11id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$v11id'"); 
        $v11idd = mysqli_fetch_all($reqv11id,MYSQLI_ASSOC); if(isset($v11idd[0]['login'])){echo $v11idd[0]['login'];} $i=$v11[0]['id'];
        ?><form method="get" action="reservation.php?v11"><input type="submit" name="event_v11" value="Voir"></form><?php } ?></td>



        <tr><td>12h - 13h</td><td><?php $reql12 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 12:00:00'"); 
        $l12 = mysqli_fetch_all($reql12,MYSQLI_ASSOC); if(isset($l12[0]['titre'])){echo $l12[0]['titre'];} echo '<br>'; if(isset($l12[0]['id_utilisateur'])){$l12id=$l12[0]['id_utilisateur']; 
        $reql12id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$l12id'"); 
        $l12idd = mysqli_fetch_all($reql12id,MYSQLI_ASSOC); if(isset($l12idd[0]['login'])){echo $l12idd[0]['login'];} $i=$l12[0]['id'];
        ?><form method="get" action="reservation.php?l12"><input type="submit" name="event_l12" value="Voir"></form><?php } ?></td>
        <td><?php $reqm12 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 12:00:00'"); 
        $m12 = mysqli_fetch_all($reqm12,MYSQLI_ASSOC); if(isset($m12[0]['titre'])){echo $m12[0]['titre'];} echo '<br>'; if(isset($m12[0]['id_utilisateur'])){$m12id=$m12[0]['id_utilisateur']; 
        $reqm12id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$m12id'"); 
        $m12idd = mysqli_fetch_all($reqm12id,MYSQLI_ASSOC); if(isset($m12idd[0]['login'])){echo $m12idd[0]['login'];} $i=$m12[0]['id'];
        ?><form method="get" action="reservation.php?m12"><input type="submit" name="event_m12" value="Voir"></form><?php } ?></td>
        <td><?php $reqw12 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 12:00:00'"); 
        $w12 = mysqli_fetch_all($reqw12,MYSQLI_ASSOC); if(isset($w12[0]['titre'])){echo $w12[0]['titre'];} echo '<br>'; if(isset($w12[0]['id_utilisateur'])){$w12id=$w12[0]['id_utilisateur']; 
        $reqw12id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$w12id'"); 
        $w12idd = mysqli_fetch_all($reqw12id,MYSQLI_ASSOC); if(isset($w12idd[0]['login'])){echo $w12idd[0]['login'];} $i=$w12[0]['id'];
        ?><form method="get" action="reservation.php?w12"><input type="submit" name="event_w12" value="Voir"></form><?php } ?></td>
        <td><?php $reqj12 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 12:00:00'"); 
        $j12 = mysqli_fetch_all($reqj12,MYSQLI_ASSOC); if(isset($j12[0]['titre'])){echo $j12[0]['titre'];} echo '<br>'; if(isset($j12[0]['id_utilisateur'])){$j12id=$j12[0]['id_utilisateur']; 
        $reqj12id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$j12id'"); 
        $j12idd = mysqli_fetch_all($reqj12id,MYSQLI_ASSOC); if(isset($j12idd[0]['login'])){echo $j12idd[0]['login'];} $i=$j12[0]['id'];
        ?><form method="get" action="reservation.php?j12"><input type="submit" name="event_j12" value="Voir"></form><?php } ?></td>
        <td><?php $reqv12 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 12:00:00'"); 
        $v12 = mysqli_fetch_all($reqv12,MYSQLI_ASSOC); if(isset($v12[0]['titre'])){echo $v12[0]['titre'];} echo '<br>'; if(isset($v12[0]['id_utilisateur'])){$v12id=$v12[0]['id_utilisateur']; 
        $reqv12id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$v12id'"); 
        $v12idd = mysqli_fetch_all($reqv12id,MYSQLI_ASSOC); if(isset($v12idd[0]['login'])){echo $v12idd[0]['login'];} $i=$v12[0]['id'];
        ?><form method="get" action="reservation.php?v12"><input type="submit" name="event_v12" value="Voir"></form><?php } ?></td>



        <tr><td>13h - 14h</td><td><?php $reql13 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 13:00:00'"); 
        $l13 = mysqli_fetch_all($reql13,MYSQLI_ASSOC); if(isset($l13[0]['titre'])){echo $l13[0]['titre'];} echo '<br>'; if(isset($l13[0]['id_utilisateur'])){$l13id=$l13[0]['id_utilisateur']; 
        $reql13id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$l13id'"); 
        $l13idd = mysqli_fetch_all($reql13id,MYSQLI_ASSOC); if(isset($l13idd[0]['login'])){echo $l13idd[0]['login'];} $i=$l13[0]['id'];
        ?><form method="get" action="reservation.php?l13"><input type="submit" name="event_l13" value="Voir"></form><?php } ?></td>
        <td><?php $reqm13 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 13:00:00'"); 
        $m13 = mysqli_fetch_all($reqm13,MYSQLI_ASSOC); if(isset($m13[0]['titre'])){echo $m13[0]['titre'];} echo '<br>'; if(isset($m13[0]['id_utilisateur'])){$m13id=$m13[0]['id_utilisateur']; 
        $reqm13id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$m13id'"); 
        $m13idd = mysqli_fetch_all($reqm13id,MYSQLI_ASSOC); if(isset($m13idd[0]['login'])){echo $m13idd[0]['login'];} $i=$m13[0]['id'];
        ?><form method="get" action="reservation.php?m13"><input type="submit" name="event_m13" value="Voir"></form><?php } ?></td>
        <td><?php $reqw13 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 13:00:00'"); 
        $w13 = mysqli_fetch_all($reqw13,MYSQLI_ASSOC); if(isset($w13[0]['titre'])){echo $w13[0]['titre'];} echo '<br>'; if(isset($w13[0]['id_utilisateur'])){$w13id=$w13[0]['id_utilisateur']; 
        $reqw13id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$w13id'"); 
        $w13idd = mysqli_fetch_all($reqw13id,MYSQLI_ASSOC); if(isset($w13idd[0]['login'])){echo $w13idd[0]['login'];} $i=$w13[0]['id'];
        ?><form method="get" action="reservation.php?w13"><input type="submit" name="event_w13" value="Voir"></form><?php } ?></td>
        <td><?php $reqj13 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 13:00:00'"); 
        $j13 = mysqli_fetch_all($reqj13,MYSQLI_ASSOC); if(isset($j13[0]['titre'])){echo $j13[0]['titre'];} echo '<br>'; if(isset($j13[0]['id_utilisateur'])){$j13id=$j13[0]['id_utilisateur']; 
        $reqj13id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$j13id'"); 
        $j13idd = mysqli_fetch_all($reqj13id,MYSQLI_ASSOC); if(isset($j13idd[0]['login'])){echo $j13idd[0]['login'];} $i=$j13[0]['id'];
        ?><form method="get" action="reservation.php?j13"><input type="submit" name="event_j13" value="Voir"></form><?php } ?></td>
        <td><?php $reqv13 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 13:00:00'"); 
        $v13 = mysqli_fetch_all($reqv13,MYSQLI_ASSOC); if(isset($v13[0]['titre'])){echo $v13[0]['titre'];} echo '<br>'; if(isset($v13[0]['id_utilisateur'])){$v13id=$v13[0]['id_utilisateur']; 
        $reqv13id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$v13id'"); 
        $v13idd = mysqli_fetch_all($reqv13id,MYSQLI_ASSOC); if(isset($v13idd[0]['login'])){echo $v13idd[0]['login'];} $i=$v13[0]['id'];
        ?><form method="get" action="reservation.php?v13"><input type="submit" name="event_v13" value="Voir"></form><?php } ?></td>



        <tr><td>14h - 15h</td><td><?php $reql14 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 14:00:00'"); 
        $l14 = mysqli_fetch_all($reql14,MYSQLI_ASSOC); if(isset($l14[0]['titre'])){echo $l14[0]['titre'];} echo '<br>'; if(isset($l14[0]['id_utilisateur'])){$l14id=$l14[0]['id_utilisateur']; 
        $reql14id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$l14id'"); 
        $l14idd = mysqli_fetch_all($reql14id,MYSQLI_ASSOC); if(isset($l14idd[0]['login'])){echo $l14idd[0]['login'];} $i=$l14[0]['id'];
        ?><form method="get" action="reservation.php?l14"><input type="submit" name="event_l14" value="Voir"></form><?php } ?></td>
        <td><?php $reqm14 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 14:00:00'"); 
        $m14 = mysqli_fetch_all($reqm14,MYSQLI_ASSOC); if(isset($m14[0]['titre'])){echo $m14[0]['titre'];} echo '<br>'; if(isset($m14[0]['id_utilisateur'])){$m14id=$m14[0]['id_utilisateur']; 
        $reqm14id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$m14id'"); 
        $m14idd = mysqli_fetch_all($reqm14id,MYSQLI_ASSOC); if(isset($m14idd[0]['login'])){echo $m14idd[0]['login'];} $i=$m14[0]['id'];
        ?><form method="get" action="reservation.php?m14"><input type="submit" name="event_m14" value="Voir"></form><?php } ?></td>
        <td><?php $reqw14 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 14:00:00'"); 
        $w14 = mysqli_fetch_all($reqw14,MYSQLI_ASSOC); if(isset($w14[0]['titre'])){echo $w14[0]['titre'];} echo '<br>'; if(isset($w14[0]['id_utilisateur'])){$w14id=$w14[0]['id_utilisateur']; 
        $reqw14id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$w14id'"); 
        $w14idd = mysqli_fetch_all($reqw14id,MYSQLI_ASSOC); if(isset($w14idd[0]['login'])){echo $w14idd[0]['login'];} $i=$w14[0]['id'];
        ?><form method="get" action="reservation.php?w14"><input type="submit" name="event_w14" value="Voir"></form><?php } ?></td>
        <td><?php $reqj14 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 14:00:00'"); 
        $j14 = mysqli_fetch_all($reqj14,MYSQLI_ASSOC); if(isset($j14[0]['titre'])){echo $j14[0]['titre'];} echo '<br>'; if(isset($j14[0]['id_utilisateur'])){$j14id=$j14[0]['id_utilisateur']; 
        $reqj14id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$j14id'"); 
        $j14idd = mysqli_fetch_all($reqj14id,MYSQLI_ASSOC); if(isset($j14idd[0]['login'])){echo $j14idd[0]['login'];} $i=$j14[0]['id'];
        ?><form method="get" action="reservation.php?j14"><input type="submit" name="event_j14" value="Voir"></form><?php } ?></td>
        <td><?php $reqv14 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 14:00:00'"); 
        $v14 = mysqli_fetch_all($reqv14,MYSQLI_ASSOC); if(isset($v14[0]['titre'])){echo $v14[0]['titre'];} echo '<br>'; if(isset($v14[0]['id_utilisateur'])){$v14id=$v14[0]['id_utilisateur']; 
        $reqv14id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$v14id'"); 
        $v14idd = mysqli_fetch_all($reqv14id,MYSQLI_ASSOC); if(isset($v14idd[0]['login'])){echo $v14idd[0]['login'];} $i=$v14[0]['id'];
        ?><form method="get" action="reservation.php?v14"><input type="submit" name="event_v14" value="Voir"></form><?php } ?></td>




        <tr><td>15h - 16h</td><td><?php $reql15 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 15:00:00'"); 
        $l15 = mysqli_fetch_all($reql15,MYSQLI_ASSOC); if(isset($l15[0]['titre'])){echo $l15[0]['titre'];} echo '<br>'; if(isset($l15[0]['id_utilisateur'])){$l15id=$l15[0]['id_utilisateur']; 
        $reql15id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$l15id'"); 
        $l15idd = mysqli_fetch_all($reql15id,MYSQLI_ASSOC); if(isset($l15idd[0]['login'])){echo $l15idd[0]['login'];} $i=$l15[0]['id'];
        ?><form method="get" action="reservation.php?l15"><input type="submit" name="event_l15" value="Voir"></form><?php } ?></td>
        <td><?php $reqm15 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 15:00:00'"); 
        $m15 = mysqli_fetch_all($reqm15,MYSQLI_ASSOC); if(isset($m15[0]['titre'])){echo $m15[0]['titre'];} echo '<br>'; if(isset($m15[0]['id_utilisateur'])){$m15id=$m15[0]['id_utilisateur']; 
        $reqm15id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$m15id'"); 
        $m15idd = mysqli_fetch_all($reqm15id,MYSQLI_ASSOC); if(isset($m15idd[0]['login'])){echo $m15idd[0]['login'];} $i=$m15[0]['id'];
        ?><form method="get" action="reservation.php?m15"><input type="submit" name="event_m15" value="Voir"></form><?php } ?></td>
        <td><?php $reqw15 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 15:00:00'"); 
        $w15 = mysqli_fetch_all($reqw15,MYSQLI_ASSOC); if(isset($w15[0]['titre'])){echo $w15[0]['titre'];} echo '<br>'; if(isset($w15[0]['id_utilisateur'])){$w15id=$w15[0]['id_utilisateur']; 
        $reqw15id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$w15id'"); 
        $w15idd = mysqli_fetch_all($reqw15id,MYSQLI_ASSOC); if(isset($w15idd[0]['login'])){echo $w15idd[0]['login'];} $i=$w15[0]['id'];
        ?><form method="get" action="reservation.php?w15"><input type="submit" name="event_w15" value="Voir"></form><?php } ?></td>
        <td><?php $reqj15 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 15:00:00'"); 
        $j15 = mysqli_fetch_all($reqj15,MYSQLI_ASSOC); if(isset($j15[0]['titre'])){echo $j15[0]['titre'];} echo '<br>'; if(isset($j15[0]['id_utilisateur'])){$j15id=$j15[0]['id_utilisateur']; 
        $reqj15id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$j15id'"); 
        $j15idd = mysqli_fetch_all($reqj15id,MYSQLI_ASSOC); if(isset($j15idd[0]['login'])){echo $j15idd[0]['login'];} $i=$j15[0]['id'];
        ?><form method="get" action="reservation.php?j15"><input type="submit" name="event_j15" value="Voir"></form><?php } ?></td>
        <td><?php $reqv15 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 15:00:00'"); 
        $v15 = mysqli_fetch_all($reqv15,MYSQLI_ASSOC); if(isset($v15[0]['titre'])){echo $v15[0]['titre'];} echo '<br>'; if(isset($v15[0]['id_utilisateur'])){$v15id=$v15[0]['id_utilisateur']; 
        $reqv15id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$v15id'"); 
        $v15idd = mysqli_fetch_all($reqv15id,MYSQLI_ASSOC); if(isset($v15idd[0]['login'])){echo $v15idd[0]['login'];} $i=$v15[0]['id'];
        ?><form method="get" action="reservation.php?v15"><input type="submit" name="event_v15" value="Voir"></form><?php } ?></td>



        <tr><td>16h</td><td><?php $reql16 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 16:00:00'"); 
        $l16 = mysqli_fetch_all($reql16,MYSQLI_ASSOC); if(isset($l16[0]['titre'])){echo $l16[0]['titre'];} echo '<br>'; if(isset($l16[0]['id_utilisateur'])){$l16id=$l16[0]['id_utilisateur']; 
        $reql16id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$l16id'"); 
        $l16idd = mysqli_fetch_all($reql16id,MYSQLI_ASSOC); if(isset($l16idd[0]['login'])){echo $l16idd[0]['login'];} $i=$l16[0]['id'];
        ?><form method="get" action="reservation.php?l16"><input type="submit" name="event_l16" value="Voir"></form><?php } ?></td>
        <td><?php $reqm16 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 16:00:00'"); 
        $m16 = mysqli_fetch_all($reqm16,MYSQLI_ASSOC); if(isset($m16[0]['titre'])){echo $m16[0]['titre'];} echo '<br>'; if(isset($m16[0]['id_utilisateur'])){$m16id=$m16[0]['id_utilisateur']; 
        $reqm16id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$m16id'"); 
        $m16idd = mysqli_fetch_all($reqm16id,MYSQLI_ASSOC); if(isset($m16idd[0]['login'])){echo $m16idd[0]['login'];} $i=$m16[0]['id'];
        ?><form method="get" action="reservation.php?m16"><input type="submit" name="event_m16" value="Voir"></form><?php } ?></td>
        <td><?php $reqw16 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 16:00:00'"); 
        $w16 = mysqli_fetch_all($reqw16,MYSQLI_ASSOC); if(isset($w16[0]['titre'])){echo $w16[0]['titre'];} echo '<br>'; if(isset($w16[0]['id_utilisateur'])){$w16id=$w16[0]['id_utilisateur']; 
        $reqw16id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$w16id'"); 
        $w16idd = mysqli_fetch_all($reqw16id,MYSQLI_ASSOC); if(isset($w16idd[0]['login'])){echo $w16idd[0]['login'];} $i=$w16[0]['id'];
        ?><form method="get" action="reservation.php?w16"><input type="submit" name="event_w16" value="Voir"></form><?php } ?></td>
        <td><?php $reqj16 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 16:00:00'"); 
        $j16 = mysqli_fetch_all($reqj16,MYSQLI_ASSOC); if(isset($j16[0]['titre'])){echo $j16[0]['titre'];} echo '<br>'; if(isset($j16[0]['id_utilisateur'])){$j16id=$j16[0]['id_utilisateur']; 
        $reqj16id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$j16id'"); 
        $j16idd = mysqli_fetch_all($reqj16id,MYSQLI_ASSOC); if(isset($j16idd[0]['login'])){echo $j16idd[0]['login'];} $i=$j16[0]['id'];
        ?><form method="get" action="reservation.php?j16"><input type="submit" name="event_j16" value="Voir"></form><?php } ?></td>
        <td><?php $reqv16 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 16:00:00'"); 
        $v16 = mysqli_fetch_all($reqv16,MYSQLI_ASSOC); if(isset($v16[0]['titre'])){echo $v16[0]['titre'];} echo '<br>'; if(isset($v16[0]['id_utilisateur'])){$v16id=$v16[0]['id_utilisateur']; 
        $reqv16id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$v16id'"); 
        $v16idd = mysqli_fetch_all($reqv16id,MYSQLI_ASSOC); if(isset($v16idd[0]['login'])){echo $v16idd[0]['login'];} $i=$v16[0]['id'];
        ?><form method="get" action="reservation.php?v16"><input type="submit" name="event_v16" value="Voir"></form><?php } ?></td>



        <tr><td>17h - 18h</td><td><?php $reql17 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 17:00:00'"); 
        $l17 = mysqli_fetch_all($reql17,MYSQLI_ASSOC); if(isset($l17[0]['titre'])){echo $l17[0]['titre'];} echo '<br>'; if(isset($l17[0]['id_utilisateur'])){$l17id=$l17[0]['id_utilisateur']; 
        $reql17id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$l17id'"); 
        $l17idd = mysqli_fetch_all($reql17id,MYSQLI_ASSOC); if(isset($l17idd[0]['login'])){echo $l17idd[0]['login'];} $i=$l17[0]['id'];
        ?><form method="get" action="reservation.php?l17"><input type="submit" name="event_l17" value="Voir"></form><?php } ?></td>
        <td><?php $reqm17 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 17:00:00'"); 
        $m17 = mysqli_fetch_all($reqm17,MYSQLI_ASSOC); if(isset($m17[0]['titre'])){echo $m17[0]['titre'];} echo '<br>'; if(isset($m17[0]['id_utilisateur'])){$m17id=$m17[0]['id_utilisateur']; 
        $reqm17id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$m17id'"); 
        $m17idd = mysqli_fetch_all($reqm17id,MYSQLI_ASSOC); if(isset($m17idd[0]['login'])){echo $m17idd[0]['login'];} $i=$m17[0]['id'];
        ?><form method="get" action="reservation.php?m17"><input type="submit" name="event_m17" value="Voir"></form><?php } ?></td>
        <td><?php $reqw17 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 17:00:00'"); 
        $w17 = mysqli_fetch_all($reqw17,MYSQLI_ASSOC); if(isset($w17[0]['titre'])){echo $w17[0]['titre'];} echo '<br>'; if(isset($w17[0]['id_utilisateur'])){$w17id=$w17[0]['id_utilisateur']; 
        $reqw17id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$w17id'"); 
        $w17idd = mysqli_fetch_all($reqw17id,MYSQLI_ASSOC); if(isset($w17idd[0]['login'])){echo $w17idd[0]['login'];} $i=$w17[0]['id'];
        ?><form method="get" action="reservation.php?w17"><input type="submit" name="event_w17" value="Voir"></form><?php } ?></td>
        <td><?php $reqj17 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 17:00:00'"); 
        $j17 = mysqli_fetch_all($reqj17,MYSQLI_ASSOC); if(isset($j17[0]['titre'])){echo $j17[0]['titre'];} echo '<br>'; if(isset($j17[0]['id_utilisateur'])){$j17id=$j17[0]['id_utilisateur']; 
        $reqj17id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$j17id'"); 
        $j17idd = mysqli_fetch_all($reqj17id,MYSQLI_ASSOC); if(isset($j17idd[0]['login'])){echo $j17idd[0]['login'];} $i=$j17[0]['id'];
        ?><form method="get" action="reservation.php?j17"><input type="submit" name="event_j17" value="Voir"></form><?php } ?></td>
        <td><?php $reqv17 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 17:00:00'"); 
        $v17 = mysqli_fetch_all($reqv17,MYSQLI_ASSOC); if(isset($v17[0]['titre'])){echo $v17[0]['titre'];} echo '<br>'; if(isset($v17[0]['id_utilisateur'])){$v17id=$v17[0]['id_utilisateur']; 
        $reqv17id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$v17id'"); 
        $v17idd = mysqli_fetch_all($reqv17id,MYSQLI_ASSOC); if(isset($v17idd[0]['login'])){echo $v17idd[0]['login'];} $i=$v17[0]['id'];
        ?><form method="get" action="reservation.php?v17"><input type="submit" name="event_v17" value="Voir"></form><?php } ?></td>






        <tr><td>18h - 19h</td><td><?php $reql18 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-06 18:00:00'"); 
        $l18 = mysqli_fetch_all($reql18,MYSQLI_ASSOC); if(isset($l18[0]['titre'])){echo $l18[0]['titre'];} echo '<br>'; if(isset($l18[0]['id_utilisateur'])){$l18id=$l18[0]['id_utilisateur']; 
        $reql18id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$l18id'"); 
        $l18idd = mysqli_fetch_all($reql18id,MYSQLI_ASSOC); if(isset($l18idd[0]['login'])){echo $l18idd[0]['login'];} $i=$l18[0]['id'];
        ?><form method="get" action="reservation.php?l18"><input type="submit" name="event_l18" value="Voir"></form><?php } ?></td>
        <td><?php $reqm18 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-07 18:00:00'"); 
        $m18 = mysqli_fetch_all($reqm18,MYSQLI_ASSOC); if(isset($m18[0]['titre'])){echo $m18[0]['titre'];} echo '<br>'; if(isset($m18[0]['id_utilisateur'])){$m18id=$m18[0]['id_utilisateur']; 
        $reqm18id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$m18id'"); 
        $m18idd = mysqli_fetch_all($reqm18id,MYSQLI_ASSOC); if(isset($m18idd[0]['login'])){echo $m18idd[0]['login'];} $i=$m18[0]['id'];
        ?><form method="get" action="reservation.php?m18"><input type="submit" name="event_m18" value="Voir"></form><?php } ?></td>
        <td><?php $reqw18 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-08 18:00:00'"); 
        $w18 = mysqli_fetch_all($reqw18,MYSQLI_ASSOC); if(isset($w18[0]['titre'])){echo $w18[0]['titre'];} echo '<br>'; if(isset($w18[0]['id_utilisateur'])){$w18id=$w18[0]['id_utilisateur']; 
        $reqw18id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$w18id'"); 
        $w18idd = mysqli_fetch_all($reqw18id,MYSQLI_ASSOC); if(isset($w18idd[0]['login'])){echo $w18idd[0]['login'];} $i=$w18[0]['id'];
        ?><form method="get" action="reservation.php?w18"><input type="submit" name="event_w18" value="Voir"></form><?php } ?></td>
        <td><?php $reqj18 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-09 18:00:00'"); 
        $j18 = mysqli_fetch_all($reqj18,MYSQLI_ASSOC); if(isset($j18[0]['titre'])){echo $j18[0]['titre'];} echo '<br>'; if(isset($j18[0]['id_utilisateur'])){$j18id=$j18[0]['id_utilisateur']; 
        $reqj18id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$j18id'"); 
        $j18idd = mysqli_fetch_all($reqj18id,MYSQLI_ASSOC); if(isset($j18idd[0]['login'])){echo $j18idd[0]['login'];} $i=$j18[0]['id'];
        ?><form method="get" action="reservation.php?j18"><input type="submit" name="event_j18" value="Voir"></form><?php } ?></td>
        <td><?php $reqv18 = mysqli_query($bdd, "SELECT * FROM reservations WHERE debut='2021-12-10 18:00:00'"); 
        $v18 = mysqli_fetch_all($reqv18,MYSQLI_ASSOC); if(isset($v18[0]['titre'])){echo $v18[0]['titre'];} echo '<br>'; if(isset($v18[0]['id_utilisateur'])){$v18id=$v18[0]['id_utilisateur']; 
        $reqv18id = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE id='$v18id'"); 
        $v18idd = mysqli_fetch_all($reqv18id,MYSQLI_ASSOC); if(isset($v18idd[0]['login'])){echo $v18idd[0]['login'];} $i=$v18[0]['id'];
        ?><form method="get" action="reservation.php?v18"><input type="submit" name="event_v18" value="Voir"></form><?php } ?></td></tr>
    </tbody>
</table></div>
        


<footer>
        <div class="bloc">
            <div class="leg"><a href="planning.php">Planning</br></a></div>
            <div class="repas"><a href="reservation-form.php">Reservation</a></div>
        </div>
</footer>


</body>
</html>