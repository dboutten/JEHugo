<?php


function menu($page) {
    ob_start();
        ?>
        <ul>
            <li><a href="index.php"><img src="logo2.png" height="40" width="40" id="logo2"></a></li>
            <li><a href="index.php?cible=prestations">Prestations</a></li>
            <li><a href="index.php?cible=tarifs">Tarifs</a></li>
            <li><a href="index.php?cible=galerie">Galerie</a></li>
            <li><a href="index.php?cible=contact">Contact</a></li>
            <li><a href="index.php"><img src="logo2.png" height="40" width="40" id="logo2"></a></li>
        </ul>
    <?php
    $menu = ob_get_clean();
    return $menu;
}