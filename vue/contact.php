<?php
    $menu = menu();
    $contenu = envoie();
    
    include 'gabarit.php';
    
    // Créons une fonction qui affiche le formulaire et l'envoie
    function envoie () {
        ob_start();
        
        if (empty($_POST)) {
            echo form ();
        } else {
            //Tests de champs vides
            global $error;
            $error=array();
            
            if (empty($_POST['nom'])) {
                $error['nom']="Vous n'avez pas donné votre nom.";
            }
            
            if (empty($_POST['tel'])) {
                $error['tel']="Vous n'avez pas donné votre numéro de téléphone.";
            }
            
            if (empty($_POST['mail'])) {
                $error['mail']="Vous n'avez pas donné votre adresse mail.";
            }
            
            if (empty($_POST['mess'])) {
                $error['mess']="Veuillez préciser votre demande.";
            }
            
            // S'il y a des champs vides on affiche le formulaire
            if (count($error)!=0) {
                echo form ();
            } else {
            
            echo ("Merci de nous avoir contacté, ".$_POST['nom']."<br/>");
            // On affiche ce que l'utilsateur a envoyé
                if (!empty($_POST['depannage']) || !empty($_POST['installation']) || !empty($_POST['conseils'])){ ?>
                    Vous avez demandé :<br/>
                    <ul>
                        <?php
                        if (!empty($_POST['depannage'])) { ?>
                            <li>un dépannage</li>
                        <?php }
                        if (!empty($_POST['installation'])) { ?>
                            <li>une installation</li>
                        <?php }
                        if (!empty($_POST['conseils'])) { ?>
                            <li>des conseils</li>
                        <?php } ?>
                    </ul>
                    Dans le domaine : <?php echo($_POST['domaine']); ?>
                    <br/><br/>
                    Votre message :<br/>
                    <?php echo($_POST['mess']); ?>
                    <br/><br/>
                    Nous vous contacterons au plus vite au coordonnées que vous avez laissés : <br/>
                    Votre numéro de téléphone : <?php echo($_POST['tel']); ?><br/>
                    Votre adresse mail : <?php echo($_POST['mail']); ?><br/><br/>
                    <?php echo envoiemail('dorine.boutten@yahoo.fr');
                
                }
            
            }
        }
        
        $envoie = ob_get_clean();
        return $envoie;
    }
    
    function form() {
        ob_start();
        global $error;
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
            <input type="text" name="nom" value="<?php echo ($_POST["nom"]);?>"><br /><br/>
        <?php }else{ ?>
            <input type="text" name="nom"><br /><br/>
        <?php } ?>

        <!-- Telephone -->
        <!-- Vérification erreur -->
        <?php if (isset($error["tel"])&&!empty($error["tel"])) { ?> <!-- si il y a une erreur et que la variable error associée à nomE existe -->
            <div class="error"><?php echo $error["tel"] ?></div> <!-- affiche l'erreur -->
        <?php } ?>
        <label for="tel">Votre numéro de téléphone :</label><br/>
        <!-- Ajout du champ prérempli -->
        <?php if( isset($_POST["tel"])){ ?>
            <input type="text" name="tel" value="<?php echo ($_POST["tel"]);?>"><br /><br/>
        <?php }else{ ?>
            <input type="text" name="tel"><br /><br/>
        <?php } ?>


        <!-- Mail -->
        <!-- Vérification erreur -->
        <?php if (isset($error["mail"])&&!empty($error["mail"])) { ?> <!-- si il y a une erreur et que la variable error associée à nomE existe -->
            <div class="error"><?php echo $error["mail"] ?></div> <!-- affiche l'erreur -->
        <?php } ?>
        <label for="mail">Votre email :</label><br/>
        <!-- Ajout du champ prérempli -->
        <?php if( isset($_POST["mail"])){ ?>
            <input type="text" name="mail" value="<?php echo ($_POST["mail"]);?>"><br /><br/>
        <?php }else{ ?>
            <input type="text" name="mail"><br /><br/>
        <?php } ?>

        <!-- Type -->
        <!-- Vérification erreur -->
        <?php if (isset($error["type"])&&!empty($error["type"])) { ?> <!-- si il y a une erreur et que la variable error associée à nomE existe -->
            <div class="error"><?php echo $error["type"] ?></div> <!-- affiche l'erreur -->
        <?php } ?>
            
        <!-- Ajout du champ prérempli -->
        <?php if( isset($_POST["depannage"]) || isset($_POST["installation"]) || isset($_POST["conseils"]) ){
            if ($_POST["depannage"]=="1"){ ?>
                <input type="checkbox" name="depannage" value="1" checked>Dépannage<br />
            <?php } else { ?>
                <input type="checkbox" name="depannage" value="1" checked>Dépannage<br />
            <?php }
            
            if ($_POST["installation"]=="1"){ ?>
                <input type="checkbox" name="installation" value="1" checked>Installation<br />
            <?php } else { ?>
                <input type="checkbox" name="installation" value="1">Installation<br />
            <?php }
            
            if ($_POST["conseils"]=="1"){ ?>
                <input type="checkbox" name="conseils" value="1" checked>Conseils<br /><br/>
            <?php } else { ?>
                <input type="checkbox" name="conseils" value="1">Conseils<br /><br/>
            <?php } ?>
        <?php }else{ ?>
            <input type="checkbox" name="depannage" value="1"/>Dépannage<br />
            <input type="checkbox" name="installation" value="1">Installation<br />
            <input type="checkbox" name="conseils" value="1">Conseils<br /><br/>
        <?php } ?>
        
        <!-- domaine -->
        <!-- Vérification erreur -->
        <?php if (isset($error["domaine"])&&!empty($error["domaine"])) { ?> <!-- si il y a une erreur et que la variable error associée à nomE existe -->
            <div class="error"><?php echo $error["domaine"] ?></div> <!-- affiche l'erreur -->
        <?php } ?>
        <!-- Ajout du champ prérempli -->
        <?php if( isset($_POST["domaine"])){ ?>
            <select name="domaine" multiple size="5" cols="30">
                <?php
                if ($_POST['domaine']=="Plomberie") { ?>
                    <option value="Plomberie" selected="selected">Plomberie</option>
                <?php } else { ?>
                    <option value="Plomberie">Plomberie</option>
                <?php }
                if ($_POST['domaine']=="Electricité") { ?>
                    <option value="Electricité" selected="selected">Electricité</option>
                <?php } else { ?>
                    <option value="Electricité">Electricité</option>
                <?php }
                if ($_POST['domaine']=="Serrurerie") { ?>
                    <option value="Serrurerie" selected="selected">Serrurerie</option>
                <?php } else { ?>
                    <option value="Serrurerie">Serrurerie</option>
                <?php }
                if ($_POST['domaine']=="Maçonnerie") { ?>
                    <option value="Maçonnerie" selected="selected">Maçonnerie</option>
                <?php } else { ?>
                    <option value="Maçonnerie">Maçonnerie</option>
                <?php }
                if ($_POST['domaine']=="Menuiserie") { ?>
                    <option value="Menuiserie" selected="selected">Menuiserie</option>
                <?php } else { ?>
                    <option value="Menuiserie">Menuiserie</option>
                <?php }
                if ($_POST['domaine']=="Peinture") { ?>
                    <option value="Peinture" selected="selected">Peinture</option>
                <?php } else { ?>
                    <option value="Peinture">Peinture</option>
                <?php }
                if ($_POST['domaine']=="Chauffage") { ?>
                    <option value="Chauffage" selected="selected">Chauffage</option>
                <?php } else { ?>
                    <option value="Chauffage">Chauffage</option>
                <?php }
                if ($_POST['domaine']=="Vitrerie") { ?>
                    <option value="Vitrerie" selected="selected">Vitrerie</option>
                <?php } else { ?>
                    <option value="Vitrerie">Vitrerie</option>
                <?php }
                if ($_POST['domaine']=="Carrelage") { ?>
                    <option value="Carrelage" selected="selected">Carrelage</option>
                <?php } else { ?>
                    <option value="Carrelage">Carrelage</option>
                <?php }
                if ($_POST['domaine']=="Décoration") { ?>
                    <option value="Décoration" selected="selected">Décoration</option>
                <?php } else { ?>
                    <option value="Décoration">Décoration</option>
                <?php }
                if ($_POST['domaine']=="Aménagement") { ?>
                    <option value="Aménagement" selected="selected">Aménagement</option>
                <?php } else { ?>
                    <option value="Aménagement">Aménagement</option>
                <?php } ?>
            </select><br/><br/>
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
            </select><br/><br/>
        <?php } ?>
        
        
        <!-- Message -->
        <!-- Vérification erreur -->
        <?php if (isset($error["mess"])&&!empty($error["mess"])) { ?> <!-- si il y a une erreur et que la variable error associée à nomE existe -->   
            <div class="error"><?php echo $error["mess"]; ?></div> <!-- affiche l'erreur -->
        <?php } ?>
        <label for="mess">Votre message :</label></br>
        <!-- Ajout du champ prérempli -->
        <?php if( isset($_POST["mess"])){ ?>
            <textarea name="mess" rows="8" cols="45"><?php echo $_POST["mess"]; ?></textarea> <br /><br/>
        <?php }else{ ?>
            <textarea name="mess" rows="8" cols="45"></textarea> <br /><br/>
        <?php } ?>
            
        <input type="submit" value="Envoyer" />

        </form>
        <?php
        $form = ob_get_clean();
        return $form;
    }
    
    function envoiemail($mail){
    ob_start();

    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail))
    {
        $passage_ligne = "\r\n";
    }
    else
    {
        $passage_ligne = "\n";
    }
    
    //=====Déclaration des messages au format texte et au format HTML.
    $message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
    $message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";

    $boundary = "-----=".md5(rand());
    
    $sujet = "hey mon ami !";

    // Création du header de l'e-mail
    $header = "From: <dorine.boutten@yahoo.fr>".$passage_ligne;
    $header .= "Reply-to: \"site\" <dorine.boutten@yahoo.fr>".$passage_ligne;
    $header .= "MIME-Version: 1.0".$passage_ligne;
    $header .= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
    
    // Création du contenu
    $message = $passage_ligne."--".$boundary.$passage_ligne;
    $message .= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
    $message .= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $message.= $passage_ligne.$message_txt.$passage_ligne;
    
    $message.= $passage_ligne."--".$boundary.$passage_ligne;
    
    //=====Ajout du message au format HTML
    $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
    $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
    $message.= $passage_ligne.$message_html.$passage_ligne;
    
    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
    $message.= $passage_ligne."--".$boundary."--".$passage_ligne;

    //=====Envoi de l'e-mail.
    mail($mail,$sujet,$message,$header);
    //mail('dorine.boutten@yahoo.fr','hello','hello');
    echo("bonjour");

    
    $envoiemail=ob_get_clean();
    return $envoiemail;
}