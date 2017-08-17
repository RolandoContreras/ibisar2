<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
<title>BISAR</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<!-- /site favicon -->
<script src="https://use.fontawesome.com/3aa4a6fd0b.js"></script>
<!-- Entypo font stylesheet -->
<link href="http://g-axon.com/mouldifi4.3/dark/css/entypo.css" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="http://g-axon.com/mouldifi4.3/dark/css/font-awesome.min.css" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="http://g-axon.com/mouldifi4.3/dark/css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Mouldifi core stylesheet -->
<link href="http://g-axon.com/mouldifi4.3/dark/css/mouldifi-core.css" rel="stylesheet">
<!-- /mouldifi core stylesheet -->

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
  
  		<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo">
                      <a href="index.html">
                          <img src="http://g-axon.com/mouldifi4.3/dark/images/logo.png" width="100px" alt="Mouldifi" title="Mouldifi">
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
			<li class="has-sub"><a href="collapsed-sidebar.html"><i class="fa fa-address-book fa-lg"></i><span class="title">Mi Perfil</span></a>
				<ul class="nav collapse">
					<li><a href="collapsed-sidebar.html"><span class="title">Collapsed Sidebar</span></a></li>
					<li><a href="fixed-sidebar.html"><span class="title">Fixed Sidebar</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="panels.html"><i class="fa fa-book fa-lg"></i><span class="title">Mis Cursos</span></a>
				<ul class="nav collapse">
					<li><a href="panels.html"><span class="title">Intensivos</span></a></li>
					<li><a href="buttons.html"><span class="title">Módulos</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="basic-tables.html"><i class="fa fa-newspaper-o fa-lg"></i><span class="title">Noticias</span></a>
				<ul class="nav collapse">
					<li><a href="basic-tables.html"><span class="title">Basic Tables</span></a></li>
					<li><a href="data-tables.html"><span class="title">Data Tables</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="form-basic.html"><i class="fa fa-tasks fa-lg"></i><span class="title">Programas</span></a>
			</li>
			<li class="has-sub"><a href="graph-flot.html"><i class="fa fa-certificate fa-lg"></i><span class="title">Certificaciones</span></a>
			</li>
			<li class="has-sub"><a href="mail-inbox.html"><i class="fa fa-sign-out fa-lg"></i><span class="title">Salir</span></a>
				<ul class="nav collapse">
					<li><a href="mail-inbox.html"><span class="title">Inbox</span></a></li>
					<li><a href="mail-compose.html"><span class="title">Compose Mail</span></a></li>
					<li><a href="mail-read.html"><span class="title">View Mail</span></a></li>
				</ul>
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
                  <img width="44" class="img-circle avatar" alt="" src="http://g-axon.com/mouldifi4.3/dark/images/man-3.jpg">John Henderson <span class="caret"></span>
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
								<div class="media-left"><img alt="" class="img-circle img-sm" src="http://g-axon.com/mouldifi4.3/dark/images/domnic-brown.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">Domnic Brown</span>
										<span class="media-annotation pull-right">Tue</span>
									</a>
									<span class="text-muted">Your product sounds interesting I would love to check this ne...</span>
								</div>
							</li>
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="http://g-axon.com/mouldifi4.3/dark/images/john-smith.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">John Smith</span>
										<span class="media-annotation pull-right">12:30</span>
									</a>
									<span class="text-muted">Thank you for posting such a wonderful content. The writing was outstanding...</span>
								</div>
							</li>
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="http://g-axon.com/mouldifi4.3/dark/images/stella-johnson.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">Stella Johnson</span>
										<span class="media-annotation pull-right">2 days ago</span>
									</a>
									<span class="text-muted">Thank you for trusting us to be your source for top quality sporting goods...</span>
								</div>
							</li>
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="http://g-axon.com/mouldifi4.3/dark/images/alex-dolgove.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">Alex Dolgove</span>
										<span class="media-annotation pull-right">10:45</span>
									</a>
									<span class="text-muted">After our Friday meeting I was thinking about our business relationship and how fortunate...</span>
								</div>
							</li>
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="http://g-axon.com/mouldifi4.3/dark/images/domnic-brown.png"></div>
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
	
	<!-- Main content -->
	<div class="main-content">
		<h1 class="page-title">Entypo Icons</h1>
		<!-- Breadcrumb -->
		<ol class="breadcrumb breadcrumb-2"> 
			<li><a href="index.html"><i class="fa fa-home"></i>Home</a></li> 
			<li><a href="icons-entypo.html">Icons</a></li> 
			<li class="active"><strong>Entypo</strong></li> 
		</ol>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h3 class="panel-title">Entypo icon set</h3>
						<ul class="panel-tool-options"> 
							<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
							<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
							<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
						</ul>
					</div>
					<div class="panel-body">
						<div class="row icons-showcase">
						  <div class="col-md-3 col-sm-4"><i class="icon-note"></i> icon-note</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-note-beamed"></i> icon-note-beamed</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-music"></i> icon-music</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-search"></i> icon-search</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-flashlight"></i> icon-flashlight</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-mail"></i> icon-mail</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-heart"></i> icon-heart</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-heart-empty"></i> icon-heart-empty</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-star"></i> icon-star</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-star-empty"></i> icon-star-empty</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-user"></i> icon-user</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-users"></i> icon-users</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-user-add"></i> icon-user-add</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-video"></i> icon-video</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-picture"></i> icon-picture</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-camera"></i> icon-camera</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-layout"></i> icon-layout</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-menu"></i> icon-menu</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-check"></i> icon-check</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cancel"></i> icon-cancel</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cancel-circled"></i> icon-cancel-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cancel-squared"></i> icon-cancel-squared</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-plus"></i> icon-plus</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-plus-circled"></i> icon-plus-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-plus-squared"></i> icon-plus-squared</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-minus"></i> icon-minus</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-minus-circled"></i> icon-minus-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-minus-squared"></i> icon-minus-squared</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-help"></i> icon-help</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-help-circled"></i> icon-help-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-info"></i> icon-info</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-info-circled"></i> icon-info-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-back"></i> icon-back</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-home"></i> icon-home</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-link"></i> icon-link</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-attach"></i> icon-attach</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-lock"></i> icon-lock</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-lock-open"></i> icon-lock-open</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-eye"></i> icon-eye</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-tag"></i> icon-tag</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-bookmark"></i> icon-bookmark</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-bookmarks"></i> icon-bookmarks</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-flag"></i> icon-flag</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-thumbs-up"></i> icon-thumbs-up</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-thumbs-down"></i> icon-thumbs-down</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-download"></i> icon-download</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-upload"></i> icon-upload</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-upload-cloud"></i> icon-upload-cloud</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-reply"></i> icon-reply</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-reply-all"></i> icon-reply-all</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-forward"></i> icon-forward</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-quote"></i> icon-quote</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-code"></i> icon-code</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-export"></i> icon-export</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-pencil"></i> icon-pencil</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-feather"></i> icon-feather</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-print"></i> icon-print</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-retweet"></i> icon-retweet</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-keyboard"></i> icon-keyboard</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-comment"></i> icon-comment</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-chat"></i> icon-chat</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-bell"></i> icon-bell</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-attention"></i> icon-attention</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-alert"></i> icon-alert</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-vcard"></i> icon-vcard</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-address"></i> icon-address</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-location"></i> icon-location</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-map"></i> icon-map</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-direction"></i> icon-direction</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-compass"></i> icon-compass</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cup"></i> icon-cup</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-trash"></i> icon-trash</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-doc"></i> icon-doc</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-docs"></i> icon-docs</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-doc-landscape"></i> icon-doc-landscape</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-doc-text"></i> icon-doc-text</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-doc-text-inv"></i> icon-doc-text-inv</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-newspaper"></i> icon-newspaper</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-book-open"></i> icon-book-open</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-book"></i> icon-book</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-folder"></i> icon-folder</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-archive"></i> icon-archive</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-box"></i> icon-box</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-rss"></i> icon-rss</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-phone"></i> icon-phone</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cog"></i> icon-cog</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-tools"></i> icon-tools</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-share"></i> icon-share</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-shareable"></i> icon-shareable</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-basket"></i> icon-basket</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-bag"></i> icon-bag</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-calendar"></i> icon-calendar</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-login"></i> icon-login</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-logout"></i> icon-logout</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-mic"></i> icon-mic</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-mute"></i> icon-mute</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-sound"></i> icon-sound</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-volume"></i> icon-volume</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-clock"></i> icon-clock</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-hourglass"></i> icon-hourglass</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-lamp"></i> icon-lamp</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-light-down"></i> icon-light-down</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-light-up"></i> icon-light-up</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-adjust"></i> icon-adjust</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-block"></i> icon-block</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-resize-full"></i> icon-resize-full</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-resize-small"></i> icon-resize-small</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-popup"></i> icon-popup</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-publish"></i> icon-publish</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-window"></i> icon-window</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-arrow-combo"></i> icon-arrow-combo</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-down-circled"></i> icon-down-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-left-circled"></i> icon-left-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-right-circled"></i> icon-right-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-up-circled"></i> icon-up-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-down-open"></i> icon-down-open</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-left-open"></i> icon-left-open</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-right-open"></i> icon-right-open</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-up-open"></i> icon-up-open</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-down-open-mini"></i> icon-down-open-mini</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-left-open-mini"></i> icon-left-open-mini</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-right-open-mini"></i> icon-right-open-mini</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-up-open-mini"></i> icon-up-open-mini</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-down-open-big"></i> icon-down-open-big</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-left-open-big"></i> icon-left-open-big</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-right-open-big"></i> icon-right-open-big</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-up-open-big"></i> icon-up-open-big</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-down"></i> icon-down</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-left"></i> icon-left</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-right"></i> icon-right</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-up"></i> icon-up</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-down-dir"></i> icon-down-dir</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-left-dir"></i> icon-left-dir</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-right-dir"></i> icon-right-dir</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-up-dir"></i> icon-up-dir</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-down-bold"></i> icon-down-bold</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-left-bold"></i> icon-left-bold</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-right-bold"></i> icon-right-bold</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-up-bold"></i> icon-up-bold</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-down-thin"></i> icon-down-thin</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-left-thin"></i> icon-left-thin</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-right-thin"></i> icon-right-thin</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-up-thin"></i> icon-up-thin</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-ccw"></i> icon-ccw</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cw"></i> icon-cw</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-arrows-ccw"></i> icon-arrows-ccw</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-level-down"></i> icon-level-down</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-level-up"></i> icon-level-up</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-shuffle"></i> icon-shuffle</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-loop"></i> icon-loop</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-switch"></i> icon-switch</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-play"></i> icon-play</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-stop"></i> icon-stop</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-pause"></i> icon-pause</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-record"></i> icon-record</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-to-end"></i> icon-to-end</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-to-start"></i> icon-to-start</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-fast-forward"></i> icon-fast-forward</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-fast-backward"></i> icon-fast-backward</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-progress-0"></i> icon-progress-0</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-progress-1"></i> icon-progress-1</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-progress-2"></i> icon-progress-2</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-progress-3"></i> icon-progress-3</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-target"></i> icon-target</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-palette"></i> icon-palette</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-list"></i> icon-list</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-list-add"></i> icon-list-add</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-signal"></i> icon-signal</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-trophy"></i> icon-trophy</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-battery"></i> icon-battery</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-back-in-time"></i> icon-back-in-time</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-monitor"></i> icon-monitor</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-mobile"></i> icon-mobile</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-network"></i> icon-network</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cd"></i> icon-cd</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-inbox"></i> icon-inbox</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-install"></i> icon-install</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-globe"></i> icon-globe</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cloud"></i> icon-cloud</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cloud-thunder"></i> icon-cloud-thunder</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-flash"></i> icon-flash</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-moon"></i> icon-moon</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-flight"></i> icon-flight</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-paper-plane"></i> icon-paper-plane</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-leaf"></i> icon-leaf</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-lifebuoy"></i> icon-lifebuoy</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-mouse"></i> icon-mouse</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-briefcase"></i> icon-briefcase</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-suitcase"></i> icon-suitcase</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-dot"></i> icon-dot</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-dot-2"></i> icon-dot-2</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-dot-3"></i> icon-dot-3</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-brush"></i> icon-brush</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-magnet"></i> icon-magnet</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-infinity"></i> icon-infinity</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-erase"></i> icon-erase</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-chart-pie"></i> icon-chart-pie</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-chart-line"></i> icon-chart-line</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-chart-bar"></i> icon-chart-bar</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-chart-area"></i> icon-chart-area</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-tape"></i> icon-tape</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-graduation-cap"></i> icon-graduation-cap</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-language"></i> icon-language</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-ticket"></i> icon-ticket</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-water"></i> icon-water</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-droplet"></i> icon-droplet</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-air"></i> icon-air</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-credit-card"></i> icon-credit-card</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-floppy"></i> icon-floppy</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-clipboard"></i> icon-clipboard</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-megaphone"></i> icon-megaphone</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-database"></i> icon-database</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-drive"></i> icon-drive</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-bucket"></i> icon-bucket</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-thermometer"></i> icon-thermometer</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-key"></i> icon-key</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-flow-cascade"></i> icon-flow-cascade</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-flow-branch"></i> icon-flow-branch</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-flow-tree"></i> icon-flow-tree</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-flow-line"></i> icon-flow-line</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-flow-parallel"></i> icon-flow-parallel</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-rocket"></i> icon-rocket</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-gauge"></i> icon-gauge</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-traffic-cone"></i> icon-traffic-cone</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cc"></i> icon-cc</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cc-by"></i> icon-cc-by</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cc-nc"></i> icon-cc-nc</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cc-nc-eu"></i> icon-cc-nc-eu</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cc-nc-jp"></i> icon-cc-nc-jp</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cc-sa"></i> icon-cc-sa</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cc-nd"></i> icon-cc-nd</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cc-pd"></i> icon-cc-pd</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cc-zero"></i> icon-cc-zero</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cc-share"></i> icon-cc-share</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-cc-remix"></i> icon-cc-remix</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-logo-db"></i> icon-logo-db</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-github"></i> icon-github</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-github-circled"></i> icon-github-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-flickr"></i> icon-flickr</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-flickr-circled"></i> icon-flickr-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-vimeo"></i> icon-vimeo</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-vimeo-circled"></i> icon-vimeo-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-twitter"></i> icon-twitter</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-twitter-circled"></i> icon-twitter-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-facebook"></i> icon-facebook</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-facebook-circled"></i> icon-facebook-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-facebook-squared"></i> icon-facebook-squared</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-gplus"></i> icon-gplus</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-gplus-circled"></i> icon-gplus-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-pinterest"></i> icon-pinterest</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-pinterest-circled"></i> icon-pinterest-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-tumblr"></i> icon-tumblr</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-tumblr-circled"></i> icon-tumblr-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-linkedin"></i> icon-linkedin</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-linkedin-circled"></i> icon-linkedin-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-dribbble"></i> icon-dribbble</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-dribbble-circled"></i> icon-dribbble-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-stumbleupon"></i> icon-stumbleupon</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-stumbleupon-circled"></i> icon-stumbleupon-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-lastfm"></i> icon-lastfm</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-lastfm-circled"></i> icon-lastfm-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-rdio"></i> icon-rdio</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-rdio-circled"></i> icon-rdio-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-spotify"></i> icon-spotify</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-spotify-circled"></i> icon-spotify-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-qq"></i> icon-qq</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-instagrem"></i> icon-instagrem</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-dropbox"></i> icon-dropbox</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-evernote"></i> icon-evernote</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-flattr"></i> icon-flattr</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-skype"></i> icon-skype</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-skype-circled"></i> icon-skype-circled</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-renren"></i> icon-renren</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-sina-weibo"></i> icon-sina-weibo</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-paypal"></i> icon-paypal</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-picasa"></i> icon-picasa</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-soundcloud"></i> icon-soundcloud</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-mixi"></i> icon-mixi</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-behance"></i> icon-behance</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-google-circles"></i> icon-google-circles</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-vkontakte"></i> icon-vkontakte</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-smashing"></i> icon-smashing</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-sweden"></i> icon-sweden</div>
						  <div class="col-md-3 col-sm-4"><i class="icon-db-shape"></i> icon-db-shape</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Footer -->
		<footer class="footer-main"> 
			&copy; 2016 <strong>Mouldifi</strong> Admin Theme by <a target="_blank" href="#/">G-axon</a> 
		</footer>	
		<!-- /footer -->
		
	  </div>
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
<script src="http://g-axon.com/mouldifi4.3/dark/js/functions.js"></script>
</body>
</html>
