<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Sander Portfolio Website</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="/img/S.png">
      <script src="https://kit.fontawesome.com/74d4deb932.js" crossorigin="anonymous"></script>
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="/css/sander-style.css" />
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   </head>
   <body>

      <!--Navbar / Header-->

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <a href="https://sandervanboxtel.github.io"><img class="logonav" src="/img/SanderLogo.png"/></a>
         <!--<a class="navbar-brand" href="https://sandervanboxtel.github.io/">Sander</a>-->
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse w-100 order-3 dual-collapse2" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#aboutme">About me</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#contactme">Contact</a>
               </li>
            </ul>
         </div>
      </nav>

      <!--Carousel / ImageSlider-->

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="d-block w-100" src="img/mountains.png" alt="First slide">
               <div class="carousel-caption">
                  <h1 class="line1 anim-typewriter">Ik ben Sander</h1>
                  <br>
                  <a href="#aboutme"><button type="button" class="btn btn-default">Read More</button></a>
               </div>
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="img/snow.jpg" alt="Second slide">
               <div class="carousel-caption">
                  <h1 class="line2 anim-typewriter2">Ik ben een Developer</h1>
                  <br>
                  <a href="#aboutme"><button type="button" class="btn btn-default">Read More</button></a>
               </div>
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="img/mountainssky.jpg" alt="Third slide">
               <div class="carousel-caption">
                  <h1 class="line3 anim-typewriter3">Ik ben een Gamer</h1>
                  <br>
                  <a href="#aboutme"><button type="button" class="btn btn-default">Read More</button></a>
               </div>
            </div>
         </div>

         <!--Carousel / Imageslider Controls-->

         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>

      <!--About Me-->

      <div id="aboutme"></div>
      <div class="homewrapper" data-aos="fade-up" data-aos-once="true" data-aos-duration="1300">
         <h1 class="aboutmetitle">About me</h1>
      <hr class="borderline1">
         <center>
            <div class="txtbox">
               <p>Hallo mijn naam is <a style="text-decoration: none;" class="txtboxstyling" href="https://sandervanboxtel.github.io/">Sander</a> en ik ben een Web-Developer!
                  Ik ben 17 jaar en beoefen de sport Judo, ik heb nu de blauwe band (4e Kyu). 
                  In mijn vrije tijd houd ik er van om te gamen en om met computers bezig te zijn.
                  Omdat ik veel met computers bezig ben en het leuk vind besloot ik al snel om de opleiding <a style="text-decoration: none;" class="txtboxstyling" href="https://www.roc-nijmegen.nl/student/opleidingen/beroepsopleidingen/beroepsopleiding/249-applicatieontwikkelaar-01427o" target="_blank">Applicatie-en Mediaontwikkelaar</a> te volgen in Nijmegen (Technovium).
                  Ik zit nu in het 2e jaar van mijn opleiding en loop nu stage bij branding bureau <a style="text-decoration: none;" class="txtboxstyling" href="https://byron.nl/" target="_blank">Byron</a>. Ik heb het hier erg naar mijn zin.
                  Scroll naar beneden om mijn vaardigheden te checken!
               </p>
            </div>
         </center>

         <!--My Skills-->

         <h1 class="aboutmetitle">My skills</h1>
         <hr class="borderline">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-sm-12 col-md-4">
                  <div class="card shadow" style="width: 100%;">
                     <div class="inner">
                        <img class="card-img-top cardimgs" src="img/html5.png" alt="Card image cap">
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">HTML5</h5>
                        <p class="card-text"><a style="text-decoration: none;" class="txtboxstyling" href="https://nl.wikipedia.org/wiki/HyperText_Markup_Language" target="_blank">HTML</a> is als het ware het skelet van de website (head, body, footer). Ik vind het coderen van websites leuk en had al snel de fijne kneepjes van de codeertaal HTML door.                        
                           <h5><a href="#hidden" style="text-decoration: none;" data-toggle="collapse" class="h5txtstyle">Meer informatie over HTML 5</a></h5>
                           <div id="hidden" class="collapse">                              
                              <p>HyperText Markup Language (afgekort HTML) is een op SGML gebaseerde opmaaktaal voor de specificatie van documenten, voornamelijk bedoeld voor het wereldwijde web.</p>
                           </div>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12 col-md-4">
                  <div class="card shadow" style="width: 100%;">
                     <div class="inner">
                        <img class="card-img-top cardimgs" src="img/css3.png" alt="Card image cap">
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">CSS3</h5>
                        <p class="card-text">Zonder <a style="text-decoration: none;" class="txtboxstyling" href="https://nl.wikipedia.org/wiki/Cascading_Style_Sheets" target="_blank">CSS</a> heeft de website geen styling en is het dus een saaie lelijke website. Ik vind het stylen van een website door middel van CSS het leukste van Web-development dus werd dit al snel een "Skill", animaties en hovers vind ik een van de leukste dingen van CSS.
                           <h5><a href="#hidden1" style="text-decoration: none;" class="h5txtstyle" data-toggle="collapse">Meer informatie over CSS 3</a></h5>
                           <div id="hidden1" class="collapse">                              
                              <p>Met Cascading Style Sheets kan de vormgeving van elk element in een webpagina worden bepaald. Een element van een webpagina wordt gedefinieerd door het gebruik van een HTML-tag.</p>
                           </div>                        
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12 col-md-4">
                  <div class="card shadow" style="width: 100%;">
                     <div class="inner">
                        <img class="card-img-top cardimgs" src="img/gaming.png" alt="Card image cap">
                     </div>
                     <div class="card-body">
                        <h5 class="card-title">Gaming</h5>
                        <p class="card-text">In mijn vrije tijd houd ik er ontzettend van om achter mijn game pc te zitten en te gamen. Ik merkte al snel toen ik begon met gamen dat ik er echt goed in ben. Games zoals battle royales (PUBG, Fortnite) vind ik het leukts en ben ik dus het beste in. Ik kan snel handelen en goede keuzes maken in deze games. Ik heb ook een <a style="text-decoration: none;" class="txtboxstyling" href="https://www.youtube.com/channel/UC1O7y9-Hz-pIm4g66UdJhHA?view_as=subscriber" target="_blank">YouTube Kanaal</a> waar ik videos/gameplay van Fortnite upload. Mijn IGN (In Game Name) is: CrisperCrayon</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!--<br><br><br>
      <center>
         <h1>Sander!!! Portfolio Website</h1>
      </center>-->

      <!--Footer-->

      <footer class="container-fluid text-center">  
         <div class="row">
            <div class="col-md-4">
                  <div id="contactme"></div>
               <h3>Contact me</h3>
               <hr class="borderline">
               <h4><a class="emailstyling" href="mailto:sandervanboxtel@ziggo.nl" style="text-decoration: none;">info@sander.nl</a></h4>
            </div>
            <div class="col-md-4">
               <h3 class="socialtxt">Social Media</h3>
               <hr class="borderline2">
               <a href="https://www.youtube.com/channel/UC1O7y9-Hz-pIm4g66UdJhHA?view_as=subscriber" target="_blank"><i class="fab fa-youtube"></i></a>
               <a href="#" target="_blank"><i class="fab fa-google"></i></a>
               <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
               <p class="copyrighttxt">&copy;Sander van Boxtel <?php echo date("Y"); ?> - All rights Reserved</p> 
            </div>            
            <div class="col-md-4">
               <a href="#" class="scroll back-to-top"></a>
            </div>
         </div>
      </footer>


      <script>
         AOS.init();
      </script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   </body>
</html>