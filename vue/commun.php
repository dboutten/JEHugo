<?php


function menu($page) {
    ob_start();
        ?>
        <ul>
            <li><a href="index.php"><img src="logo2.png" height="40" width="40" id="logo2"></a></li>
            <li><a href="index.php?cible=page2">Page2</a></li>
            <li><a href="index.php?cible=page3">Page3</a></li>
            <li><a href="index.php"><img src="logo2.png" height="40" width="40" id="logo2"></a></li>
        </ul>
    <?php
    $menu = ob_get_clean();
    return $menu;
}