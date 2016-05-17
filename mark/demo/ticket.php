<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Ticket Page</title>
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
                
                
        <section class="nav-page">
            <div class="container">
                <div class="row">
                    <div class="span7">
                        <header class="page-header">
                            <h3>Case<br/>
                                <small>Case List</small>
                            </h3>
                        </header>
                    </div>
                    <div class="span9">
                        <ul class="nav nav-pills">
                                
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="page container">
            <div class="row">
                <div class="span4">
                    <div class="blockoff-right">
                        <ul id="person-list" class="nav nav-list">
                            <li class="nav-header">People</li>
                            <li class="active">
                                <a id="view-all" href="#">
                                    <i class="icon-chevron-right pull-right"></i>
                                    <b>View All</b>
                                </a>
                            </li>
                            
                                <li>
                                    <a href="#Person-1">
                                        <i class="icon-chevron-right pull-right"></i>
                                        John Doe
                                    </a>
                                </li>
                            
                                <li>
                                    <a href="#Person-5">
                                        <i class="icon-chevron-right pull-right"></i>
                                        Steve Gunther
                                    </a>
                                </li>
                            
                                <li>
                                    <a href="#Person-4">
                                        <i class="icon-chevron-right pull-right"></i>
                                        Patrick Hartwin
                                    </a>
                                </li>
                            
                                <li>
                                    <a href="#Person-7">
                                        <i class="icon-chevron-right pull-right"></i>
                                        Sarah Mathews
                                    </a>
                                </li>
                            
                                <li>
                                    <a href="#Person-10">
                                        <i class="icon-chevron-right pull-right"></i>
                                        Patty Mayonaise
                                    </a>
                                </li>
                            
                                <li>
                                    <a href="#Person-8">
                                        <i class="icon-chevron-right pull-right"></i>
                                        Lisa Pudock
                                    </a>
                                </li>
                            
                                <li>
                                    <a href="#Person-2">
                                        <i class="icon-chevron-right pull-right"></i>
                                        Joe Reed
                                    </a>
                                </li>
                            
                                <li>
                                    <a href="#Person-3">
                                        <i class="icon-chevron-right pull-right"></i>
                                        Jim Smith
                                    </a>
                                </li>
                            
                                <li>
                                    <a href="#Person-6">
                                        <i class="icon-chevron-right pull-right"></i>
                                        Sam Whiting
                                    </a>
                                </li>
                            
                                <li>
                                    <a href="#Person-9">
                                        <i class="icon-chevron-right pull-right"></i>
                                        Kara Whiting
                                    </a>
                                </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="span12">
                
                    <div id="Person-1" class="box">
                        <div class="box-header">
                            <i class="icon-user icon-large"></i>
                            <h5>John Doe</h5>
                            
                        </div>
                        <div class="box-content box-table">
                        <table class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip Code</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>2 Sandy Creek</td>
                                    <td>Longely</td>
                                    <td>NY</td>
                                    <td>34009</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>3 Apple St</td>
                                    <td>Korba</td>
                                    <td>KY</td>
                                    <td>40351</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>117 W 2nd St</td>
                                    <td>Alberta</td>
                                    <td>TX</td>
                                    <td>55555</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>117 W 2nd St</td>
                                    <td>Ladly</td>
                                    <td>ME</td>
                                    <td>55533</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>117 W 2nd St</td>
                                    <td>Windsor</td>
                                    <td>NY</td>
                                    <td>13865</td>
                                    
                                </tr>
                            
                            </tbody>
                        </table>
                        </div>

                    </div>
                
                    <div id="Person-5" class="box">
                        <div class="box-header">
                            <i class="icon-user icon-large"></i>
                            <h5>Steve Gunther</h5>
                            
                        </div>
                        <div class="box-content box-table">
                        <table class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip Code</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>759 Sinking Dr.</td>
                                    <td>Sacramento</td>
                                    <td>CA</td>
                                    <td>98765</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>53 Sinking Dr.</td>
                                    <td>Sacramento</td>
                                    <td>CA</td>
                                    <td>98765</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>1 Beach Rd</td>
                                    <td>Sacramento</td>
                                    <td>CA</td>
                                    <td>98765</td>
                                    
                                </tr>
                            
                            </tbody>
                        </table>
                        </div>

                    </div>
                
                    <div id="Person-4" class="box">
                        <div class="box-header">
                            <i class="icon-user icon-large"></i>
                            <h5>Patrick Hartwin</h5>
                            
                        </div>
                        <div class="box-content box-table">
                        <table class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip Code</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>53 Sinking Dr.</td>
                                    <td>Sacramento</td>
                                    <td>CA</td>
                                    <td>98765</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>1 Beach Rd</td>
                                    <td>Sacramento</td>
                                    <td>CA</td>
                                    <td>98765</td>
                                    
                                </tr>
                            
                            </tbody>
                        </table>
                        </div>

                    </div>
                
                    <div id="Person-7" class="box">
                        <div class="box-header">
                            <i class="icon-user icon-large"></i>
                            <h5>Sarah Mathews</h5>
                            
                        </div>
                        <div class="box-content box-table">
                        <table class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip Code</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>40 Shorten Ave Apt 33</td>
                                    <td>Burlington</td>
                                    <td>VT</td>
                                    <td>22183</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>81 Lake Dr.</td>
                                    <td>Burlington</td>
                                    <td>VT</td>
                                    <td>22183</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>1772 Lovely Lane</td>
                                    <td>Plattsburgh</td>
                                    <td>NY</td>
                                    <td>22795</td>
                                    
                                </tr>
                            
                            </tbody>
                        </table>
                        </div>

                    </div>
                
                    <div id="Person-10" class="box">
                        <div class="box-header">
                            <i class="icon-user icon-large"></i>
                            <h5>Patty Mayonaise</h5>
                            
                        </div>
                        <div class="box-content box-table">
                        <table class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip Code</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>100 Doug Funny Road</td>
                                    <td>Morehead</td>
                                    <td>KY</td>
                                    <td>40351</td>
                                    
                                </tr>
                            
                            </tbody>
                        </table>
                        </div>

                    </div>
                
                    <div id="Person-8" class="box">
                        <div class="box-header">
                            <i class="icon-user icon-large"></i>
                            <h5>Lisa Pudock</h5>
                            
                        </div>
                        <div class="box-content box-table">
                        <table class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip Code</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>1772 Lovely Lane</td>
                                    <td>Plattsburgh</td>
                                    <td>NY</td>
                                    <td>22795</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>40 Shorten Ave Apt 33</td>
                                    <td>Burlington</td>
                                    <td>VT</td>
                                    <td>22183</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>81 Lake Dr.</td>
                                    <td>Burlington</td>
                                    <td>VT</td>
                                    <td>22183</td>
                                    
                                </tr>
                            
                            </tbody>
                        </table>
                        </div>

                    </div>
                
                    <div id="Person-2" class="box">
                        <div class="box-header">
                            <i class="icon-user icon-large"></i>
                            <h5>Joe Reed</h5>
                            
                        </div>
                        <div class="box-content box-table">
                        <table class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip Code</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>71 Kind Ave Apt 3</td>
                                    <td>Scranton</td>
                                    <td>PA</td>
                                    <td>44567</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>8559 Hard Rock</td>
                                    <td>Scranton</td>
                                    <td>PA</td>
                                    <td>44567</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>8233 Juniper Rd</td>
                                    <td>Charleston</td>
                                    <td>WV</td>
                                    <td>33982</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>33 Main St</td>
                                    <td>Frankfort</td>
                                    <td>KY</td>
                                    <td>77625</td>
                                    
                                </tr>
                            
                            </tbody>
                        </table>
                        </div>

                    </div>
                
                    <div id="Person-3" class="box">
                        <div class="box-header">
                            <i class="icon-user icon-large"></i>
                            <h5>Jim Smith</h5>
                            
                        </div>
                        <div class="box-content box-table">
                        <table class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip Code</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>55 Holdem Dr.</td>
                                    <td>Ft. Worth</td>
                                    <td>TX</td>
                                    <td>77298</td>
                                    
                                </tr>
                            
                                <tr>
                                    <td>780 Country Rd</td>
                                    <td>Blue Ridge</td>
                                    <td>PA</td>
                                    <td>44564</td>
                                    
                                </tr>
                            
                            </tbody>
                        </table>
                        </div>

                    </div>
                
                    <div id="Person-6" class="box">
                        <div class="box-header">
                            <i class="icon-user icon-large"></i>
                            <h5>Sam Whiting</h5>
                            
                        </div>
                        <div class="box-content box-table">
                        <table class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip Code</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>1 Beach Rd</td>
                                    <td>Sacramento</td>
                                    <td>CA</td>
                                    <td>98765</td>
                                    
                                </tr>
                            
                            </tbody>
                        </table>
                        </div>

                    </div>
                
                    <div id="Person-9" class="box">
                        <div class="box-header">
                            <i class="icon-user icon-large"></i>
                            <h5>Kara Whiting</h5>
                            
                        </div>
                        <div class="box-content box-table">
                        <table class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>Street</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip Code</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>9901 Shore Dr.</td>
                                    <td>Sandiego</td>
                                    <td>CA</td>
                                    <td>98741</td>
                                    
                                </tr>
                            
                            </tbody>
                        </table>
                        </div>

                    </div>
                
                </div>
            </div>
        </section>
        
    
            </div>
        </div>

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
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
        $(function() {
            $('#person-list.nav > li > a').click(function(e){
                if($(this).attr('id') == "view-all"){
                    $('div[id*="Person-"]').fadeIn('fast');
                }else{
                    var aRef = $(this);
                    var tablesToHide = $('div[id*="Person-"]:visible').length > 1
                            ? $('div[id*="Person-"]:visible') : $($('#person-list > li[class="active"] > a').attr('href'));

                    tablesToHide.hide();
                    $(aRef.attr('href')).fadeIn('fast');
                }
                $('#person-list > li[class="active"]').removeClass('active');
                $(this).parent().addClass('active');
                e.preventDefault();
            });

            $(function(){
                $('table').tablesorter();
                $("[rel=tooltip]").tooltip();
            });
        });
    </script>

	</body>
</html>