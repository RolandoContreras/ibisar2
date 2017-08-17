<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view("head");?>
    <body>
    <!--home start-->
    
    <div id="home">
    	<div class="headerLine">
	<div id="menuF" class="default">
		<div class="container">
			<div class="row">
				<div class="logo col-md-4">
					<div>
                                            <a href="#">
                                                    <img src="<?php echo site_url().'static/assets/images/logo.png';?>">
                                            </a>
					</div>
				</div>
				<div class="col-md-8">
					<div class="navmenu"style="text-align: center;">
						<ul id="menu">
							<li class="active" ><a href="#home">Inicio</a></li>
							<li><a href="#about">Acerca</a></li>
							<li><a href="#project">Cursos</a></li>
							<li><a href="#news">Eventos</a></li>
							<li><a href="#contact">Contacto</a></li>
                                                        <li><a href="<?php echo site_url().'login'?>">Login</a></li>
						</ul>
                                           
					</div>
                                    
						 
					
				</div>
			</div>
		</div>
	</div>
		<div class="container">
			<div class="row wrap">
				<div class="col-md-12 gallery"> 
						<div class="camera_wrap camera_white_skin" id="camera_wrap_1">
							<div data-thumb="" data-src="<?php echo site_url().'static/assets/images/slides/blank.gif';?>">
								<div class="img-responsive camera_caption fadeFromBottom">
									<h2>I BISAR - Soy Bisar</h2>
								</div>
							</div>
							<div data-thumb="" data-src="<?php echo site_url().'static/assets/images/slides/blank.gif';?>">
								<div class="img-responsive camera_caption fadeFromBottom">
									<h2>Crece - Mejora</h2>
								</div>
							</div>
							<div data-thumb="" data-src="<?php echo site_url().'static/assets/images/slides/blank.gif';?>">
								<div class="img-responsive camera_caption fadeFromBottom">
									<h2>Renuevate - Vive</h2>
								</div>
							</div>
						</div><!-- #camera_wrap_1 -->
				</div>
			</div>
		</div>
	</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 project">
					<h3 id="counter">0</h3>
					<h4>Proyecto Asombroso</h4>
					<p>Sé parte de la más grande plataforma educativa. Estudia y certificate en Neuromarketing, Coaching, Liderazgo entre otros.</p>
				</div>
				<div class="col-md-4 project">
					<h3 id="counter1">0</h3>
					<h4>Clientes Alrededor del mundo.</h4>
					<p>Que son parte de la comunidad de emprendedores más grande de Latinoamerica y el mundo entero.</p>
				</div>
				<div class="col-md-4 project">
					<h3 id="counter2" style="margin-left: 20px;">0</h3>
					<h4 style="margin-left: 20px;">Profesionales</h4>
					<p>En acción que te ayudaran a crecer en toda área de tu vida con entrenamientos virtuales y presenciales de acuerto a tu tiempo.</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 cBusiness">
					<h3>El mejor camino para tu crecimiento personal</h3>
					<h4>Descubre de las novedades que tiene BISAR para ti.</h4>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 centPic">
					<img class="img-responsive"  src="<?php echo site_url().'static/assets/images/bizPic.png';?>"/>
				</div>
			</div>
		</div>   
    </div>
    
    <!--about start-->    
    
    <div id="about">
    	<div class="line2">
			<div class="container">
				<div class="row Fresh">
                                    <div class="col-md-4 Ver">
						<i class="fa fa-cog"></i>
						<h4>Coaching</h4>
						<p>Contamos con más de 100 profesionales accionando al servicio del desarrollo y crecimiento del cliente.</p>
					</div>
					<div class="col-md-4 Ver">
						<i class="fa fa-cog"></i>
						<h4>Liderazgo</h4>
						<p>Educaciones en el área de liderazgo de la persona, con cursos y módulos virtuales y presenciales.</p>
					</div>
					<div class="col-md-4 Fully">
						<i class="fa fa-cog"></i>
						<h4>Finanzas</h4>
						<p>Cursos y certificaciones en mentalidad financiera, teniendo conocimientos del mercado externo, interno para hacer un buen uso del dinero.</p>
					</div>		
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 wwa">
					<span name="about" ></span>
					<h3><?php echo replace_vocales_voculeshtml("¿Qué es BISAR?");?></h3>
					<h4>Plataforma de desarrollo y crecimiento personal en Latinoamérica y el mundo entero que ayuda a dar herramientas a las personas en esta nueva era para tener un  crecimiento en áreas como liderazgo y finanzas. Con profesores y coach de primer nivel quienes ayudaran a alcanzar el éxito en los módulos correspondientes.</h4>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 hr1">
					<hr/>
				</div>
			</div>
		</div>		
		<div class="container">
			<div class="row">
				<div class="col-md-3 bar">
					<div class="progB chart" data-percent="100"  data-animate="3500">
						<div class="chart chart-content">
							<div class="percentage" data-percent="100">
							  <span class="percent">100</span>
							</div>
						</div>
					</div>
					<div class="textP">
						<h3>Estrategia</h3>
						<p>Educación Virtual 24/7: Acceso a una amplia biblioteca de cursos certificados disponibles en todo momento.</p>
					</div>
				</div>
				<div class="col-md-3 bar">
					<div class="progB chart" data-percent="100"  data-animate="3500">
						<div class="chart chart-content">
							<div class="percentage" data-percent="100">
							  <span class="percent">100</span>
							</div>
						</div>
					</div>
					<div class="textP">
						<h3><?php echo replace_vocales_voculeshtml("Planeación");?></h3>
						<p>Educación virtual y presencial: Tienes la posibilidad de asistir de forma presencial a los cursos, visitando nuestras sedes y viviendo de primera mano esta revolución educativa.</p>
					</div>
				</div>
				<div class="col-md-3 bar ">
					<div class="progB chart" data-percent="100"  data-animate="3500">
						<div class="chart chart-content">
							<div class="percentage" data-percent="100">
							  <span class="percent">100</span>
							</div>
						</div>
					</div>
					<div class="textP">
						<h3><?php echo replace_vocales_voculeshtml("Desarrollo");?></h3>
						<p>Certificación Internacional: Gracias a la calidad de la educación y docentes, tendrás la posibilidad de certificarte de forma internacional por BISAR.</p>
					</div>
				</div>
				<div class="col-md-3 bar ">
					<div class="progB chart" data-percent="100"  data-animate="3500">
						<div class="chart chart-content">
							<div class="percentage" data-percent="100">
							  <span class="percent">100</span>
							</div>
						</div>
					</div>
					<div class="textP">
						<h3><?php echo replace_vocales_voculeshtml("Certificación");?></h3>
						<p>Nulla consectetur ornare nibh, a auctor <br/>mauris scelerisque eu proin nec urna quis. </p>
					</div>
				</div>
			</div>
		</div>	
    </div>
    <!--project start-->    
    <div id="project">    	
		<div class="line3">
			<div class="container">
				<div id="project1" ></div>
				<div class="row Ama">
					<div class="col-md-12">
					<span name="projects" id="projectss"></span>
					<h3>Nuestros Cursos</h3>
					<!--<p>Right here we've got something you gonna love</p>-->
					</div>
				</div>
			</div>
		</div>          
    
    
       <div class="container">
		
		<div class="row">
			<!-- filter_block -->
				<div id="options" class="col-md-12" style="text-align: center;">	
					<ul id="filter" class="option-set" data-option-key="filter">
						<li><a class="selected" href="#filter" data-option-value="*" class="current">Cursos Recientes</a></li>
						<li><a href="#filter" data-option-value=".polygraphy">CURSOS RECOMENDADOS</a></li>
						<li><a href="#filter" data-option-value=".branding">CURSOS MAS VISTOS</a></li>
					</ul>
				</div><!-- //filter_block -->
		
		
		
			<div class="portfolio_block columns3   pretty" data-animated="fadeIn">	
					<div class="element col-sm-4   gall branding">
						<a class="plS">
							<img class="img-responsive picsGall" src="<?php echo site_url().'static/assets/images/prettyPhotoImages/thumb_pic1.png';?>" alt="pic1 Gallery"/>
						</a>
						<div class="view project_descr ">
                                                    <h3><a href="#"><?php echo replace_vocales_voculeshtml("¿Cómo dar feedback?");?></a></h3>
							<ul>
								<li><i class="fa fa-eye"></i>215</li>
								<li><a class="heart" href="#"><i class="fa-heart-o"></i>14</a></li>
							</ul>
						</div>
					</div>
					<div class="element col-sm-4  gall branding">
						<a class="plS">
							<img class="img-responsive picsGall" src="<?php echo site_url().'static/assets/images/prettyPhotoImages/thumb_pic2.jpg';?>" alt="pic2 Gallery"/>
						</a>
						<div class="view project_descr center">
							<h3><a href="#">10 principios de hablar en público</a></h3>
							<ul>
								<li><i class="fa fa-eye"></i>369</li>
								<li><a  class="heart" href="#"><i class="fa-heart-o"></i>86</a></li>
							</ul>
						</div>
					</div>
					<div class="element col-sm-4  gall web">
						<a class="plS">
							<img class="img-responsive picsGall" src="<?php echo site_url().'static/assets/images/prettyPhotoImages/thumb_pic3.jpg';?>" alt="pic3 Gallery"/>
						</a>
						<div class="view project_descr ">
                                                    <h3><a href="#"><?php echo replace_vocales_voculeshtml("Habla en público");?></a></h3>
							<ul>
								<li><i class="fa fa-eye"></i>400</li>
								<li><a  class="heart" href="#"><i class="fa-heart-o"></i>124</a></li>
							</ul>
						</div>
					</div>
		
		
					
					<div class="element col-sm-4  gall  text_styles">
						<a class="plS">
							<img class="img-responsive picsGall" src="<?php echo site_url().'static/assets/images/prettyPhotoImages/thumb_pic4.jpg';?>" alt="pic1 Gallery"/>
						</a>
						<div class="view project_descr ">
                                                    <h3><a href="#"><?php echo replace_vocales_voculeshtml("10 principios de hablar en público");?></a></h3>
							<ul>
								<li><i class="fa fa-eye"></i>480</li>
								<li><a  class="heart" href="#"><i class="fa-heart-o"></i>95</a></li>
							</ul>
						</div>
					</div>
					<div class="element col-sm-4  gall  web">
						<a class="plS">
							<img class="img-responsive picsGall" src="<?php echo site_url().'static/assets/images/prettyPhotoImages/thumb_pic5.png';?>" alt="pic1 Gallery"/>
						</a>
						<div class="view project_descr center">
							<h3><a href="#"><?php echo replace_vocales_voculeshtml("Cómo usar tus miedos para lograr tu éxito");?></a></h3>
							<ul>
								<li><i class="fa fa-eye"></i>215</li>
								<li><a  class="heart" href="#"><i class="fa-heart-o"></i>14</a></li>
							</ul>
						</div>
					</div>
					<div class="element col-sm-4  gall  polygraphy">
						<a class="plS">
							<img class="img-responsive picsGall" src="<?php echo site_url().'static/assets/images/prettyPhotoImages/thumb_pic6.png';?>" alt="pic1 Gallery"/>
						</a>
						<div class="view project_descr ">
							<h3><a href="#"><?php echo replace_vocales_voculeshtml("Tips de lectura veloz");?></a></h3>
							<ul>
								<li><i class="fa fa-eye"></i>375</li>
								<li><a  class="heart" href="#"><i class="fa-heart-o"></i>102</a></li>
							</ul>
						</div>
					</div>		
					<div class="element col-sm-4   gall branding">
						<a class="plS">
							<img class="img-responsive picsGall" src="<?php echo site_url().'static/assets/images/prettyPhotoImages/thumb_pic7.png';?>" alt="pic1 Gallery"/>
						</a>
						<div class="view project_descr ">
							<h3><a href="#"><?php echo replace_vocales_voculeshtml("Cómo ahorrar dinero para invertir");?></a></h3>
							<ul>
								<li><i class="fa fa-eye"></i>440</li>
								<li><a  class="heart" href="#"><i class="fa-heart-o"></i>35</a></li>
							</ul>
						</div>
					</div>
					
					<div class="element col-sm-4  gall text_styles">
						<a class="plS">
							<img class="img-responsive picsGall" src="<?php echo site_url().'static/assets/images/prettyPhotoImages/thumb_pic8.jpg';?>" alt="pic1 Gallery"/>
						</a>
						<div class="view project_descr ">
							<h3><a href="#"><?php echo replace_vocales_voculeshtml("¿Por qué me pasa esto a mí?");?></a></h3>
							<ul>
								<li><i class="fa fa-eye"></i>512</li>
								<li><a  class="heart" href="#"><i class="fa-heart-o"></i>36</a></li>
							</ul>
						</div>
					</div>
					
					<div class="element col-sm-4  gall polygraphy">
						<a class="plS">
							<img class="img-responsive picsGall" src="<?php echo site_url().'static/assets/images/prettyPhotoImages/thumb_pic9.jpg';?>" alt="pic1 Gallery"/>
						</a>
						<div class="view project_descr ">
							<h3><a href="#"><?php echo replace_vocales_voculeshtml("Pequeños líderes");?></a></h3>
							<ul>
								<li><i class="fa fa-eye"></i>693</li>
								<li><a  class="heart" href="#"><i class="fa-heart-o"></i>204</a></li>
							</ul>
						</div>
					</div>			
			</div>
			
			
				
					<div class="col-md-12 cBtn  lb" style="text-align: center;">
						<ul class="load_more_cont ">
							<li class="buy">
								<a href="#">
									<i class="fa fa-shopping-cart"></i>Ver Cursos
								</a>
							</li>
						</ul>
					</div>
			
		</div>
			
			<script type="text/javascript">
				jQuery(window).load(function(){
					items_set = [
					
						{category : 'branding', lika_count : '77', view_count : '234', src : '<?php echo site_url().'static/assets/images/prettyPhotoImages/thumb_pic9.jpg';?>', title : 'Foil Mini Badges', content : '' },
						
						{category : 'polygraphy', lika_count : '45', view_count : '100', src : '<?php echo site_url().'static/assets/images/prettyPhotoImages/thumb_pic7.jpg';?>', title : 'Darko – Business Card Mock Up', content : '' },
						
						{category : 'text_styles', lika_count : '22', view_count : '140', src : '<?php echo site_url().'static/assets/images/prettyPhotoImages/thumb_pic8.jpg';?>', title : 'Woody Poster Text Effect', content : '' }
						

					];
					jQuery('.portfolio_block').portfolio_addon({
						type : 1, // 2-4 columns simple portfolio
						load_count : 3,
						
						items : items_set
					});
					$('#container').isotope({
					  animationOptions: {
						 duration: 900,
						 queue: false
					   }
					});
				});
			</script>
		</div>
    </div>    
    
    <!--news start-->
    
    <div id="news">
    	<div class="line4">		
			<div class="container">
				<div class="row Ama">
					<div class="col-md-12">
					<h3>Eventos</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
				<div class="row news">
					<div class="col-md-6  text-left">
					<img class="img-responsive picsGall" src="<?php echo site_url().'static/assets/images/picNews/news1.png';?>"/>
					<h3><a href="#">Lectura de Alto Rendimiento</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 25, 2017</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
					</ul>
					<p>Capacítate con la Dr. Ana María en su curso de lectura de alto rendimiento, y ten un certificado avalado por BISAR.<a class="readMore" href="#">Leer Más<i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
					<div class="col-md-6 text-right">
					<img class="img-responsive picsGall" src="<?php echo site_url().'static/assets/images/picNews/news2.jpeg';?>"/>
					<h3><a href="#">Lectura de Alto Rendimiento</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>April 30, 2017</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
					</ul>
					<p>Capacítate con la Dr. Ana María en su curso de lectura de alto rendimiento, y ten un certificado avalado por BISAR.<a class="readMore" href="#">Leer Más<i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row news2 news">
					<div class="col-md-6 text-left">
					<img class="img-responsive picsGall" src="<?php echo site_url().'static/assets/images/picNews/news3.jpeg';?>"/>
					<h3><a href="#">Lectura de Alto Rendimiento</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>Mayo 23, 2017</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
					</ul>
					<p>Capacítate con la Dr. Ana María en su curso de lectura de alto rendimiento, y ten un certificado avalado por BISAR. <a class="readMore" href="#">Leer Más<i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
					<div class="col-md-6 text-right">
					<img class="img-responsive picsGall" src="<?php echo site_url().'static/assets/images/picNews/news4.png';?>"/>
					<h3><a href="#">Lectura de Alto Rendimiento</a></h3>
					<ul>
						<li><i class="fa fa-calendar"></i>Junio 06, 2017</li>
						<li><a href="#"><i class="fa fa-folder-open"></i>Staff</a></li>
					</ul>
					<p>Capacítate con la Dr. Ana María en su curso de lectura de alto rendimiento, y ten un certificado avalado por BISAR. <a class="readMore" href="#">Leer Más<i class="fa fa-angle-right"></i></a></p>
					<hr class="hrNews">
					</div>
				</div>
			</div>
			<div class="container">
			<div class="row cBtn">
				<div class="col-md-12" style="text-align: center; margin-bottom: -90px; z-index: 10;">
					<ul class="mNews">
						<li class="dowbload"><a href="javascript:void(0);"><i class="fa fa-arrow-down"></i>Ver Eventos</a></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
    
    
    <!--contact start-->
    
    <div id="contact">
    	<div class="line5">					
			<div class="container">
				<div class="row Ama">
					<div class="col-md-12">
                                            <h3><?php echo replace_vocales_voculeshtml("¿Tienes una pregunta? ¡Estamos aquí para ayudar!");?></h3>
                                            <p><?php echo replace_vocales_voculeshtml("Póngase en contacto con nosotro");?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-xs-12 forma">
					<form>
						<input type="text" class="col-md-6 col-xs-12 name" name='name' placeholder='Nombre *'/>
						<input type="text" class="col-md-6 col-xs-12 Email" name='Email' placeholder='Email *'/>
						<input type="text" class="col-md-12 col-xs-12 Subject" name='Subject' placeholder='Asunto'/>
						<textarea type="text" class="col-md-12 col-xs-12 Message" name='Message' placeholder='Mensage *'></textarea>
						<div class="cBtn col-xs-12">
							<ul>
								<li class="send"><a href="#"><i class="fa fa-share"></i>Enviar Mensaje</a></li>
							</ul>
						</div>
					</form>
				</div>
				<div class="col-md-3 col-xs-12 cont">
					<ul>
						<li><i class="fa fa-home"></i>Av. José Parde 231 - Miraflores</li>
						<li><i class="fa fa-phone"></i>+51 800 789 50 12</li>
						<li>
                                                    <a href="#"><i class="fa fa-envelope"></i>marketing@ibisar.com</a>
                                                </li>
						<li><i class="fa fa-skype"></i>bisar</li>
                                                <li><a target="_blank" href="https://www.facebook.com/BISARGLOBAL/"><i class="fa fa-facebook-square"></i>Facebook</a></li>
						<li><a target="_blank" href="https://www.youtube.com/watch?v=Pr9Rj0FgORY"><i class="fa fa-youtube-play"></i>YouTube</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="line6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d48386.401887313725!2d-73.9407136!3d40.7147117!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1402409149092" width="100%" height="750" frameborder="0" style="border:0"></iframe>			
		</div>
		<div class="container">
			<div class="row ftext">
				<div class="col-md-12">
				<a id="features"></a>
				<h3>Nos preocupamos por nuestros clientes y podemos hacer su vida más fácil!</h3>
				<p>No te pierdas esta oportunidad y sé parte de esta revolución que cambiará tu vida, sé parte de BISAR.</p>
				</div>
				<div class="cBtn">
					<ul style="margin-top: 23px; margin-bottom: 0px; padding-left: 26px;">
                                            <li class="dowbload"><a href="#"><i class="fa fa-star"></i><?php echo replace_vocales_voculeshtml("Regístrate");?></a></li>
					</ul>
			</div>
			</div>
		</div>
		<div class="line7">
			<div class="container">
				<div class="row footer">
					<div class="col-md-12">
						<h3>¡Suscríbete a nuestro boletín!</h3>
						<p>Suscríbete a nuestro boletín para recibir notificaciones sobre noticias recientes, últimas promociones y material gratuito de BISAR. Manténgase siempre al día!</p>
						<div class="fr">
						<div style="display: inline-block;">
							<input class="col-md-6 fEmail" name='Email' placeholder='Tu Email'/>
							<a href="#" class="subS">Subscribe!</a>
						</div>
						</div>
					</div>
					<div class="soc col-md-12">
						<ul>
                                                    <li class="soc2"><a target="_blank" href="https://www.facebook.com/BISARGLOBAL/?sw_fnr_id=29654392&fnr_t=0"></a></li>
							<li class="soc6"><a target="_blank" href="https://www.youtube.com/watch?v=Pr9Rj0FgORY&t=9s"></a></li>
							<li class="soc7"><a href="#"></a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="lineBlack">
			<div class="container">
				<div class="row downLine">
					<div class="col-md-6 text-left copy">
						<p>Copyright &copy; 2017 BISAR.</p>
					</div>
					<div class="col-md-6 text-right dm">
						<ul id="downMenu">
							<li class="active"><a href="#home">Inicio</a></li>
							<li><a href="#about">Acerca</a></li>
							<li><a href="#project1">Cursos</a></li>
							<li><a href="#news">Eventos</a></li>
							<li class="last"><a href="#contact">Contacto</a></li>
                                                        <li><a href="<?php echo site_url().'login'?>">Login</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    </div>		
		
		
	<script src="<?php echo site_url().'static/assets/js/jquery.prettyPhoto.js';?>" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo site_url().'static/assets/js/bootstrap.min.js';?>"></script>
	<script src="<?php echo site_url().'static/assets/js/jquery.slicknav.js';?>"></script>
	<script>
			$(document).ready(function(){
			$(".bhide").click(function(){
				$(".hideObj").slideDown();
				$(this).hide(); //.attr()
				return false;
			});
			$(".bhide2").click(function(){
				$(".container.hideObj2").slideDown();
				$(this).hide(); // .attr()
				return false;
			});
				
			$('.heart').mouseover(function(){
					$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
				}).mouseout(function(){
					$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
				});
				
				function sdf_FTS(_number,_decimal,_separator)
				{
				var decimal=(typeof(_decimal)!='undefined')?_decimal:2;
				var separator=(typeof(_separator)!='undefined')?_separator:'';
				var r=parseFloat(_number)
				var exp10=Math.pow(10,decimal);
				r=Math.round(r*exp10)/exp10;
				rr=Number(r).toFixed(decimal).toString().split('.');
				b=rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1"+separator);
				r=(rr[1]?b+'.'+rr[1]:b);

				return "+"+r;
}
				
			setTimeout(function(){
					$('#counter').text('0');
					$('#counter1').text('0');
					$('#counter2').text('0');
					setInterval(function(){
						
						var curval=parseInt($('#counter').text());
						var curval1=parseInt($('#counter1').text().replace(' ',''));
						var curval2=parseInt($('#counter2').text());
						if(curval<=0){
							$('#counter').text(curval+1);
						}
						if(curval1<=14980){
							$('#counter1').text(sdf_FTS((curval1+20),0,' '));
						}
						if(curval2<=99){
							$('#counter2').text(curval2+1);
						}
					}, 2);
					
				}, 500);
			});
	</script>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#menu').slicknav();
		
	});
	</script>
	
	<script type="text/javascript">
    $(document).ready(function(){
       
        var $menu = $("#menuF");
            
        $(window).scroll(function(){
            if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("default")
                           .addClass("fixed transbg")
                           .fadeIn('fast');
                });
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed transbg")
                           .addClass("default")
                           .fadeIn('fast');
                });
            }
        });
	});
    //jQuery
	</script>
	<script>
		/*menu*/
		function calculateScroll() {
			var contentTop      =   [];
			var contentBottom   =   [];
			var winTop      =   $(window).scrollTop();
			var rangeTop    =   200;
			var rangeBottom =   500;
			$('.navmenu').find('a').each(function(){
				contentTop.push( $( $(this).attr('href') ).offset().top );
				contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
			})
			$.each( contentTop, function(i){
				if ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){
					$('.navmenu li')
					.removeClass('active')
					.eq(i).addClass('active');				
				}
			})
		};
		
		$(document).ready(function(){
			calculateScroll();
			$(window).scroll(function(event) {
				calculateScroll();
			});
			$('.navmenu ul li a').click(function() {  
				$('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 800);
				return false;
			});
		});		
	</script>	
	<script type="text/javascript" charset="utf-8">

		jQuery(document).ready(function(){
			jQuery(".pretty a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: ''});
			
		});
	</script>
	</body>
	
</html>