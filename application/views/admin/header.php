<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="https://store.rencara.com/ct/img/rico.png" type="image/x-icon">
    <link rel="shortcut icon" href="https://store.rencara.com/ct/img/rico.png" type="image/x-icon">
    <title>Rencara - Admin</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/flag-icon.css">

    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/jsgrid.css">
	<link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/datatables.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/admin.css">
</head>

<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
   <div class="page-main-header">
        <div class="main-header-right row">
            <div class="main-header-left d-lg-none">
                <div class="logo-wrapper"><a href="https://store.rencara.com/admin"><img class="blur-up lazyloaded" src="https://store.rencara.com/ct/img/rencara.PNG" alt=""></a></div>
            </div>
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    
                    <li class="onhover-dropdown">
                        
                    </li>
                    <li class="onhover-dropdown">
                        <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="https://store.rencara.com/ct/img/<?php foreach($img as $i) { echo $i->img; } ?>" alt="header-user">
                            <div class=""><span class="animate-circle"></span><span class="main-circle"></span></div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            <li><a href="https://store.rencara.com/admin/editprof"><i data-feather="user"></i>Edit Profile</a></li>
                            <li><a href="https://store.rencara.com/admin/logout"><i data-feather="log-out"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>
	
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="https://store.rencara.com/admin"><img class="blur-up lazyloaded" src="https://store.rencara.com/ct/img/rencara.PNG" alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="https://store.rencara.com/admin"><i data-feather="home"></i><span>Dashboard</span></a></li>
					<li><a class="sidebar-header" href="#"><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://store.rencara.com/admin/user/"><i class="fa fa-circle"></i>Manage user</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="users"></i><span>Vendors</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://store.rencara.com/admin/vendor/"><i class="fa fa-circle"></i>Manage vendor</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="tag"></i><span>Category</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://store.rencara.com/admin/category/"><i class="fa fa-circle"></i>List Category</a></li>
                            <li><a href="https://store.rencara.com/admin/ecat"><i class="fa fa-circle"></i>Manage Category</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="clipboard"></i><span>Order</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://store.rencara.com/admin/trans"><i class="fa fa-circle"></i>List Order</a></li>
                            
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="clipboard"></i><span>Order Process</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://store.rencara.com/admin/orderpro"><i class="fa fa-circle"></i>List Order Process</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="dollar-sign"></i><span>Fund vendor</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://store.rencara.com/admin/fund"><i class="fa fa-circle"></i>List Fund vendor</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="#"><i data-feather="settings" ></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="https://store.rencara.com/admin/editprof"><i class="fa fa-circle"></i>Profile</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>