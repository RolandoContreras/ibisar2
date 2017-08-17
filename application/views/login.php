<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view("head");?>
    <body>
    <!--home start-->
    
    <div id="home">
	 <div id="menuF" class="fixed transbg" style="display: block;background-color: black !important; padding-bottom: 25px;">
		<div class="container">
			<div class="row">
				<div class="logo col-md-4">
					<div>
                                            <a href="#">
                                                    <img src="http://localhost/ibisar2/static/assets/images/logo.png">
                                            </a>
					</div>
				</div>
				<div class="col-md-8">
					<div class="navmenu" style="text-align: center;">
						<ul id="menu">
							<li class="active"><a href="#home">Inicio</a></li>
                                                        <li><a href="<?php echo site_url().'home';?>#about">Acerca</a></li>
							<li><a href="<?php echo site_url().'home';?>#project">Cursos</a></li>
							<li><a href="<?php echo site_url().'home';?>#news">Eventos</a></li>
							<li><a href="<?php echo site_url().'home';?>#contact">Contacto</a></li>
                                                        <li><a href="#">Login</a></li>
						</ul>
                                           
					</div>
                                    
						 
					
				</div>
			</div>
		</div>
	</div>
            
        
		<div class="container">
                    <div class="row" style="margin-top: 150px !important;margin-bottom: 100px !important;">
				<div class="col-md-12 cBusiness">
                                    <h3 style="font-size: 40px !important;"><?php echo replace_vocales_voculeshtml("Iniciar Sesión");?></h3>
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-xs-12 forma">
					<form>
						<input type="text" class="col-md-6 col-xs-6 " name='name' placeholder='Usuario *'/>
                                                <input type="password" class="col-md-6 col-xs-6 " name='Email' placeholder='Contraseña *'/>
                                                <br><br><br>
						<div class="cBtn col-xs-12">
							<ul>
                                                            <li class="send"><a onclick="send_login();"><i class="fa fa-share"></i><?php echo replace_vocales_voculeshtml("Iniciar Sesión");?></a></li>
							</ul>
						</div>
					</form>
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
     <div id="spinner"></div>
		
	<script src="<?php echo site_url().'static/assets/js/jquery.prettyPhoto.js';?>" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo site_url().'static/assets/js/bootstrap.min.js';?>"></script>
	<script src="<?php echo site_url().'static/assets/js/jquery.slicknav.js';?>"></script>
        <script src="<?php echo site_url().'static/page_front/js/contact.js';?>"></script>
        <script src="<?php echo site_url().'static/assets/spin/js/spin.min.js';?>"></script>
        <script src="<?php echo site_url().'static/cms/js/core/jquery.js';?>"></script>   
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
	</body>
	
</html>