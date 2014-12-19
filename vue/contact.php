<?php
    $menu = menu();
    $contenu = envoie();
    
    include 'gabarit.php';
    
    // Créons une fonction qui affiche le formulaire et l'envoie
    function envoie () {
        ob_start();
        
        if (empty($_POST)) {
            echo form () ;
        } else {
            echo ("formulaire envoyé<br />");
            echo ($_POST['domaine']);
            // On affiche ce que l'utilsateur a envoyé
            if (!empty($_POST['depannage']) || !empty($_POST['installation']) || !empty($_POST['conseils'])){
            echo ("Vous avez demandé :");
            if (!empty($_POST['depannage'])) {
                echo "<br/>un dépannage";
            }
            if (!empty($_POST['installation'])) {
                echo "<br/>une installation";
            }
            if (!empty($_POST['conseils'])) {
                echo "<br/>des conseils";
            }
            }
        }
        
        $envoie = ob_get_clean();
        return $envoie;
    }
    
    function form() {
        ob_start();
        ?>
        <form method="post">
        
        <!-- Nom -->
        <!-- Vérification erreur -->
        <?php if (isset($error["nom"])&&!empty($error["nom"])) { ?> <!-- si il y a une erreur et que la variable error associée à nomE existe -->
            <div class="error"><?php echo $error["nom"] ?></div> <!-- affiche l'erreur -->
        <?php } ?>
        <label for="nom">Votre nom :</label><br/>
        <!-- Ajout du champ prérempli -->
        <?php if( isset($_POST["nom"])){ ?>
            <input type="text" name="nom" value="<?php echo ($_POST["nom"]);?>"><br />
        <?php }else{ ?>
            <input type="text" name="nom"><br />
        <?php } ?>

        <!-- Telephone -->
        <!-- Vérification erreur -->
        <?php if (isset($error["tel"])&&!empty($error["tel"])) { ?> <!-- si il y a une erreur et que la variable error associée à nomE existe -->
            <div class="error"><?php echo $error["tel"] ?></div> <!-- affiche l'erreur -->
        <?php } ?>
        <label for="tel">Votre numéro de téléphone :</label><br/>
        <!-- Ajout du champ prérempli -->
        <?php if( isset($_POST["tel"])){ ?>
            <input type="text" name="tel" value="<?php echo ($_POST["tel"]);?>"><br />
        <?php }else{ ?>
            <input type="text" name="tel"><br />
        <?php } ?>


        <!-- Mail -->
        <!-- Vérification erreur -->
        <?php if (isset($error["mail"])&&!empty($error["mail"])) { ?> <!-- si il y a une erreur et que la variable error associée à nomE existe -->
            <div class="error"><?php echo $error["mail"] ?></div> <!-- affiche l'erreur -->
        <?php } ?>
        <label for="mail">Votre email :</label><br/>
        <!-- Ajout du champ prérempli -->
        <?php if( isset($_POST["mail"])){ ?>
            <input type="text" name="mail" value="<?php echo ($_POST["mail"]);?>"><br />
        <?php }else{ ?>
            <input type="text" name="mail"><br />
        <?php } ?>

        <!-- Type -->
        <!-- Vérification erreur -->
        <?php if (isset($error["type"])&&!empty($error["type"])) { ?> <!-- si il y a une erreur et que la variable error associée à nomE existe -->
            <div class="error"><?php echo $error["type"] ?></div> <!-- affiche l'erreur -->
        <?php } ?>
            
        <!-- Ajout du champ prérempli -->
        <?php if( isset($_POST["type"])){ ?>
            <input type="checkbox" name="depannage" value="1" checked />Dépannage<br />
            <input type="checkbox" name="installation" value="1">Installation<br />
            <input type="checkbox" name="conseils" value="1">Conseils<br />
        <?php }else{ ?>
            <input type="checkbox" name="depannage" value="1"/>Dépannage<br />
            <input type="checkbox" name="installation" value="1">Installation<br />
            <input type="checkbox" name="conseils" value="1">Conseils<br />
        <?php } ?>
        
        <!-- domaine -->
        <!-- Vérification erreur -->
        <?php if (isset($error["domaine"])&&!empty($error["domaine"])) { ?> <!-- si il y a une erreur et que la variable error associée à nomE existe -->
            <div class="error"><?php echo $error["domaine"] ?></div> <!-- affiche l'erreur -->
        <?php } ?>
        <!-- Ajout du champ prérempli -->
        <?php if( isset($_POST["domaine"])){ ?>
            <select name="domaine" multiple size="5" cols="30">
                <option value="Plomberie">Plomberie</option>
                <option value="Electricité">Electricité</option>
                <option value="Serrurerie">Serrurerie</option>
                <option value="Maçonnerie">Maçonnerie</option>
                <option value="Menuiserie">Menuiserie</option>
                <option value="Peinture">Peinture</option>
                <option value="Chauffage">Chauffage</option>
                <option value="Vitrerie">Vitrerie</option>
                <option value="Carrelage">Carrelage</option>
                <option value="Décoration">Décoration</option>
                <option value="Aménagement">Aménagement</option>
            </select>
        <?php }else{ ?>
            <select name="domaine" multiple size="5" cols="30">
                <option value="Plomberie">Plomberie</option>
                <option value="Electricité">Electricité</option>
                <option value="Serrurerie">Serrurerie</option>
                <option value="Maçonnerie">Maçonnerie</option>
                <option value="Menuiserie">Menuiserie</option>
                <option value="Peinture">Peinture</option>
                <option value="Chauffage">Chauffage</option>
                <option value="Vitrerie">Vitrerie</option>
                <option value="Carrelage">Carrelage</option>
                <option value="Décoration">Décoration</option>
                <option value="Aménagement">Aménagement</option>
            </select>
        <?php } ?>
            
        <input type="submit" value="Valider" />

        </form>
        <?php
        $form = ob_get_clean();
        return $form;
    }