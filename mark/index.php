<?php

session_start();
// session_destroy();
include('db_connect.php');
include('core.php');

if(isset($_GET['logout'])) {
    session_destroy();

    echo "<script>


    setTimeout(window.location.replace('/scc/'), 300);

    </script>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php
        if(isset($_GET['page']))
            echo getPageTitle($_GET['page']);
    ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="layout" content="main"/>

    <script src="js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
    <link href="css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />
        <link href="css/treeview.css" type="text/css" media="screen, projection" rel="stylesheet" />

    <style>
    </style>

        <script src="js/bootstrap/bootstrap-transition.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-alert.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-modal.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-dropdown.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-scrollspy.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-tab.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-tooltip.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-popover.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-button.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-collapse.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-carousel.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-typeahead.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-affix.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-datepicker.js" type="text/javascript" ></script>
        <script src="js/jquery/jquery-tablesorter.js" type="text/javascript" ></script>
        <script src="js/jquery/jquery-chosen.js" type="text/javascript" ></script>
        <script src="js/jquery/virtual-tour.js" type="text/javascript" ></script>
</head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="brand"><i class="icon-leaf">Support and Command Center</i></a>
                    <div id="app-nav-top-bar" class="nav-collapse">
                        
                        <ul class="nav pull-right">
                            <?php
                                if(isset($_SESSION['user'])) {
                            ?>
                            <li>
                                <a href="#">Welcome <?php echo $_SESSION['user']['firstname'];?>!</a>
                            </li>
                            <li>
                                <a href="#">ID NUMBER: <?php echo $_SESSION['user']['id_number'];?></a>
                            </li>
                            <li>
                                <a href="?logout">Logout</a>
                            </li>
                            <?php
                                }
                            ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<?php
if(!isset($_SESSION['user'])) {
    include('pages/login.php');
} else {
?>
        <div id="body-container">
            <div id="body-content">
                
                    <div class="body-nav body-nav-horizontal body-nav-fixed">
                        <div class="container">
                            <ul>

                                <?php if($_SESSION['user']['position']==11) { ?>
                                <li>
                                    <a href="?page=dashboard">
                                        <i class="icon-dashboard icon-large"></i> Dashboard
                                    </a>
                                </li>
                                <?php } ?>
                               
                               <?php if($_SESSION['user']['position']==11 ||
                                        $_SESSION['user']['position']==15) { ?>
                                <li>
                                    <a href="?page=beibocp">
                                        <i class="icon-tasks icon-large"></i> BEI/BOC Profile
                                    </a>
                                </li>
                                <?php } ?>

                                <?php if($_SESSION['user']['position']==11||
                                        $_SESSION['user']['position']==13) { ?>
                                <li>
                                    <a href="?page=case">
                                        <i class="icon-folder-open icon-large"></i> Case
                                    </a>
                                </li>
                                <?php } ?>

                                <?php if($_SESSION['user']['position']==11 ||
                                         $_SESSION['user']['position']==12) { ?>
                                <li>
                                    <a href="?page=users">
                                        <i class="icon-user icon-large"></i>Users
                                    </a>
                                </li>
                                <?php } ?>
                                
                            </ul>
                        </div>
                    </div>
        <section class="nav-page">
            <div class="container">
                <div class="row">
                    <div class="span7">
                        <header class="page-header">
                            <h3><?php 
                            if(isset($_GET['page']))
                                echo getPageHeader($_GET['page']);
                            ?><br/>
                                <small></small>
                            </h3>
                        </header>
                    </div>
                    <div class="span9">
                        <ul class="nav nav-pills">
                            <li>
                                <?php
                                    if(isset($_GET['page'])) {
                                        getPageIconNav($_GET['page']);
                                    }
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

<?php
    if(isset($_GET['page'])) {
        getPageInclude($_GET['page']);
    }
}
?>