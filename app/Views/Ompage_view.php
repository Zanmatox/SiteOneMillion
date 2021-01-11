
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project OME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
  <link rel="stylesheet" href="js/script.js">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <!--Titre-->

    <div class="jumbotron text-center" id="home">
          <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <h1>Bienvenue sur the Million Euros Homepage</h1>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
              <h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
              </div>
              <div class="item">
                <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
              </div>
              <div class="item">
                <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
              </div>
            </div>
          
            <!-- Left and right controls 
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            -->
          </div>
      </div>
    <!--Test-->
    <!--Navbar-->
    
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand " href="#home">Logo</a>
            <p style="color: white;">The One Million Euros</p>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#about">A propos de</a></li>
              <li><a href="#pricing">Prix</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav> 

    <!--Pixel-->

    <td width="500" height="500">
        <div class="container-fluid">
            <map name="square">
                <area shape="rect" coords="50,20 200,200" href="https://www.google.com/" />
                <area shape="default"/>
            </map>
            <img usemap="#square" src="img/orange.jpg" width="20" height="20">
        </div>
    </td>   

<!--Container Test-->

   
      <div class="container-fluid bg-grey" id="about">
        <div class="row">
          <div class="col-sm-8">
            <h2>A propos de nous</h2>
            <h4>Bienvenue sur The Million Euros</h4>
            <p>Nous sommes une entreprise blablabla</p>
          </div>
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-signal logo"></span>
          </div>
        </div>
      </div>
      
      <div class="container-fluid ">
        <div class="row">
          <div class="col-sm-4">
            <span class="glyphicon glyphicon-globe logo"></span>
          </div>
          <div class="col-sm-8">
            <h2>Nos valeurs</h2>
            <h4><strong>MISSION:</strong> Notre mission est de récolter les fonds perçus grâces a vos achats et les verser à l'association Microfermes</h4>
            <button class="btn btn-lg"><a href="<?php echo base_url('index.php/Assospage'); ?>">En savoir plus</a></button>
          </div>
        </div>
      </div>
      <!--Prix-->

      <div class="container-fluid" id="pricing">
        <div class="text-center">
          <h2>Prix</h2>
          <h4>Choissez l'offre qui vous convient</h4>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="popup small bg-blu-6 fwm c-bw-1 text-center">Offre exclusive</div>
            <div class="down-arrow"></div>
            <div class="panel panel-default text-center orange">
             
              <div class="panel-heading">
                <h1>Premium</h1>
            </div>
              <div class="panel-body">
                <p><strong>20</strong> Lorem</p>
                <p><strong>15</strong> Ipsum</p>
                <p><strong>5</strong> Dolor</p>
                <p><strong>2</strong> Sit</p>
                <p><strong>Endless</strong> Amet</p>
              </div>
              <div class="panel-footer">
                <h3><del>49.99€</del></h3><h2>24.99€</h2>
                <h4>Par mois</h4>
                <button class="btn btn-lg">Souscrire</button>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Basic</h1>
              </div>
              <div class="panel-body">
                <p><strong>50</strong> Lorem</p>
                <p><strong>25</strong> Ipsum</p>
                <p><strong>10</strong> Dolor</p>
                <p><strong>5</strong> Sit</p>
                <p><strong>Endless</strong> Amet</p>
              </div>
              <div class="panel-footer">
                <h3>29.99€</h3>
                <h4>Par mois</h4>
                <button class="btn btn-lg">Souscrire</button>
              </div>
            </div>
          </div>
         <div class="col-sm-4">
            <div class="panel panel-default text-center">
              <div class="panel-heading">
                <h1>Pro</h1>
              </div>
              <div class="panel-body">
                <p><strong>100</strong> Lorem</p>
                <p><strong>50</strong> Ipsum</p>
                <p><strong>25</strong> Dolor</p>
                <p><strong>10</strong> Sit</p>
                <p><strong>Endless</strong> Amet</p>
              </div>
              <div class="panel-footer">
                <h3>34.99€</h3>
                <h4>Par mois</h4>
                <button class="btn btn-lg">Souscrire</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--Contact-->

      <section class="container-fluid bg-grey contact" id="contact">
        <div class="container">
          <div class="row" style="background-color:rgba(255, 255, 255, 0.7); border-radius:25px;padding:25px;">
            <h2 class="text-center">Contact</h2>
            <div class="row">
              <div class="col-sm-5">
                <!--<div class="col-sm-4">
                  <span class="glyphicon glyphicon-envelope logo"></span>
                </div>-->
                <p>Nous vous contacterons dans les 24 heures</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Champs-sur-Marne, France</p>
                <p><span class="glyphicon glyphicon-phone"></span> 0123456789</p>
                <p><span class="glyphicon glyphicon-envelope"></span> onemillion@afpa.fr</p>
              </div>
              <form method="post" action="<?php echo base_url('/ContactController/form') ?>">
                <div class="col-sm-7">
                  <div class="row">
                    <div class="col-sm-6 form-group">
                      <input class="form-control" id="name" name="Nom" placeholder="Nom" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                      <input class="form-control" id="email" name="Email" placeholder="Email" type="email" required>
                    </div>
                  </div>
                  <textarea class="form-control" id="comments" name="Message" placeholder="Message" rows="5" style="resize: none;"></textarea><br>
                  <div class="row">
                    <div class="col-sm-12 form-group">
                    <button class="btn btn-lg" type="submit" name="save">Envoyer</button> 
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section> 
<!--Footer-->

<footer class="container-fluid text-center">
    <a href="#home" title="To Top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    
  </footer>
</body>
</html>

<script>
  $(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#home']").on('click', function(event) {
  
     // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
  
      // Prevent default anchor click behavior
      event.preventDefault();
  
      // Store hash
      var hash = this.hash;
  
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
  
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
        });
      } // End if
    });
  })

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;
  
      var winTop = $(window).scrollTop();
      if (pos < winTop + 600) {
        $(this).addClass("slide");
      }
    });
  }); 
</script>
