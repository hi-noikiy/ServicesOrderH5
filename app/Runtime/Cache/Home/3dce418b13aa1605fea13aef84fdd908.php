<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]><html lang="en" class="ie8 no-js"><![endif]-->
<!--[if IE 9]><html lang="en" class="ie9 no-js"><![endif]-->
<!--[if !IE]><!-->
<html lang="zh-cn">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>

<meta charset="utf-8"/>
<title><?php echo ($assign['title']); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="/public/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="/public/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="/public/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css"/>
<link href="/public/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css"/>
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="/public/assets/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/assets/layouts/layout2/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="/public/assets/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css"/>
<link href="/public/assets/pages/css/default.css" rel="stylesheet" type="text/css"/>
<!-- END THEME LAYOUT STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
<script type="text/javascript">
//公共常量设置
var _PUBLIC = '/public';
</script>
</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
	<!-- BEGIN HEADER -->
	<div class="page-header navbar navbar-fixed-top">
		<!-- BEGIN HEADER INNER -->
		<div class="page-header-inner ">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<a href="index.html">
                        <img src="/public/assets/layouts/layout2/img/logo-default.png" height="14" alt="logo" class="logo-default" /> </a>
			
				<div class="menu-toggler sidebar-toggler">
					<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
				</div>
			</div>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN PAGE TOP -->
			<div class="page-top">
				<!-- BEGIN TOP NAVIGATION MENU -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<!-- BEGIN NOTIFICATION DROPDOWN -->
						<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
						<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-default"> 1 </span>
                                </a>
						
							<ul class="dropdown-menu">
								<li class="external">
									<h3>
                                            <span class="bold">12 pending</span> notifications</h3>
								
									<a href="page_user_profile_1.html">view all</a>
								</li>
								<li>
									<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
										<li>
											<a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span> New user registered. </span>
                                                </a>
										
										</li>
                                        </ul>
							</ul>
						</li>
						<!-- END NOTIFICATION DROPDOWN -->
						<!-- BEGIN USER LOGIN DROPDOWN -->
						<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="/public/assets/layouts/layout2/img/avatar3_small.jpg" />
                                    <span class="username username-hide-on-mobile"> Nick </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
						
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="page_user_profile_1.html">
                                            <i class="icon-user"></i> My Profile </a>
								
								</li>
                                <li class="divider"> </li>
								<li>
									<a href="app_calendar.html">
                                            <i class="icon-calendar"></i> My Calendar </a>
								
								</li>
							</ul>
						</li>
						<!-- END USER LOGIN DROPDOWN -->
						<!-- BEGIN QUICK SIDEBAR TOGGLER -->
						<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
						<li class="dropdown dropdown-extended quick-sidebar-toggler">
							<span class="sr-only">Toggle Quick Sidebar</span>
							<i class="icon-logout"></i>
						</li>
						<!-- END QUICK SIDEBAR TOGGLER -->
					</ul>
				</div>
				<!-- END TOP NAVIGATION MENU -->
			</div>
			<!-- END PAGE TOP -->
		</div>
		<!-- END HEADER INNER -->
	</div>
	<!-- END HEADER --> 
<!-- BEGIN HEADER & CONTENT DIVIDER -->
<div class="clearfix"> </div>
<!-- END HEADER & CONTENT DIVIDER --> 
<!-- BEGIN CONTAINER -->
<div class="page-container">

<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper"> 
  <!-- END SIDEBAR --> 
  <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing --> 
  <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
  <div class="page-sidebar navbar-collapse collapse"> 
    <!-- BEGIN SIDEBAR MENU --> 
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) --> 
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode --> 
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode --> 
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing --> 
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded --> 
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
      <li class="nav-item start "> <a href="javascript:;" class="nav-link nav-toggle"><i class="icon-home"></i><span class="title">首 页</span><span class="arrow"></span> </a>
        <ul class="sub-menu">
          <li class="nav-item start "> <a href="index.html" class="nav-link "> <i class="icon-bar-chart"></i> <span class="title">Dashboard 1</span> </a> </li>
        </ul>
      </li>
      <li class="nav-item  "> <a href="javascript:;" class="nav-link nav-toggle"> <i class="icon-diamond"></i> <span class="title">UI Features</span> <span class="arrow"></span> </a>
        <ul class="sub-menu">
          <li class="nav-item  "> <a href="ui_colors.html" class="nav-link "> <span class="title">Color Library</span> </a> </li>
        </ul>
      </li>
    </ul>
    <!-- END SIDEBAR MENU --> 
  </div>
  <!-- END SIDEBAR --> 
</div>
<!-- END SIDEBAR --> 
  <!-- BEGIN CONTENT -->
  <div class="page-content-wrapper"> 
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content"> 
      <!-- BEGIN PAGE HEADER-->
      <h3 class="page-title">这里是标题</h3>
      <div class="page-bar">
        <ul class="page-breadcrumb">
          <li><i class="icon-home"></i> <a href="index.html">Home</a> <i class="fa fa-angle-right"></i></li>
        </ul>
      </div>
      <!-- END PAGE HEADER-->
      <p>here will be multi purpose support(knowledgebase and help) page</p>
    </div>
    <!-- END CONTENT BODY --> 
  </div>
  <!-- END CONTENT --> 
</div>
<!-- END CONTAINER --> 

<!-- BEGIN FOOTER -->
<div class="page-footer">
  <div class="page-footer-inner"> 2017 &copy; Hong Tai info . All Rights Reserved. </div>
  <div class="scroll-to-top"> <i class="icon-arrow-up"></i> </div>
</div>
<!-- END FOOTER -->

<!--[if lt IE 9]>
<script src="/public/assets/global/plugins/respond.min.js"></script>
<script src="/public/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="/public/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/public/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/public/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/public/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/public/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/public/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/public/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/public/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/public/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="/public/assets/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
<script src="/public/assets/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
<script src="/public/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>
</html>