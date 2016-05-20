
        <div id="body-container">
                    <div id="body-content">
                        
                        
            <div class='container'>
                
                <div class="signin-row row">
                    <div class="span4"></div>
                    <div class="span8">
                        <div class="container-signin">
                            <legend>Please Login</legend>
                            <form action='' method='POST' id='loginForm' class='form-signin' autocomplete='off'>
                                <div class="form-inner">
                                    <div class="input-prepend">
                                        
                                        <span class="add-on" rel="tooltip" title="Username or E-Mail Address" data-placement="top"><i class="icon-envelope"></i></span>
                                        <input type='text' class='span4' id='username' name='username'/>
                                    </div>

                                    <div class="input-prepend">
                                        
                                        <span class="add-on"><i class="icon-key"></i></span>
                                        <input type='password' class='span4' id='password' name='password'/>
                                    </div>

                                <?php

                                $status = -1;
                                $result = null;

                                if(isset($_POST['username']) && isset($_POST['password'])) {

                                    $result = login($_POST['username'], $_POST['password']);

                                    if($result != null) {
                                        $status = 1;
                                    } else {
                                        $status = 0;
                                    }
                                }
                                            
                                if($status == 1) {
                                    $_SESSION['user'] = $result;

                                    echo "<script>setTimeout(location.reload(), 1000);</script>";
                                } else if($status == 0) {   
                                    //echo unsuccessful login message here
                                    echo "Username and Password is incorrect!<br>";
                                }
                                ?>
                                </div>
                                <footer class="signin-actions">
                                    <input class="btn btn-primary" type='submit' name='action' id='submit' value='Login'/>
                                </footer>
                            </form>
                        </div>
                    </div>
                    <div class="span3"></div>
                </div>

                <div class="signin-row row">
                    <div class="span4"></div>
                    <div class="span8">
                        <div class="well well-small well-shadow">
                            <legend class="lead">Additional Content</legend>
                            Add additional content here.
                        </div>
                    </div>
                    <div class="span8"></div>
                </div>
            <!--<div class="span4">

                </div>-->
            </div>
    

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
        <script type="text/javascript">
            $(function(){
                document.forms['loginForm'].elements['j_username'].focus();
                $('body').addClass('pattern pattern-sandstone');
                $("[rel=tooltip]").tooltip();
            });
        </script>