<?php
    require("vue/commun.php");

    if(isset($_GET['cible'])) { // Si on a cliqué sur un lien
        if ($_GET['cible']=='page2') {
            include ("vue/page2.php");
        }
        if ($_GET['cible']=='page3') {
            include ("vue/page3.php");
        }
    } else {
        include ("vue/accueil.php");
    }
    
    ?>