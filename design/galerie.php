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
    <!-- Add jQuery library -->
    <script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
    <script>
            $(document).ready(function() {
        $(".fancybox-thumb").fancybox({
            helpers	: {
                title	: {
                    type: 'inside'
                },
                overlay : {
                            css : {
                                'background' : 'rgba(1,1,1,0.65)'
                            }
                        }
            }
        });
    });
        </script>
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
            <li><a href="galerie.php" class="active"><i class="icon-picture"></i> Galerie</a></li>
            <li><a href="contact.php"><i class="icon-mail"></i> Contact</a></li>
          </ul>
          <!-- Everything you want hidden at 940px or less, place within here -->
          <div class="nav-collapse collapse">
            <!-- .nav, .navbar-search, .navbar-form, etc -->
          </div>
        </div>
      </div>
    </div>
    <!-- Works container -->
    <div class="container work">
      <h2>My Work</h2>
      <ul class="work-images">
        <li>
          <div id="avant"><a class="fancybox-thumb" rel="fancybox-thumb" href="img/1.jpg" title="Image 01"><img src="img/1-thumb.jpg" /></a></div>
        </li>
        <li>
          <div id="apres"><a class="fancybox-thumb" rel="fancybox-thumb" href="img/2.jpg"><img src="img/2-thumb.jpg" /></a></div>
        </li>
        <li>
          <div id="apres"><a class="fancybox-thumb" rel="fancybox-thumb" href="img/3.jpg"><img src="img/3-thumb.jpg" /></a></div>
        </li>
      </ul>
      <ul class="work-images">
        <li>
          <div id="avant"><a class="fancybox-thumb" rel="fancybox-thumb" href="img/4.jpg"><img src="img/4-thumb.jpg" /></a></div>
        </li>
        <li>
          <div id="apres"><a class="fancybox-thumb" rel="fancybox-thumb" href="img/5.jpg"><img src="img/5-thumb.jpg" /></a></div>
        </li>
        <li>
          <div id="apres"><a class="fancybox-thumb" rel="fancybox-thumb" href="img/6.jpg"><img src="img/6-thumb.jpg" /></a></div>
        </li>
      </ul>
      <ul class="work-images">
        <li>
          <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/4.jpg"><img src="img/4-thumb.jpg" /></a></div>
        </li>
      </ul> 
      <!--Dummy images by The Fox And King :: http://dribbble.com/snootyfox-->
    </div>
    <!--END: Work container-->
    <!-- Social Icons -->
    <div class="row social">
      <ul class="social-icons">
        <li><a href="https://www.facebook.com/pages/A-LEau-Bleue-De-Paris/305059109684682?ref=hl"><img src="img/fb.png" alt="facebook"></a></li>
        <li><a href="https://twitter.com/eaubleuedeparis"><img src="img/tw.png" alt="twitter"></a></li>
        <li><a href="http://www.dailymotion.com/aleaubleuedeparis"><img src="img/dm.png" alt="google plus"></a></li>
      </ul>
    </div>
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
    <script src="js/bootstrap.min.js"></script>
    <script>
            $('#myModal').modal('hidden')
    </script>
    </body>
    </html>
