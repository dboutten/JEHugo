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
      <h4>23 rue de Richelieu</br>
          75001 Paris</br>
            </br>
            0 805 69 68 65 (Appel gratuit)</br>
            06 59 50 67 37 (Urgences)</br>
            01 84 17 65 43 (Bureaux)</h4>

    <?php
        echo(envoie());

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

                if (empty($_POST['depannage']) && empty($_POST['installation']) && empty($_POST['conseils'])) {
                    $error['type']="Vous devez préciser quel travail est demandé.";
                }

                if (empty($_POST['domaine'])) {
                    $error['domaine']="Veuillez préciser au moins un domaine.";
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
                    <?php }

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
        } ?>



    </div>
    <!--END: Resume container-->
    <!-- Social Icons -->
    <!--<div class="row social">
      <ul class="social-icons">
        <li><a href="#" target="_blank"><img src="img/fb.png" alt="facebook"></a></li>
        <li><a href="#" target="_blank"><img src="img/tw.png" alt="twitter"></a></li>
        <li><a href="#" target="_blank"><img src="img/go.png" alt="google plus"></a></li>
        <li><a href="#" target="_blank"><img src="img/pin.png" alt="pinterest"></a></li>
        <li><a href="#" target="_blank"><img src="img/st.png" alt="stumbleupon"></a></li>
        <li><a href="#" target="_blank"><img src="img/dr.png" alt="dribbble"></a></li>
      </ul>
    </div>-->
    <!-- END: Social Icons -->
    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <p>23 rue de Richelieu 75001 Paris - S.A.R.L. au capital de 10 000 € - RCS Paris B 750 314 510 - SIRET 75031451000017 - NAF-APE: 4322A</p>
      </div>
    </div>
    <!-- Contact form in Modal -->
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"><i class="icon-mail"></i> Contact Me</h3>
      </div>
      <div class="modal-body">
        <form>
          <input type="text" placeholder="Yopur Name">
          <input type="text" placeholder="Your Email">
          <input type="text" placeholder="Website (Optional)">
          <textarea rows="3" style="width:80%"></textarea>
          <br/>
          <button type="submit" class="btn btn-large"><i class="icon-paper-plane"></i> SUBMIT</button>
        </form>
      </div>
    </div>
    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
            $('#myModal').modal('hidden')
    </script>
    </body>
    </html>
