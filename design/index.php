    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>A l'eau bleue de Paris</title>
    <meta name="description" content="Flat Design Mini Portfolio">
    <meta name="keywords" content="responsive, bootstrap, flat design, flat ui, portfolio">
    <meta name="author" content="Dzyngiri">
    <meta name="description" content="This is a responsive flat design mini portfolio for creative folks who want to showcase their work online.">
    <!-- styles -->
    <link href="css/bootstrap-accueil.css" rel="stylesheet">
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
            <li><a href="index.php" class="active"><i class="icon-user"></i> Accueil</a></li>
            <li><a href="prestations.php"><i class="icon-doc-text"></i> Prestations</a></li>
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
    <!--Profile container-->
    <div class="banner">
    <div class="container profile">
      <div class="span5"> <img src="img/eaubleue_vector.png" id="image-accueil"> </div>
      <div class="span5 accueil-texte">
        <h1>A l'eau bleue de Paris</h1>
        <h3>Artisan Designer Créateur</h3>
        <p> Rénovation dans l'Ancien - Spécialiste / Conseil
            Peinture Carrelage Maçonnerie Menuiserie Serrurerie Décoration Aménagement </p>
        </br>
        <p>Plomberie Electricité</p>
        <p>Boutique: 5 Bis rue du Dahomey, 75011 Paris</p>
        <h3>7/7 24/24</h3>    
        <!--<a href="#" class="hire-me"><i class="icon-paper-plane"></i> Hire Me </a>-->

      </div>
    </div>
    <div class="telephone container">
        <div class="hire-me"><div class="numero"> 01 84 17 65 43 </div><div class="texte_numero">Bureaux</div></div>
        <div class="hire-me"><div class="numero"> 06 59 50 67 37 </div><div class="texte_numero">Urgences</div></div>
    </div>
    </div>
    <!--END: Profile container-->
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
