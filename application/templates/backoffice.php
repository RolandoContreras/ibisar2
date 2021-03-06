<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Equipo con la visión de ayudar a las personas en una superación personal y económica">
<meta name="keywords" content="ibisar,bisar,multinivel,binario,negocio,mlm,dinero,bitcoin,millones,educacion,futuro">
<title>BISAR</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='http://g-axon.com/mouldifi4.3/dark/images/favicon.ico' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="http://g-axon.com/mouldifi4.3/dark/css/entypo.css" rel="stylesheet">
<!-- /entypo font stylesheet -->
<script src="https://use.fontawesome.com/3aa4a6fd0b.js"></script>
<!-- Font awesome stylesheet -->
<link href="http://g-axon.com/mouldifi4.3/dark/css/font-awesome.min.css" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="http://g-axon.com/mouldifi4.3/dark/css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Mouldifi core stylesheet -->
<link href="<?php echo site_url().'static/backoffice/css/mouldifi-core.css'?>" rel="stylesheet">
<!-- /mouldifi core stylesheet -->

<link href="http://g-axon.com/mouldifi4.3/dark/css/mouldifi-forms.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- Page container -->
<div class="page-container">

  <!-- Page Sidebar -->
  <div class="page-sidebar">
		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
			<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo">
                      <a href="index.html">
                          <img src="<?php echo site_url().'static/backoffice/images/logo_120.png'?>" width="100px" alt="BISAR" title="BISAR">
                      </a>
                  </div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs">
                      <a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#">
                          <i class="icon-menu"></i>
                      </a>
                  </div>
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
                    <li class="has-sub"><a href="<?php echo site_url().'backoffice'?>"><i class="fa fa-tachometer fa-lg"></i><span class="title">Dashboard</span></a></li>
			<li class="has-sub"><a href="#"><i class="fa fa-address-book fa-lg"></i><span class="title">Mi Perfil</span></a>
<!--				<ul class="nav collapse">
					<li><a href="collapsed-sidebar.html"><span class="title">Collapsed Sidebar</span></a></li>
					<li><a href="fixed-sidebar.html"><span class="title">Fixed Sidebar</span></a></li>
				</ul>-->
			</li>
			<li class="has-sub"><a href="#"><i class="fa fa-book fa-lg"></i><span class="title">Mis Cursos</span></a>
				<ul class="nav collapse">
					<li><a href="panels.html"><span class="title">Intensivos</span></a></li>
					<li><a href="buttons.html"><span class="title">Módulos</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="#"><i class="fa fa-newspaper-o fa-lg"></i><span class="title">Noticias</span></a>
			</li>
			<li class="has-sub"><a href="#"><i class="fa fa-tasks fa-lg"></i><span class="title">Programas</span></a>
			</li>
			<li class="has-sub"><a href="#"><i class="fa fa-certificate fa-lg"></i><span class="title">Certificaciones</span></a>
			</li>
                        <li class="has-sub"><a href="<?php echo site_url().'login/logout';?>"><i class="fa fa-sign-out fa-lg"></i><span class="title">Salir</span></a>
			</li>
			
		</ul>
		<!-- /main navigation -->		
  </div>
  <!-- /page sidebar -->
  
  <!-- Main container -->
  <div class="main-container">
  
	<!-- Main header -->
    <div class="main-header row">
      <div class="col-sm-6 col-xs-7">
	  
	<!-- User info -->
        <ul class="user-info pull-left">          
          <li class="profile-info dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> 
                  <img width="44" class="img-circle avatar" alt="" src="<?php echo site_url().'static/backoffice/images/avatar/avatar.jpg';?>">Rolando Contreras &nbsp;&nbsp;<i class="fa fa-arrow-down" aria-hidden="true"></i>
              </a>
		  
			<!-- User action menu -->
            <ul class="dropdown-menu">
              
              <li><a href="#/"><i class="icon-user"></i>My profile</a></li>
              <li><a href="#/"><i class="icon-mail"></i>Messages</a></li>
              <li><a href="#"><i class="icon-clipboard"></i>Tasks</a></li>
			  <li class="divider"></li>
			  <li><a href="#"><i class="icon-cog"></i>Account settings</a></li>
			  <li><a href="#"><i class="icon-logout"></i>Logout</a></li>
            </ul>
			<!-- /user action menu -->
			
          </li>
        </ul>
		<!-- /user info -->
		
      </div>
	  
      <div class="col-sm-6 col-xs-5">
	  	<div class="pull-right">
			<!-- User alerts -->
			<ul class="user-info pull-left">
			
			  <!-- Notifications -->
			  <li class="notifications dropdown">
				<a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-attention"></i><span class="badge badge-info">6</span></a>
				<ul class="dropdown-menu pull-right">
					<li class="first">
						<div class="small"><a class="pull-right danger" href="#">Mark all Read</a> You have <strong>3</strong> new notifications.</div>
					</li>
					<li>
						<ul class="dropdown-list">
							<li class="unread notification-success"><a href="#"><i class="icon-user-add pull-right"></i><span class="block-line strong">New user registered</span><span class="block-line small">30 seconds ago</span></a></li>
							<li class="unread notification-secondary"><a href="#"><i class="icon-heart pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
							<li class="unread notification-primary"><a href="#"><i class="icon-user pull-right"></i><span class="block-line strong">Privacy settings have been changed</span><span class="block-line small">2 hours ago</span></a></li>
							<li class="notification-danger"><a href="#"><i class="icon-cancel-circled pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
							<li class="notification-info"><a href="#"><i class="icon-info pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
							<li class="notification-warning"><a href="#"><i class="icon-rss pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
						</ul>
					</li>
					<li class="external-last"> <a href="#" class="danger">View all notifications</a> </li>
				</ul>
			  </li>
			  <!-- /notifications -->
			  
			  <!-- Messages -->
			  <li class="notifications dropdown">
				<a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-mail"></i><span class="badge badge-secondary">12</span></a>
				<ul class="dropdown-menu pull-right">
					<li class="first">
						<div class="dropdown-content-header"><i class="fa fa-pencil-square-o pull-right"></i> Messages</div>
					</li>
					<li>
						<ul class="media-list">
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="images/domnic-brown.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">Domnic Brown</span>
										<span class="media-annotation pull-right">Tue</span>
									</a>
									<span class="text-muted">Your product sounds interesting I would love to check this ne...</span>
								</div>
							</li>
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="images/john-smith.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">John Smith</span>
										<span class="media-annotation pull-right">12:30</span>
									</a>
									<span class="text-muted">Thank you for posting such a wonderful content. The writing was outstanding...</span>
								</div>
							</li>
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="images/stella-johnson.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">Stella Johnson</span>
										<span class="media-annotation pull-right">2 days ago</span>
									</a>
									<span class="text-muted">Thank you for trusting us to be your source for top quality sporting goods...</span>
								</div>
							</li>
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="images/alex-dolgove.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">Alex Dolgove</span>
										<span class="media-annotation pull-right">10:45</span>
									</a>
									<span class="text-muted">After our Friday meeting I was thinking about our business relationship and how fortunate...</span>
								</div>
							</li>
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="images/domnic-brown.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">Domnic Brown</span>
										<span class="media-annotation pull-right">4:00</span>
									</a>
									<span class="text-muted">I would like to take this opportunity to thank you for your cooperation in recently completing...</span>
								</div>
							</li>
						</ul>
					</li>
					<li class="external-last"> <a class="danger" href="#">All Messages</a> </li>
				</ul>
			  </li>
			  <!-- /messages -->
			  
			</ul>
			<!-- /user alerts -->
			
		</div>
      </div>
    </div>
	<!-- /main header -->
	<?php echo $body;?>
	  <!-- /main content -->
	  
  </div>
  <!-- /main container -->
  
</div>
<!-- /page container -->

<!--Load JQuery-->
<script src="http://g-axon.com/mouldifi4.3/dark/js/jquery.min.js"></script>
<script src="http://g-axon.com/mouldifi4.3/dark/js/bootstrap.min.js"></script>
<script src="http://g-axon.com/mouldifi4.3/dark/js/plugins/metismenu/jquery.metisMenu.js"></script>
<script src="http://g-axon.com/mouldifi4.3/dark/js/plugins/blockui-master/jquery-ui.js"></script>
<script src="http://g-axon.com/mouldifi4.3/dark/js/plugins/blockui-master/jquery.blockUI.js"></script>
 <!--Float Charts-->
<script src="http://g-axon.com/mouldifi4.3/dark/js/plugins/flot/jquery.flot.min.js"></script>
<script src="http://g-axon.com/mouldifi4.3/dark/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="http://g-axon.com/mouldifi4.3/dark/js/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="http://g-axon.com/mouldifi4.3/dark/js/plugins/flot/jquery.flot.selection.min.js"></script>
<script src="http://g-axon.com/mouldifi4.3/dark/js/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="http://g-axon.com/mouldifi4.3/dark/js/plugins/flot/jquery.flot.time.min.js"></script>

<script src="http://g-axon.com/mouldifi4.3/dark/js/functions.js"></script>

 <!--ChartJs-->
<script src="http://g-axon.com/mouldifi4.3/dark/js/plugins/chartjs/Chart.min.js"></script>
<script>
	$(document).ready(function () {
		var previousPoint = null;
		$('#graph-lines').bind('plothover', function (event, pos, item) {
			if (item) {
				if (previousPoint != item.dataIndex) {
					previousPoint = item.dataIndex;
					$('#flotTip').remove();

					var label = item.series.label;
					var x = item.datapoint[0],
							y = item.datapoint[1];
					showTooltip(item.pageX, item.pageY, y + ' ' + label + ' at ' + x + '.00h');
				}
			} else {
				$('#flotTip').remove();
				previousPoint = null;
			}
		});

		var graphData = [{
				// Visits
				data: [[6, 1300], [7, 1600], [8, 1900], [9, 2100], [10, 2500], [11, 2200], [12, 2000], [13, 1950], [14, 1900], [15, 2000]],
				color: '#71c73e',
				label: 'Visitors',
			}, {
				// Returning Visits
				data: [[6, 500], [7, 600], [8, 550], [9, 600], [10, 800], [11, 900], [12, 800], [13, 850], [14, 830], [15, 1000]],
				color: '#77b7c5',
				label: 'Customers',
				points: {radius: 4, fillColor: '#77b7c5'}
			}
		];
		// Lines
		$.plot($('#graph-lines'), graphData, {
			series: {
				points: {
					show: true,
					radius: 5
				},
				lines: {
					show: true
				},
				shadowSize: 0
			},
			grid: {
				color: '#646464',
				borderColor: 'transparent',
				borderWidth: 20,
				hoverable: true
			},
			legend: {
				show: true,
				position: 'left', // left or right
			},
			xaxis: {
				tickColor: 'transparent',
				tickDecimals: 2
			},
			yaxis: {
				tickSize: 1000
			}
		});

		//doughnut chart
		var doughnutData = [
			{
				value: 5742,
				color: "#22b66f",
				highlight: "#12a65f",
				label: "Only Visited"
			},
			{
				value: 2496,
				color: "#f3c111",
				highlight: "#e7b505",
				label: "Purchased"
			},
			{
				value: 1762,
				color: "#ef193c",
				highlight: "#e81235",
				label: "Bounced"
			}
		];

		var doughnutOptions = {
			segmentShowStroke: true,
			segmentStrokeColor: "transparent",
			segmentStrokeWidth: 0,
			percentageInnerCutout: 60, // This is 0 for Pie charts
			animationSteps: 100,
			animationEasing: "easeOutBounce",
			animateRotate: true,
			animateScale: false,
			responsive: true,
			//String - A legend template
			legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
		};

		var canvas = document.getElementById("doughnutChart");
		var helpers = Chart.helpers;
		//var ctx = document.getElementById("doughnutChart").getContext("2d");
		var moduleDoughnut = new Chart(canvas.getContext("2d")).Doughnut(doughnutData, doughnutOptions);
		var legendHolder = document.createElement('div');
		legendHolder.innerHTML = moduleDoughnut.generateLegend();
		helpers.each(legendHolder.firstChild.childNodes, function (legendNode, index) {
			helpers.addEvent(legendNode, 'mouseover', function () {
				var activeSegment = moduleDoughnut.segments[index];
				activeSegment.save();
				activeSegment.fillColor = activeSegment.highlightColor;
				moduleDoughnut.showTooltip([activeSegment]);
				activeSegment.restore();
			});
		});
		helpers.addEvent(legendHolder.firstChild, 'mouseout', function () {
			moduleDoughnut.draw();
		});
		canvas.parentNode.parentNode.appendChild(legendHolder.firstChild);
	});
</script>
</body>
</html>
