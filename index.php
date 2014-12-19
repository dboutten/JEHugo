<?php
    require("vue/commun.php");

    if(isset($_GET['cible'])) { // Si on a cliqué sur un lien
        if ($_GET['cible']=='prestations') {
            include ("vue/prestations.php");
        }
        if ($_GET['cible']=='tarifs') {
            include ("vue/tarifs.php");
        }
        if ($_GET['cible']=='galerie') {
            include ("vue/galerie.php");
        }
        if ($_GET['cible']=='contact') {
            include ("vue/contact.php");
        }
    } else {
        include ("vue/accueil.php");
    }
    
    ?>