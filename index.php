<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Somos una iglesia creciente en la ciudad de Cuernavaca. Queremos que todos sepan del amor de Dios.">
    <meta name="author" content="Victor Manuel Alcantara Ramos - Centro Cristiano Cuernavaca">

    <title>Centro Cristiano Cuernavaca</title>
    <link rel="shortcut icon" href="img/intro/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Custom CSS-->
    <link href="css/general.css" rel="stylesheet">
    <link href="css/full-slider.css" rel="stylesheet">
	<link href="css/events.css" rel="stylesheet">	
	 <!-- Owl-Carousel -->
    <link href="css/custom.css" rel="stylesheet">
	<link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">

	
<!-- 	<script src="http://lab.abhinayrathore.com/bootstrap-youtube/"></script> -->
	

	<link rel="stylesheet" href="css/magnific-popup.css"> 
	
	<script src="js/modernizr-2.6.2.min.js"></script>  <!-- Modernizr /-->
</head>

<body id="home">
<!-- Script para redes sociales -->
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<script src="https://apis.google.com/js/platform.js"></script>

	<script>
		function onYtEvent(payload) {
			if (payload.eventType == 'subscribe') {
			  // Add code to handle subscribe event.
			} else if (payload.eventType == 'unsubscribe') {
			  // Add code to handle unsubscribe event.
			}
			if (window.console) { // for debugging only
			  window.console.log('YT event: ', payload);
			}
		}
	</script>

	<script src="http://snapwidget.com/js/snapwidget.js"></script>

	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<!-- Inicio -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	    <header id="myCarousel" class="carousel slide" data-ride="carousels">
	        <div class="carousel-inner">
	            <video muted="muted" autoplay="" loop="" class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="https://s3-us-west-2.amazonaws.com/coverr/poster/Traffic-blurred2.jpg" id="video-background">
			        <source src="videos/fundamentos.mp4" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
			    </video>			
	        </div>
	    </header>   
		<div class="col-xs-12 text-center abcen2 abcenfull wow fadeInDown animated animated" style="animation-delay:4s">
			<div class="col-md-12"  style="margin-top: 15px;">
				<?php
					$txtlink='link_fblive.txt';
					$extlink=file($txtlink);
					$link=rtrim($extlink[0]);
				?>
				<a class="btn wow tada btn-embossed btn-primary pull-right" href="<?php echo $link; ?>" target="_blank" id="live-button"  >
					<span class="glyphicon glyphicon-facetime-video"></span>
					<b>¡Transmisión en vivo!</b>
				</a>				
        	</div>
			<div class="hidden-sm hidden-xs" style="color: #ffffff;text-shadow: 0 2px 1px rgba(0, 0, 0, 0.6);">
				<img src="img/intro/Fondo-transparente-BLANCO.png" alt="" style="width: 500px;">
				<h2>#TuLugar</h2>
			</div>
			<div class="hidden-md hidden-lg" style="color: #ffffff;text-shadow: 0 2px 1px rgba(0, 0, 0, 0.6);">
				<img src="img/intro/Fondo-transparente-ms-xs.png" alt="">
				<h2>#TuLugar</h2>
			</div>
		    
		</div>		
		<div class="flex-caption hidden-sm hidden-xs">
			<h3>Servicios</h3>
			<p>
				<h4>Domingos</h4>
				CC Acapantzingo: 9:00 am<br>
				CC Obregón: 6:00 pm<br>
			</p>
			<a class="btn btn-info" href="#contacto">Más información...</a>
		</div>
		<div class="col-xs-12 text-center abcen wow fadeIn">
			<div class="button_down "> 
				<a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#quienes"> <img class="img_scroll" src="img/icon/circle.png" alt=""> </a>
			</div>
		</div>

<!-- Menú -->
	<nav class="navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar" href="#home"><img src="img/intro/logoccc.png" height="60"></a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					
					<li class="menuItem"><a href="#quienes">¿Quiénes somos?</a></li>
					<li class="menuItem"><a href="#eventos">Eventos</a></li>
					<li class="menuItem"><a href="#ministerios">Ministerios</a></li>
					<li class="menuItem"><a href="#redes">Síguenos</a></li>
					<li class="menuItem"><a href="#contacto">Contáctanos</a></li>
				</ul>
			</div>
		   
		</div>
	</nav> 
	
<!-- Quienes somos -->
	<div id="quienes" class="content-section-b" style="border-top: 0">
		<div class="container">

			<div class="col-md-8 col-md-offset-2 text-center wrap_title">
				<h2>¿Quiénes Somos?</h2>				
			</div>
			
			<div class="row">			
				<div class="col-sm-6 col-md-4 col-md-offset-1 wow fadeInLeftBig text-center animated animated">
				  <img height="230px" src="img/pastores.png" alt="">
				  <h4>Jacobo y Marjorie Mondragón</h4>
				  <h5>Pastores Principales</h5>
				  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->
				
				<div class="col-sm-6 col-md-7 pull-right wow fadeInRightBig animated animated">			   
				   	<p class="lead text-justify">El <b>Centro Cristiano Cuernavaca</b> es una iglesia que tiene como visión <b>establecer el Reino de Dios</b>, hemos estado trabajando por más de 30 años en la ciudad y Dios nos ha dado una visión misionera también. Centro Cristiano Cuernavaca ha extendido su trabajo con más de <u>100 iglesias</u> en México, Estados Unidos, Cuba y Argentina. <br>
					
			   		<!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
				</div><!-- /.col-lg-4 -->									
			</div><!-- /.row -->
		</div>
	</div>
<!-- Nuestros valores -->
	<div id="valores" class="content-section-a" style="border-top: 0">
		<div class="container">
			<div class="row tworow ">
				<div class="col-sm-4  wow fadeInDown text-center">
					<a href="img/icon/vision.jpg" class="image-link" > <img class="rotate" src="img/icon/vision_ico.png" alt="Visión"> </a>
					<h3>Visión</h3>
				</div>
				<div class="col-sm-4 wow fadeInDown text-center">
					<a href="img/icon/mision.jpg" class="image-link" > <img class="rotate" src="img/icon/mision_ico.png" alt="Misión"> </a>
				  	<h3>Misión</h3>
				</div>
				<div class="col-sm-4 wow fadeInDown text-center">
					<a href="img/icon/estrategia.jpg" class="image-link" > <img class="rotate" src="img/icon/estrategia_ico.png"  alt="Estrategia"> </a>
				   	<h3>Estrategia</h3>
				</div>
			</div>
		</div>
	</div>
	
<!-- Eventos -->
    <div id ="eventos" class="content-section-eventos">		
        <div class="container">
			<div class="col-md-6 col-md-offset-3 text-center wrap_title ">
				<h2>Eventos</h2>
			</div>
            <div class="row">			                				
				<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">									
						<?php
						$fp = fopen('eventos.txt','r');
						if (!$fp) {echo 'ERROR: No ha sido posible abrir el archivo. Revisa su nombre y sus permisos.'; exit;}
						$loop = 0;
						// EVENTOS
						while (!feof($fp)) { // while hasta que se llegue al final del archivo
						  $loop++;
							$line = fgets($fp,1024); // guardamos toda la línea en $line como un string
							$field[$loop] = explode ('|', $line); 
							// dividimos $line en sus celdas, separadas por el caracter |
							// e incorporamos la línea a la matriz $field
							echo '
							<div class="row" style="padding-bottom:16px;">												
							<div class="col-md-4 box-icon-smaller">	
								<i><p>'.$field[$loop][0].'</p><p style="margin-top:-12px; border-top: 1px solid;">'.$field[$loop][1].'</p></i>
						  	</div>												
							<div class="col-md-8 box-ct">														
								<p>								
									<font class="event-list" id="'.$field[$loop][2].'" value="'.$field[$loop][3].'" onclick="">'.$field[$loop][4].'</font><br>
									<font class="event-time">'.$field[$loop][5].'</font>			
								</p>												
							</div>				    					
						</div>
						';
							$fp++; // movemos el puntero del archivo a la siguiente línea
						}
						fclose($fp);
						 ?>

					<!--<div class="row" style="padding-bottom:16px;">												
						<div class="col-md-4 box-icon-smaller rotate">	
							<i><p>29, 30 y 31</p><p style="margin-top:-12px; border-top: 1px solid;">Octubre</p></i> 												
						</div>												
						<div class="col-md-8 box-ct">														
							<p>								
								<font class="event-list" id="eventRow01" value="01" onclick="">Congreso Chazaq</font><br>															
								<font class="event-time">Todo el día</font>			
							</p>												
						</div>				    					
					</div>															
					<div class="row" style="padding-bottom:16px;">												
						<div class="col-md-4 box-icon-smaller rotate"> 	
							<i><p>26, 27 y 28</p><p style="margin-top:-12px; border-top: 1px solid;">Junio</p></i>
						</div>												
						<div class="col-md-8 box-ct">														
							<p>															
								<font class="event-list" id="eventRow02" value="02" onclick="">Vida Victoriosa</font><br>															
								<font class="event-time">Todo el día</font>		
							</p>
						</div>				    					
					</div>										
					<div class="row" style="padding-bottom:16px;">												
						<div class="col-md-4 box-icon-smaller rotate">		
							<i><p>1, 2 y 3</p><p style="margin-top:-12px; border-top: 1px solid;">Febrero</p></i>
						</div>												
						<div class="col-md-8 box-ct">														
							<p>															
								<font class="event-list" id="eventRow03" value="03" onclick="">Congreso Nacional de Líderes</font><br>															
								<font class="event-time">Todo el día</font>
							</p>												
						</div>				    					
					</div>										
					<div class="row" style="padding-bottom:16px;">												
						<div class="col-md-4 box-icon-smaller rotate">
							<i><p>14</p><p style="margin-top:-12px; border-top: 1px solid;">Enero</p></i>
						</div>												
						<div class="col-md-8 box-ct">														
							<p>															
								<font class="event-list" id="eventRow04" value="04" onclick="">Oración por las Naciones</font><br>															
								<font class="event-time">8:00 am - 4:00 pm</font>
							</p>												
						</div>				    					
					</div>											
					<div class="row" style="padding-bottom:16px;">												
						<div class="col-md-4 box-icon-smaller rotate">
							<i><p>12, 13 y 14</p><p style="margin-top:-12px; border-top: 1px solid;">Febrero</p></i> 												
						</div>												
						<div class="col-md-8 box-ct">														
							<p>															
								<font class="event-list" id="eventRow05" value="05" onclick="">Retiro para Matrimonios / Contra Viento y Marea</font>					
								<font class="event-time">&nbsp;&nbsp;Todo el día</font>							
							</p>												
						</div> 				    					
					</div>	-->													
				</div> 
				<div class="col-sm-6" id="div-events">   
					<div class="pull-right wow fadeInRightBig">
						<img class="img-responsive " src="img/intro/eventos.jpg" alt="">
					</div>
				</div>					
            </div>
        </div>
        <!-- /.container -->
    </div>
<!--
    <div class="content-section-b"> 
		
		<div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInLeftBig">
                     <div id="owl-demo-1" class="owl-carousel">
						<a href="img/iphone.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="img/iphone.png" alt="">
							</div>
						</a>
						<a href="img/iphone.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="img/iphone.png" alt="">
							</div>
						</a>
						<a href="img/iphone.png" class="image-link">
							<div class="item">
								<img  class="img-responsive img-rounded" src="img/iphone.png" alt="">
							</div>
						</a>
					</div>       
                </div>
				 
						                <div class="col-sm-6 wow fadeInRightBig"  data-animation-delay="200">   
						                    <h3 class="section-heading">Drag Gallery</h3>
							<div class="sub-title lead3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
						                    <p class="lead">
								In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. 
								Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, 
								uam non erat mirum sapientiae lorem cupido
								patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.
							</p>
						
							 <p><a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a> 
							 <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a></p>
						</div>  			
			</div>
        </div>
    </div> -->

    <!-- <div class="content-section-a">
    
        <div class="container">
    
             <div class="row">
    			 
    				<div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="img/doge.png" alt="">
                </div>
    			 
                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">   
                    <h3 class="section-heading">Font Awesome & Glyphicon</h3>
                    <p class="lead">A special thanks  to the Stock Photo for 
    					providing the photographs that you see in this template. 
    					</p>
    					
    					<ul class="descp lead2">
    						<li><i class="glyphicon glyphicon-signal"></i> Reliable and Secure Platform</li>
    						<li><i class="glyphicon glyphicon-refresh"></i> Everything is perfectly orgainized for future</li>
    						<li><i class="glyphicon glyphicon-headphones"></i> Attach large file easily</li>
    					</ul>
    				</div>           
            </div>
        </div>
    
    </div> -->

<!-- Ministerios -->
	<div id="ministerios" class="content-section-b">
        <div class="container">
          <div class="row" >
			 <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
				<h2>Ministerios</h2>
			 </div>
		  </div>
		    <div class="row wow bounceInUp" >
              <div id="owl-demo" class="owl-carousel">
				
				<a class="youtube" href="https://youtu.be/GmtX--M2IrU"> 
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/ccterceraedad.png" alt="Owl Image">
					</div>
				</a>
				
               <a class="youtube" href="https://youtu.be/5jmEqjDnwMc"> 
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/ccaudio.jpg" alt="Owl Image">
					</div>
				</a>
				
				<a class="youtube" href="https://youtu.be/Uqj0z0ljDQY"> 
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/adorartecc.jpg" alt="Owl Image">
					</div>
				</a>
				
				<a class="youtube" href="https://youtu.be/f2pc3gyd84c"> 
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/cceducacioncristiana.jpg" alt="Owl Image">
					</div>
				</a>
				
                <a class="youtube" href="https://youtu.be/U3oGctR0ca4"> 
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/cchospitales.jpg" alt="Owl Image">
					</div>
				</a>
				
				<a class="youtube" href="https://youtu.be/MTFiw74brKQ"> 
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/ccniños.jpg" alt="Owl Image">
					</div>
				</a>

				<a class="youtube" href="https://youtu.be/OR0A56pZru8"> 
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/vinonuevo.jpg" alt="Owl Image">
					</div>
				</a>

				<a class="youtube" href="https://youtu.be/XmNEbn4RKug"> 
					<div class="item">
						<img  class="img-responsive img-rounded" src="img/slide/cccarcel.jpg" alt="Owl Image">
					</div>
				</a> 
              </div>       
          </div>
        </div>


	</div>
	
	
		
			
			
			<div class="mockup-content" style="display: none;">
				<div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
					<form>
						<p><button></button></p>
					</form>
				</div>
			</div>


<!-- Siguenos -->			
<div id="redes" class="content-section-siguenos">
	<div class="parallax-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center wrap_title">
					<h2>Síguenos</h2>
					<p class="lead" style="margin-top:0">Queremos estar cerca de ti</p>
			 	</div>
				<div class="col-sm-10 col-sm-offset-1 hidden-xs hidden-sm ">
					<div  class="col-md-3">
						<div class="col-md-4 box-icon rotate"> 
							<a href="https://www.facebook.com/CentroCristianoCuernavaca/" target="_blank"><img  src="img/redes/facebook_g.png"></a>
						</div>
					</div>
					<div  class="col-md-3">
						<div class="col-md-4 box-icon rotate" id="yt">
							<a href="https://www.youtube.com/user/cccuernavacaoficial/" target="_blank"><img  src="img/redes/youtube_g.png"></a>
					  	</div>
					</div>
					<div class="col-md-3">
					  	<div class="col-md-4 box-icon rotate" id="ins"> 
							<a href="https://www.instagram.com/cccuernavaca/" target="_blank"><img  src="img/redes/instagram_g.png"></a>
						</div>
					</div>
					<div  class="col-md-3">
						<div class="col-md-4 box-icon rotate" id="tw"> 
							<a href="https://twitter.com/CCCuernavaca" target="_blank"><img  src="img/redes/twitter_g.png"> </a>
					  	</div>
				  	</div>
			  	</div>
			  	<div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 hidden-md hidden-lg text-center">
			  		<div class="col-xs-6">
						<a href="https://www.facebook.com/CentroCristianoCuernavaca/" target="_blank"><img class="rotate" src="img/redes/facebook.png" alt="Generic placeholder image"></a><br><br>
						<a href="https://www.instagram.com/cccuernavaca/" target="_blank"><img class="rotate" src="img/redes/instagram.png" alt="Generic placeholder image"></a>
					</div>
					<div class="col-xs-6">
						<a href="https://www.youtube.com/user/cccuernavacaoficial/" target="_blank"><img class="rotate" src="img/redes/youtube.png" alt="Generic placeholder image"></a><br><br>
						<a href="https://twitter.com/CCCuernavaca" target="_blank"><img class="rotate" src="img/redes/twitter.png" alt="Generic placeholder image"></a>
					</div>
			  	</div>
			</div>
		</div>
	</div>	
		
	
<!-- Siguenos 
	<div id="redes" class="content-section-siguenos">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center wrap_title">
					<h2>Síguenos</h2>
					<p class="lead" style="margin-top:0">Queremos estar cerca de ti</p>
			 	</div>
			 	<div class="row tworow">
					<div class="col-sm-6  block wow bounceIn">
						<div class="row">
							<div class="col-md-4 box-icon rotate hidden-xs hidden-sm"> 
								<img  src="img/redes/facebook_g.png">
							</div>
							<div class="col-md-8 box-ct text-center">
								<h3> Facebook </h3>
								<div class="fb-page" data-href="https://www.facebook.com/CentroCristianoCuernavaca/" data-tabs="timeline" data-height="350" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/CentroCristianoCuernavaca/"><a href="https://www.facebook.com/CentroCristianoCuernavaca/">Centro Cristiano Cuernavaca</a></blockquote></div></div>
							</div>
					  	</div>
				  	</div>
				  	<div class="col-sm-6 block wow bounceIn">
						<div class="row">
						  	<div class="col-md-4 box-icon rotate hidden-xs hidden-sm" id="yt">
								<img  src="img/redes/youtube_g.png">
						  	</div>
						  	<div class="col-md-8 box-ct text-center" style="height:350px">
						  		<h3> YouTube </h3>
								<div class="g-ytsubscribe" data-channel="cccuernavacaoficial" data-layout="full" data-count="default" data-onytevent="onYtEvent">
						  		</div>
						  		<div class="embed-responsive embed-responsive-16by9" style="margin-top:30px">
						  			<iframe  class="embed-responsive-item" type="text/html" src="https://www.youtube.com/embed/3uMFahIW2vM" frameborder="0" allowfullscreen></iframe>
						  		</div>
							</div>
				  		</div>
			  		</div>
		  		</div> 
		  		<br>
			  	<div class="row tworow">
					<div class="col-sm-6  block wow bounceIn">
						<div class="row">
							<div class="col-md-4 box-icon rotate hidden-xs hidden-sm" id="ins"> 
								<img  src="img/redes/instagram_g.png">
							</div>
							<div class="col-md-8 box-ct text-center"  style="height:350px">
								<h3> Instagram </h3>
								<iframe src="http://snapwidget.com/sc/?u=Y2NjdWVybmF2YWNhfGlufDM1MHwxfDF8fG5vfDV8bm9uZXx8eWVzfG5v&ve=020216" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:370px; height:350px"></iframe>
							</div>
					  	</div>
				  	</div>
				  	<div class="col-sm-6 block wow bounceIn">
						<div class="row">
						  	<div class="col-md-4 box-icon rotate hidden-xs hidden-sm" id="tw"> 
								<img  src="img/redes/twitter_g.png"> 
						  	</div>
						  	<div class="col-md-8 box-ct text-center" style="height:350px">
								<h3> Twitter </h3>
								<a class="twitter-timeline"  href="https://twitter.com/CCCuernavaca" data-widget-id="679334428628221952">Tweets por el @CCCuernavaca.</a>
						  	</div>
						</div>
				  	</div>
			  	</div>
			</div>
		</div>
	</div>
	
<!-- Video de día -->
	<div id="downloadlink" class="banner">
		<div class="container-fluid">
			<div class="col-sm-3 flex-caption-yt">
				<div class="col-md-10 col-md-offset-1 text-center wrap_title">
					<h3>Listas de reproducción</h3>
				</div>	
				<div class="col-md-12 box-ct">														
					<p>								
						<font class="event-list" id="listRow01" value="01" onclick=""><span class="glyphicon glyphicon-play" aria-hidden="true"></span>Alabanzas</font><br>	
					</p>												
				</div>
				<div class="col-md-12 box-ct">														
					<p>								
						<font class="event-list" id="listRow02" value="02" onclick=""><span class="glyphicon glyphicon-play" aria-hidden="true"></span>Predicaciones</font><br>	
					</p>												
				</div>
				<div class="col-md-12 box-ct">														
					<p>								
						<font class="event-list" id="listRow03" value="03" onclick=""><span class="glyphicon glyphicon-play" aria-hidden="true"></span>Pregúntale al Pastor</font><br>	
					</p>												
				</div>
				<div class="col-md-12 box-ct">														
					<p>								
						<font class="event-list" id="listRow04" value="04" onclick=""><span class="glyphicon glyphicon-play" aria-hidden="true"></span>Te habla la pastora</font><br>	
					</p>												
				</div>
				<div class="col-md-12 box-ct">														
					<p>								
						<font class="event-list" id="listRow05" value="05" onclick=""><span class="glyphicon glyphicon-play" aria-hidden="true"></span>Hablando de</font><br>	
					</p>												
				</div>
				<div class="col-md-12 box-ct">														
					<p>								
						<font class="event-list" id="listRow05" value="06" onclick=""><span class="glyphicon glyphicon-play" aria-hidden="true"></span>Más que Hombres</font><br>	
					</p>												
				</div>
				<div class="col-md-12 box-ct">														
					<p>								
						<font class="event-list" id="listRow05" value="07" onclick=""><span class="glyphicon glyphicon-play" aria-hidden="true"></span>CC Familia</font><br>	
					</p>												
				</div>
				
				<div class="col-md-12 box-ct">														
					<p>								
						<font class="event-list" id="listRow05" value="00" onclick=""><span class="glyphicon glyphicon-play" aria-hidden="true"></span>Video del día</font><br>	
					</p>												
				</div>
			</div>
			<div class="col-sm-9" id="div-list">
				<div class="col-md-10 col-md-offset-1 text-center wrap_title">
					<h2>Video del día</h2>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center wrap_title embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" frameborder="0" src="https://www.youtube.com/embed/?listType=user_uploads&list=cccuernavacaoficial" allowfullscreen></iframe>
				 	</div>
				</div>
			</div>
		</div>
	</div>
	
<!-- Contacto -->
	<div id="contacto" class="content-section-a">
		<div class="container">
			<div class="row">
			
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2>Contacto</h2>
				<p class="lead" style="margin-top:0">Queremos ayudarte</p>
			</div>
			
			<form role="form" name="fcontacto" id="fcontacto" action="	" method="post" >
				<div class="col-md-6">
					<p class="lead" style="margin-top:0">Para nosotros es importante saber tu opinion, escribenos cualquier duda, comentario, sugerencia o petición de oración. Estámos para servirte</p>
					<div class="form-group">
						<!-- <label for="nombre">Nombre</label> -->
						<div class="input-group">
							<input type="text" class="form-control" name="nombre" id="name" placeholder="Escribe tu nombre" required>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<!-- <label for="email">E-mail</label> -->
						<div class="input-group">
							<input type="email" class="form-control" id="email" name="email" placeholder="escribe tu e-mail (e-mail@ejemplo.com)" required  >
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
						</div>
					</div>
					
					<div class="form-group">
						<label for="InputMessage">Tu Mensaje:</label>
						<div class="input-group">
							<textarea name="mensaje" id="mensaje" class="form-control" rows="5" required></textarea>
							<span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
						</div>
					</div>

					<input type="submit" name="submit" id="submit" value="Enviar" class="btn wow tada btn-embossed btn-primary pull-right">
				</div>
				<div class="form-group" id="respuesta" style="display: none;">
			        <div class="col-sm-10 col-sm-offset-2">
			            <?php echo $result; ?>
			        </div>
    			</div>
			</form>
			
			<hr class="featurette-divider hidden-lg">
				<div class="col-md-5 col-md-push-1 address wow fadeInRightBig animated animated">
					<address>
						<h4>Ubicación</h4>
							Alvaro Obregón #321, Col. Centro
							C.P. 62000, Cuernavaca, Mor.
						<div id="map1" class="map">
                        </div>
                        <br>
							Calle Ejido #180, Col. Acapantzingo 
							C.P. 62440, Cuernavaca, Mor.
						<div id="map2" class="map">
                        </div>
					</address>
				</div>
			</div>
		</div>
	</div>
	
	
	
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-4">
	            <h3>Servicios</h3>
				<h4>Domingos</h4>
				<b>&bull; Acapantzingo: 9am<br>
				&bull; Obregón: 6pm</b><br>
				<h4>Miércoles</h4>
				<b>&bull; Acapantzingo: 6pm<br>
				&bull; Obregón: 6pm</b>
	   		</div>
	   		<div class="col-md-5" style="background: #E5E5E5;">
		   		<h3>Reuniones de oración</h3>
				<h4>Martes - Obregón:</h4>
				<b>&bull; 5:30am - 6:30am<br>
				&bull; 8am - 10am<br>
				&bull; 10am - 12pm<br>
				&bull; 12pm - 2pm<br>
				&bull; 2pm - 4pm<br>
				&bull; 4pm - 6pm<br>
				&bull; 6pm - 7pm<br>
				&bull; 7pm - 8pm</b>
				<br><br>
			</div>
			<div class="col-md-3">
				<h3>Oficinas</h3>
				<h4>Teléfonos:</h4>
				<b>&bull; (777) 318-59-65<br>
				&bull; (777) 310-14-24<br>     
				&bull; (777) 310-14-26​</b>
				<h4>Correo:</h4>
				<b>contacto@cccuernavaca.org.mx</b>
			</div>
          </div> <!-- /col-xs-7 -->         
        </div>
      </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/script.js"></script>
	<!-- Player Youtube -->
	<script src="js/bootstrap.youtubepopup.js"></script>
	<!-- StikyMenu -->
	<script src="js/stickUp.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		  var thisDay = new Date().getDay();
		  if (thisDay == 7) {
			$('#live-button').prop('disabled', false);	
		  }
	 });
	 </script>
	<script type="text/javascript">
	  jQuery(function($) {
		$(document).ready( function() {
		  $('.navbar-default').stickUp();
		});
	  });
	
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="js/jquery.corner.js"></script> 
	<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
	<script src="js/classie.js"></script>
	<script src="js/custom.js" type="text/javascript"></script>
	<script src="js/uiMorphingButton_inflow.js"></script>
	<!-- Magnific Popup core JS file -->
	<script src="js/jquery.magnific-popup.js"></script> 
	<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
	<!-- Custom Script -->
	<script src="js/events.js"></script>
	<script src="js/list.js"></script>
	<!-- Scripts Youtube -->
	
	<script type="text/javascript">

				$(function () {
					$(".youtube").YouTubeModal({autoplay:0});
				});
			
	</script>

	<script src="http://maps.google.com/maps/api/js?key= AIzaSyBIC0S4hMgqOqmb-1CzhIp3TRP9lLfUhbU&sensor=false"></script>
	<script type="text/javascript">
	    jQuery(function ($) {
	        function init_map1() {	            
	            var myLocation = new google.maps.LatLng(18.9276306, -99.2408484);
	            var mapOptions = {	            	
	                center: myLocation,
	                zoom: 17
	            };
	            var marker = new google.maps.Marker({
	                position: myLocation,
	                title: "Centro Cristiano Cuernavaca"
	            });
	            var map = new google.maps.Map(document.getElementById("map1"),
	                mapOptions);
	            marker.setMap(map);
	        }
	        init_map1();
	        function init_map2() {
	            var myLocation = new google.maps.LatLng(18.8910811, -99.2091072);
	            var mapOptions = {
	                center: myLocation,
	                zoom: 16
	            };
	            var marker = new google.maps.Marker({
	                position: myLocation,
	                title: "Centro Cristiano Acapantzingo"
	            });
	            var map = new google.maps.Map(document.getElementById("map2"),
	                mapOptions);
	            marker.setMap(map);
	        }
	        init_map2();
	    });
	</script>	
</body>
</html>