<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>A l'eau bleue de Paris</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Flat Design Mini Portfolio">
        <meta name="keywords" content="responsive, bootstrap, flat design, flat ui, portfolio">
        <meta name="author" content="Dzyngiri">
        <meta name="description" content="This is a responsive flat design mini portfolio for creative folks who want to showcase their work online.">
        <!-- styles -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="font/css/fontello.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
        <!-- scripts -->
    </head>
    <body>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container"> 
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <!--<a class="brand" href="index.html"><img src="img/user.jpg"/></a>-->
              <ul class="nav nav-collapse">
                <li><a href="index.php"><i class="icon-user"></i> Accueil</a></li>
                <li><a href="prestations.php"><i class="icon-doc-text"></i> Prestations</a></li>
                <li><a href="tarifs.php">€ Tarifs</a></li>
                <li><a href="galerie.php"><i class="icon-picture"></i> Galerie</a></li>
                <li><a href="contact.php" class="active"><i class="icon-mail"></i> Contact</a></li>
              </ul>
              <!-- Everything you want hidden at 940px or less, place within here -->
              <div class="nav-collapse collapse">
                <!-- .nav, .navbar-search, .navbar-form, etc -->
              </div>
            </div>
          </div>
        </div>
        <!-- Resume container -->
        <div class="container resume contact">
          <h2>A l'Eau Bleue De Paris</h2>
          <h4>Siège social : 23 rue de Richelieu, 75001 Paris</br>
            Boutique : 5 Bis rue du Dahomey, 75011 Paris </br>
                </br>
                0 805 69 68 65 (Appel gratuit)</br>
                06 59 50 67 37 (Urgences)</br>
                01 84 17 65 43 (Bureaux)</br>
                09 81 96 06 06 (Boutique)</br></h4>
            <div class="formulaire modal-body">
                <?php
                    echo(envoie());
                ?>

            </div>
        </div>
        <!--END: Resume container-->
        <!-- Social Icons -->
        <div class="row social">
          <ul class="social-icons">
            <li><a href="https://www.facebook.com/pages/A-LEau-Bleue-De-Paris/305059109684682?ref=hl"><img src="img/fb.png" alt="facebook"></a></li>
            <li><a href="https://twitter.com/eaubleuedeparis"><img src="img/tw.png" alt="twitter"></a></li>
            <li><a href="http://www.dailymotion.com/aleaubleuedeparis"><img src="img/dm.png" alt="google plus"></a></li>
          </ul>
        </div>
        <!-- END: Social Icons -->
        <!-- Footer -->
        <div class="footer">
          <div class="container">
            <p>23 rue de Richelieu 75001 Paris - S.A.R.L. au capital de 10 000 € - RCS Paris B 750 314 510 - SIRET 75031451000017 - NAF-APE: 4322A</p>
          </div>
        </div>
        <!-- Contact form in Modal -->
        <!-- Modal -->

        <!-- Scripts -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
                $('#myModal').modal('hidden')
        </script>
    </body>
</html>

<?php
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

        echo ("<h4>Merci de nous avoir contacté, ".$_POST['nom']."</h4><br/>");
        // On affiche ce que l'utilsateur a envoyé
            if (!empty($_POST['depannage']) || !empty($_POST['installation']) || !empty($_POST['conseils'])){ ?>
                <h4>Vous avez demandé :</h4>
                <ul style="list-style-type: none;" >
                    <?php
                    if (!empty($_POST['depannage'])) { ?>
                        <li><h4>un dépannage</h4></li>
                    <?php }
                    if (!empty($_POST['installation'])) { ?>
                        <li><h4>une installation</h4></li>
                    <?php }
                    if (!empty($_POST['conseils'])) { ?>
                        <li><h4>des conseils</h4></li>
                    <?php }
            }
            if (!empty($_POST['domaine'])){ ?>
                </ul>
                <h4>Le domaine qui vous interresse : <?php echo($_POST['domaine']); ?></h4>
                <br/><br/>
            <?php } ?>
                <h4>Votre message :<br/>
                <?php echo($_POST['mess']); ?>
                <br/><br/>
                Nous vous contacterons au plus vite aux coordonnées que vous avez laissées : <br/>
                Votre numéro de téléphone : <?php echo($_POST['tel']); ?><br/>
                Votre adresse mail : <?php echo($_POST['mail']); ?><br/><br/></h4>
                <?php
                
                // On écrit le message à envoyer
                $mail = $_POST['mail'];
                $message_txt=$_POST['nom']." vous a envoyé un message. ";
                if (!empty($_POST['depannage']) || !empty($_POST['installation']) || !empty($_POST['conseils'])){
                    $message_txt.="Il/Elle souhaite ";
                    if (!empty($_POST['depannage'])) { 
                        $message_txt.="un dépannage, ";
                    }
                    if (!empty($_POST['installation'])) { 
                        $message_txt.="une installation, ";
                    }
                    if (!empty($_POST['conseils'])) { 
                        $message_txt.="des conseils, ";
                    }
                }
                if (!empty($_POST['domaine'])){
                    $message_txt.="Le domaine qui l'intéresse est : ".($_POST['domaine']).". ";
                }
                
                $message_txt.="Son message : ".$_POST['mess']." <br/>Pour le contacter : Téléphone = ".$_POST['tel']." ; son Mail = ".$_POST['mail'];
                $message_html=$message_txt;
                echo ($message_html);
                
                // On envoie le mail
                $envoiemail = envoiemail($mail,$message_txt, $message_html);
                if ($envoie == true) {
                    echo ("le message a été envoyé");
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
    <label for="nom"><h4>Votre nom :</h4></label><br/>
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
    <label for="tel"><h4>Votre numéro de téléphone :</h4></label><br/>
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
    <label for="mail"><h4>Votre email :</h4></label><br/>
    <!-- Ajout du champ prérempli -->
    <?php if( isset($_POST["mail"])){ ?>
        <input type="text" name="mail" value="<?php echo ($_POST["mail"]);?>"><br /><br/>
    <?php }else{ ?>
        <input type="text" name="mail"><br /><br/>
    <?php } ?>

    <!-- Type -->
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
        <h4><input type="checkbox" name="depannage" value="1"/>  Dépannage<br />
        <input type="checkbox" name="installation" value="1">  Installation<br />
        <input type="checkbox" name="conseils" value="1">  Conseils<br /><br/></h4>
    <?php } ?>

    <!-- domaine -->
    <!-- Ajout du champ prérempli -->
    <?php if( isset($_POST["domaine"])){ ?>
        <h4><select name="domaine" multiple size="5" cols="30">
            <?php
            if ($_POST['domaine']=="Plomberie") { ?>
                <h4><option value="Plomberie" selected="selected">Plomberie</option></h4>
            <?php } else { ?>
                <h4><option value="Plomberie">Plomberie</option></h4>
            <?php }
            if ($_POST['domaine']=="Electricité") { ?>
                <h4><option value="Electricité" selected="selected">Electricité</option></h4>
            <?php } else { ?>
                <h4><option value="Electricité">Electricité</option></h4>
            <?php }
            if ($_POST['domaine']=="Serrurerie") { ?>
                <h4><option value="Serrurerie" selected="selected">Serrurerie</option></h4>
            <?php } else { ?>
                <h4><option value="Serrurerie">Serrurerie</option></h4>
            <?php }
            if ($_POST['domaine']=="Maçonnerie") { ?>
                <h4><option value="Maçonnerie" selected="selected">Maçonnerie</option></h4>
            <?php } else { ?>
                <h4><option value="Maçonnerie">Maçonnerie</option></h4>
            <?php }
            if ($_POST['domaine']=="Menuiserie") { ?>
                <h4><option value="Menuiserie" selected="selected">Menuiserie</option></h4>
            <?php } else { ?>
                <h4><option value="Menuiserie">Menuiserie</option></h4>
            <?php }
            if ($_POST['domaine']=="Peinture") { ?>
                <h4><option value="Peinture" selected="selected">Peinture</option></h4>
            <?php } else { ?>
                <h4><option value="Peinture">Peinture</option></h4>
            <?php }
            if ($_POST['domaine']=="Chauffage") { ?>
                <h4><option value="Chauffage" selected="selected">Chauffage</option></h4>
            <?php } else { ?>
                <h4><option value="Chauffage">Chauffage</option></h4>
            <?php }
            if ($_POST['domaine']=="Vitrerie") { ?>
                <h4><option value="Vitrerie" selected="selected">Vitrerie</option></h4>
            <?php } else { ?>
                <h4><option value="Vitrerie">Vitrerie</option></h4>
            <?php }
            if ($_POST['domaine']=="Carrelage") { ?>
                <h4><option value="Carrelage" selected="selected">Carrelage</option></h4>
            <?php } else { ?>
                <h4><option value="Carrelage">Carrelage</option></h4>
            <?php }
            if ($_POST['domaine']=="Décoration") { ?>
                <h4><option value="Décoration" selected="selected">Décoration</option></h4>
            <?php } else { ?>
                <h4><option value="Décoration">Décoration</option></h4>
            <?php }
            if ($_POST['domaine']=="Aménagement") { ?>
                <h4><option value="Aménagement" selected="selected">Aménagement</option></h4>
            <?php } else { ?>
                <h4><option value="Aménagement">Aménagement</option></h4>
            <?php } ?>
        </select></h4><br/><br/>
    <?php }else{ ?>
        <select name="domaine" multiple size="5" rows="3" style="width:80%">
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
    <label for="mess"><h4>Votre message :</h4></label></br>
    <!-- Ajout du champ prérempli -->
    <?php if( isset($_POST["mess"])){ ?>
        <textarea name="mess" rows="3" style="width:80%"><?php echo $_POST["mess"]; ?></textarea> <br /><br/>
    <?php }else{ ?>
        <textarea name="mess" rows="3" style="width:80%"></textarea> <br /><br/>
    <?php } ?>

    <input type="submit" class="btn btn-info" value="Envoyer" />

    </form>
    <?php
    $form = ob_get_clean();
    return $form;
}

function envoiemail($mail, $message_txt, $message_html){
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
    //$message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
    //$message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";

    $boundary = "-----=".md5(rand());
    
    $sujet = "Message de Aleaubleuedeparis";

    // Création du header de l'e-mail
    $header = "From: <$mail>".$passage_ligne;
    $header .= "Reply-to: <$mail>".$passage_ligne;
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
    mail('dorine.boutten@yahoo.fr',$sujet,$message,$header);
    //mail('dorine.boutten@yahoo.fr','hello','hello');

    
    $envoiemail=ob_get_clean();
    return $envoiemail;
}

