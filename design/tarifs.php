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
            <li><a href="tarifs.php" class="active">€ Tarifs</a></li>
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
    <!-- Resume container -->
    <div class="container resume">
      <h2>Tarifs (T.V.A.: 7%)</h2>
      
      <table class="table table-hover">
        <tr>
          <h4><td>D&eacute;placement (75001, 75002, 75003, 75004)</td></h4>
          <h4><td align=right>26 &euro; HT</td></h4>
        </tr>
        <tr>
          <h4><td>Main d'Oeuvre Horaire</td></h4>
          <h4><td align=right>46 &euro; HT</td></h4>
        </tr>
        <tr>
          <h4><td>D&eacute;gorgements</td></h4>
          <h4><td align=right>70 &euro; HT</td></h4>
        </tr>  
        <tr>
          <h4><td>D&eacute;gorgements + D&eacute;pose/Repose</td></h4>
          <h4><td align=right>159 &euro; HT</td></h4>
        </tr>
        <tr>
          <h4><td>Remise en route chaudi&egrave;re toutes marques</td></h4>
          <h4><td align=right>80 &euro; HT</td></h4>
        </tr>
      </table>

      <h4>Exemple: Fuite d'eau = Déplacement + Main d'Oeuvre Horaire + Devis</h4>
      

      <h2>Changement et fourniture d'un mitigeur chromé de marque Allia</h2>
      <table class="table table-hover">
        <tr>
          <h4><td>De cuisine avec soudure</td></h4>
          <td align=right>139 &euro; TTC</td>
        </tr>
        <tr>
          <td>De douche avec soudure</td>
          <td align=right>139 &euro; TTC</td>
        </tr>
        <tr>
          <td>De baignoire avec soudure</td>
          <td align=right>179 &euro; TTC</td>
        </tr>
      </table> 

      <h4 id="devis">Devis systématique pour toutes réparations dépassant 150 €</h4>
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
