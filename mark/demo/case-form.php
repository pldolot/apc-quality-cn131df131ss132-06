<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Case Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="layout" content="main"/>
    
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script src="../js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
    <link href="../css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />

    <style>
    </style>
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
                    <a href="dashboard.html" class="brand"><i class="icon-leaf">Support and Command Center</i></a>
                    <div id="app-nav-top-bar" class="nav-collapse">
                        
                        <ul class="nav pull-right">
                            <li>
                                <a href="login.html">Logout</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<div id="body-container">
            <div id="body-content">
                
                    <div class="body-nav body-nav-horizontal body-nav-fixed">
                        <div class="container">
                            <ul>
                              <li>
                                    <a href="dashboard.php">
                                        <i class="icon-dashboard icon-large"></i> Dashboard
                                    </a>
                                </li>
                               
                                <li>
                                    <a href="bei-boc-view.php">
                                        <i class="icon-tasks icon-large"></i> BEI/BOC Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="case.php">
                                        <i class="icon-folder-open icon-large"></i> Case
                                    </a>
                                </li>

                                <li>
                                    <a href="ticket.php">
                                        <i class="icon-flag icon-large"></i> Ticket
                                    </a>
                                </li>
                                <li>
                                    <a href="list-users.php">
                                        <i class="icon-user icon-large"></i>Users
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                
                
        <section class="nav-page" pageVTourUrl="guide/tour/form-tour.html"
                 pageVGuideUrl="guide/form-guide.html" >
            <div class="container">
                <div class="row">
                    <div class="span7">
                        <header class="page-header">
                            <h3>Case Form<br/><small>Create New Case</small></h3>
                        </header>
                    </div>
                    <div class="span9">
                        <ul class="nav nav-pills">
                            <li>
                                <button id="vtour-button" rel="tooltip" title="Launch Virtual Tour" data-placement="bottom">
                                    <i class="icon-magic icon-large"></i>
                                </button>
                            </li>
                            <li>
                                <button id="vguide-button" rel="tooltip" title="Launch Guide" data-placement="bottom">
                                    <i class="icon-question-sign icon-large"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="my-account-security-form" class="page container">
            <form id="userSecurityForm" class="form-horizontal" action="dashboard.html" method="post">
                <div class="container">

                    <div class="alert alert-block alert-info">
                        <p>
                            Enter information for your account as desired.  Fields marked with an asterisk
                            are required.
                        </p>
                    </div>
                    <div class="row">
                        <div style="width:900px">
                            
                                <legend>User Form</legend><br>

                                 
                                <div class="one">
                                    <div class="control-group ">
                                        <label class="control-label">Case Name<span class="required">*</span></label>
                                        <div class="controls">
                                            <input id="current-pass-control" name="cname" class="span4" type="text" value="" autocomplete="false">

                                        </div>
                                    </div>
                                        <br>

                                    <div class="control-group ">
                                        <label class="control-label">Case Status<span class="required">*</span></label>
                                        <div class="controls">
                                        <select class="span4">
                                            <option>Select Status</option>
                                            <option>Open</option>
                                            <option>Close</option>
                                            
                                        </select>
                                        

                                        </div>
                                    </div>
                                    <br>

                                 <div class="control-group ">
                                    <label class="control-label">Issue<span class="required">*</span></label>
                                    <div class="controls">
                                        <select class="span4">
                                            <option>Select Issue</option>
                                            <option>Evironmental</option>
                                            <option>Technical</option>
                                           
                                            
                                        </select>
                                        

                                    </div>
                                </div>
                                    <br>
                                <div class"two">
                                    
                                        <label class="control-label">Category<span class="required">*</span></label>
                                        <div class="controls">
                                            <select class="span4">
                                                <option>Select Category</option>
                                                <option>Soft Ware</option>
                                                <option>Hardware</option>
                                               
                                                
                                            </select>
                                            

                                        </div>
                                    
                                
                                    <br>

                                    
                                        <label class="control-label">Sub-Category<span class="required">*</span></label>
                                        <div class="controls">
                                            <select class="span4">
                                                <option>Select Sub-Category</option>
                                                <option>No Boot</option>
                                                <option>USB Port Broker</option>
                                               
                                                
                                            </select>
                                            

                                        </div>
                                    </div>
                            </div>
                                    <br>

                                
                                
                            
                        </div>
                        
                    </div>


                    <footer id="submit-actions" class="form-actions">
                        <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">Save</button>
                        <button type="submit" class="btn" name="action" value="CANCEL">Cancel</button>
                    </footer>
                </div>
            </form>
        </section>
    
            </div>
        </div>

        <footer class="application-footer">
            <div class="container">
                <p>Application Footer</p>
                <div class="disclaimer">
                    <p>This is an example disclaimer. All right reserved.</p>
                    <p>Copyright © keaplogik 2011-2012</p>
                </div>
            </div>
        </footer>
        <script src="../js/bootstrap/bootstrap-transition.js" type="text/javascript" ></script>
        <script src="../js/bootstrap/bootstrap-alert.js" type="text/javascript" ></script>
        <script src="../js/bootstrap/bootstrap-modal.js" type="text/javascript" ></script>
        <script src="../js/bootstrap/bootstrap-dropdown.js" type="text/javascript" ></script>
        <script src="../js/bootstrap/bootstrap-scrollspy.js" type="text/javascript" ></script>
        <script src="../js/bootstrap/bootstrap-tab.js" type="text/javascript" ></script>
        <script src="../js/bootstrap/bootstrap-tooltip.js" type="text/javascript" ></script>
        <script src="../js/bootstrap/bootstrap-popover.js" type="text/javascript" ></script>
        <script src="../js/bootstrap/bootstrap-button.js" type="text/javascript" ></script>
        <script src="../js/bootstrap/bootstrap-collapse.js" type="text/javascript" ></script>
        <script src="../js/bootstrap/bootstrap-carousel.js" type="text/javascript" ></script>
        <script src="../js/bootstrap/bootstrap-typeahead.js" type="text/javascript" ></script>
        <script src="../js/bootstrap/bootstrap-affix.js" type="text/javascript" ></script>
        <script src="../js/bootstrap/bootstrap-datepicker.js" type="text/javascript" ></script>
        <script src="../js/jquery/jquery-tablesorter.js" type="text/javascript" ></script>
        <script src="../js/jquery/jquery-chosen.js" type="text/javascript" ></script>
        <script src="../js/jquery/virtual-tour.js" type="text/javascript" ></script>
        <script type="text/javascript">
        $(function(){
            $('.chosen').chosen();
            $("[rel=tooltip]").tooltip();

            $("#vguide-button").click(function(e){
                new VTour(null, $('.nav-page')).tourGuide();
                e.preventDefault();
            });
            $("#vtour-button").click(function(e){
                new VTour(null, $('.nav-page')).tour();
                e.preventDefault();
            });
        });
    </script>

    </body>
</html>