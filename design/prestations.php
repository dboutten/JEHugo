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
    </head>
    <body>
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
         <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <!--<a class="brand" href="index.html"><img src="img/user.jpg"/></a>-->
          <ul class="nav nav-collapse">
            <li><a href="index.php"><i class="icon-user"></i> Accueil</a></li>
            <li><a href="prestations.php" class="active"><i class="icon-doc-text"></i> Prestations</a></li>
            <li><a href="tarifs.php">€ Tarifs</a></li>
            <li><a href="galerie.php"><i class="icon-picture"></i> Galerie</a></li>
            <li><a href="contact.php"><i class="icon-mail"></i> Contact</a></li>
          </ul>
          <!-- Everything you want hidden at 940px or less, place within here -->
          <div class="nav-collapse collapse">
            <!-- .nav, .navbar-search, .navbar-form, etc -->
          </div>
        </div>
      </div>
    </div>
    <!--Skills container-->
    <div class="container skills">
      <h2>Le service et la compétence d'ouvriers spécialisés</h2>
      <h3>7 jours sur 7, 24 heures sur 24, toute l'année!</h3>
      <h4>L'expérience d'une équipe de professionnels pour l'entretien de biens immobiliers, au service de nombreux syndics,
administrateurs de biens, hôtels et particuliers sur Paris et sa banlieue depuis 1997.</h4>
    </br>
      <h2>Plomberie, Chauffage, Recherche de fuite, Dégorgement</h2>
      <div class="row">
        <div class="span3">
          <div class="ps">
            <img src="img/chauffage.png">
          </div>
        </div>
        <div class="span6">
          <h3>Chauffagiste & Conseils en chauffage </h3>
          <h4>Installation de chaudières et de chauffe-eau</br>
            Installation du gaz, professionnel agréé Qualigaz</br>
            Maintenance et nettoyage de chaudières</br>
            Réparation et entretien de chauffages et de chaudières</br>
            Marques: Pacific/Thermor - Atlantic - Maury...</h4>
        </div>
      </div>
      <div class="row">
        <div class="span3">
          <div class="ai">
            <img src="img/plomberie.png">
          </div>
        </div>
        <div class="span6">
          <h3>Plomberie </h3>
          <h4>Installation d'équipements sanitaires et de salles de bain</br>
            Pose de canalisations d'eau</br>
            Pose de Sanibroyeur spécialiste SFA</br>
            Réparation d'équipements sanitaires</br>
            Détartrage</h4>
        </div>
      </div>
      <h2></br>Serrurerie, Vitrerie, Electricité, Menuiserie, Maçonnerie, Carrelage...</h2>
      <div class="row">
        <div class="span3">
          <div class="html">
            <img src="img/serrurerie.png">
          </div>
        </div>
        <div class="span6">
          <h3>Serrurerie </h3>
          <h4>Serrurerie toutes marques : Fichet - Muel - Picard - Bricard...</h4>
        </div>
      </div>
      <div class="row">
        <div class="span3">
          <div class="css">
            <img src="img/fenetre.png">
          </div>
        </div>
        <div class="span6">
          <h3>Vitrerie </h3>
          <h4>Vitrerie de tous types: Double-vitrage - Stadip anti-effraction...</h4>
        </div>
      </div>
      <div class="row">
        <div class="span3">
          <div class="elec">
            <img src="img/electricite.png">
          </div>
        </div>
        <div class="span6">
          <h3>Electricité </h3>
          <h4>Electricité toutes marques : E.L.M. Leblanc...</h4>
        </div>
      </div>
    </div>
    <!--END: Skills container-->
    <!-- Social Icons -->
    <div class="row social">
      <!--<ul class="social-icons">
        <li><a href="#" target="_blank"><img src="img/fb.png" alt="facebook"></a></li>
        <li><a href="#" target="_blank"><img src="img/tw.png" alt="twitter"></a></li>
        <li><a href="#" target="_blank"><img src="img/go.png" alt="google plus"></a></li>
        <li><a href="#" target="_blank"><img src="img/pin.png" alt="pinterest"></a></li>
        <li><a href="#" target="_blank"><img src="img/st.png" alt="stumbleupon"></a></li>
        <li><a href="#" target="_blank"><img src="img/dr.png" alt="dribbble"></a></li>
      </ul>-->
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
