<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Bienvenidos a Cempo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="ico/favicon.ico">

        <script src="js/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- HEADER
        ================================================== -->
        <div class="container">
            <header>
            <div class="row">
            <div class="col-lg-4">
              <a href="index.html"><img class="center-block img-responsive" src="img/logo.png" alt="Cempo"></a>
            </div>
            <div class="colom col-md-3 col-md-offset-5">
              <img class="center-block img-responsive" src="img/colombia.png" alt="colombia">
              <p class="text-center tel">
                Telefono:(311)3694735
              </p>
            </div>
           </div>
         </header>
          </div>  
        <!-- NAV
        ================================================== -->
        <div class="container">
                    <nav class="navbar navbar-default">
            <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Cambiar Navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="empresa.html">Empresa</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="gestion.html">Gestión de proyectos</a></li>
                                <li><a href="gerencia.html">Gerencia estratégica</a></li>
                                <li><a href="formacion.html">Formación y capacitación</a></li>
                                <li><a href="planes.html">Planes de negocio</a></li>
                            </ul>
                        </li>
                        <li><a href="http://cempo-sas.blogspot.com/">Noticias</a></li>
                        <li><a href="contactenos.php">Contáctenos</a></li>
                    </ul>
                </div>
                </div>
          </nav>
        </div>

        <!-- SLIDE
        ================================================== -->
        <div class="container">
        <div class="col-lg-12">
        <div class="row">
          <h2 class="h3footer">Contáctenos</h2>
        </div>
        </div>
        </div>
                <!--    CONTENIDO
        ================================================== -->
          <div class="container">
            <div class="row padding">
               <div class="col-lg-7">
                 <p>Para comunicarnos escribanos un mensaje a través de este formulario, nosotros le daremos respuesta lo más pronto posible:</p>
                 <?php
                 if($_GET['ok']==1)
                  echo "<h2 class='h3footer'>El mensaje ha sido enviado correctamente.</h2>";
                 ?>
                 <form id="formcon" action="envia.php" method="post">
                     <div class="form-group">
                      <input type="text" name="name" class="form-control" value="Nombre" id="name" onblur="if (this.value == ''){this.value = 'Nombre'; }" onfocus="if (this.value == 'Nombre') {this.value = '';}" />
                     </div>

                     <div class="form-group">
                      <input type="text" name="fijo" class="form-control" value="Telefono fijo" id="fijo"  onblur="if (this.value == ''){this.value = 'Telefono fijo'; }" onfocus="if (this.value == 'Telefono fijo') {this.value = '';}" />
                      </div>
                     <div class="form-group">
                      <input type="text" name="celular" class="form-control" value="Telefono celular" id="celular"  onblur="if (this.value == ''){this.value = 'Telefono celular'; }" onfocus="if (this.value == 'Telefono celular') {this.value = '';}" />
                      </div>
                     <div class="form-group"> 
                      <input type="text" name="ciudad" class="form-control" value="Ciudad" id="ciudad"  onblur="if (this.value == ''){this.value = 'Ciudad'; }" onfocus="if (this.value == 'Ciudad') {this.value = '';}" />
                      </div>
                     <div class="form-group">
                      <input type="text" name="pais" class="form-control" value="País" id="pais"  onblur="if (this.value == ''){this.value = 'País'; }" onfocus="if (this.value == 'País') {this.value = '';}" />
                      </div>
                     <div class="form-group">  
                      <input type="text" name="email" class="form-control" value="Email" id="email"  onblur="if (this.value == ''){this.value = 'Email'; }" onfocus="if (this.value == 'Email') {this.value = '';}" />
                      </div>
                     <div class="form-group">
                      <textarea cols="20" rows="10" class="form-control" name="message" id="message" onblur="if (this.value == ''){this.value = 'Mensaje'; }" onfocus="ifvalue == 'Mensaje') {this.value = '';}" >Mensaje</textarea>
                     </div>
                     <div class="form-group">
                       <div class="col-sm-2 col-sm-10">
                      <input type="submit" name="submit" value="Enviar" class="btn btn-primary" />
                       </div>
                     </div>
                </form>
            </div>
                <div class="col-lg-5">
                <p>
                  Colombia - Bogotá D.C. <br> 
                  Calle 100 No. 8a – 55 World Trade Center Torre C Piso 10. <br>
                  Celular: 310 455 8995<br>
                  E-mail: info@cempo.com.co <br>
                  cempo@cempo.com.co <br><br>

                  Pereira <br>
                  Carrera 8 No. 23 – 09 Oficina 606 Edificio Cámara de Comercio. <br>
                  Teléfono: (6) 325 5683 <br>
                  E-mail: info@cempo.com.co <br>
                  cempo@cempo.com.com.co
                </p>
                </div>  
          </div>
        </div>    


                  <!--  FOOTER
        ================================================== -->
      
        <footer class="padding">
         <div class="container">
          <hr>
              <div class="col-lg-4">
                <h3 class="h3footer">Navigación</h3>
                 <p class="pfooter"><a href="index.html">Inicio</a></p>
                 <p class="pfooter"><a href="empresa.html">Empresa</a></p>
                 <p class="pfooter">
                   <div class="dropdown">
                  <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                    Servicios
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="gestion.html">Gestion de proyectos</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="gerencia.html">Gerencia estratégica</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="formacion.html">Formación y capacitación</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="planes.html">Planes de negocio</a></li>
                  </ul>
                  </div>
                 </p>
                 <p class="pfooter"><a href="#">Noticias</a></p>
                 <p class="pfooter"><a href="contactenos.php">Contáctenos</a></p>
              </div>
              <div class="col-lg-4">
                <h3 class="h3footer">Redes sociales</h3>
                <p class="pfooter"><a href="#"><i class="icon-facebook-sign icon-large"></i>&nbsp;Facebook</a></p>
                <p class="pfooter"><a href="#"><i class="icon-twitter-sign icon-large"></i>&nbsp;Twiter</a></p>
                <p class="pfooter"><a href="#"><i class="icon-google-plus-sign icon-large"></i>&nbsp;Google+</a></p>
                <p class="pfooter"><a href="#"><i class="icon-envelope icon-large"></i>&nbsp;info@cempo.com.co</a></p>
              </div>
              <div class="col-lg-4">
                <h3 class="h3footer">Ubicación</h3>
                <p class="pfooter">Calle 100 #8A-55 World Trade Center Torre C piso 10 - Bogotá D.C</p><p class="pfooter">Carrera 8 Calle 23 Esquina Edificio Cámara de Comercio Oficina 606 - Pereira</p>
                <p class="pfooter">Cel:(311)3694735</p>
              </div>
            <div class="row">            
              <div class="col-lg-12">
                <p class="text-center">Diseñado por: <a href="http://www.fittsmedia.com" target="_blank">Fitts Media</a></p> 
              </div>
            </div>
          </div> 
        </footer>

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
         <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script>  
        $(document).ready(function(){
            
          var clickEvent = false;
          $('#myCarousel').carousel({
            interval:   4000  
          }).on('click', '.list-group li', function() {
              clickEvent = true;
              $('.list-group li').removeClass('active');
              $(this).addClass('active');   
          }).on('slid.bs.carousel', function(e) {
            if(!clickEvent) {
              var count = $('.list-group').children().length -1;
              var current = $('.list-group li.active');
              current.removeClass('active').next().addClass('active');
              var id = parseInt(current.data('slide-to'));
              if(count == id) {
                $('.list-group li').first().addClass('active'); 
              }
            }
            clickEvent = false;
          });
        })

        $(window).load(function() {
            var boxheight = $('#myCarousel .carousel-inner').innerHeight();
            var itemlength = $('#myCarousel .item').length;
            var triggerheight = Math.round(boxheight/itemlength+1);
          $('#myCarousel .list-group-item').outerHeight(triggerheight);
        });
        </script>
    </body>
</html>
