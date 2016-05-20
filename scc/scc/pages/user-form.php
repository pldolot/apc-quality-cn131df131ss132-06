
        <section id="my-account-security-form" class="page container">
            <form id="userSecurityForm" class="form-horizontal" action="" method="post">
                <div class="container">

                    <div class="alert alert-block alert-info">
                        <p>
                            Enter information for your account as desired.  Fields marked with an asterisk
                            are required.
                        </p>
                    </div>
                    <div class="row">
                        <div id="acct-password-row" class="span7">
                            <fieldset>
                                <legend>User Form</legend><br>


                                <?php

                                if(isset($_POST['action'])) {
                                    $user = array(
                                    'fname' => $_POST['fname'],
                                    'lname' => $_POST['lname'],
                                    'mname' => $_POST['mname'],
                                    'sex' => $_POST['sex'],
                                    'position' => $_POST['position'],
                                    'username' => $_POST['username'],
                                    'email' => $_POST['email'],
                                    'password' => $_POST['password'],
                                    'repassword' => $_POST['repassword']
                                    );

                                    createUser($user);
                                }
                                
                                ?>

                                 <div class="control-group ">
                                    <label class="control-label">First Name<span class="required">*</span></label>
                                    <div class="controls">
                                        <input id="current-pass-control" name="fname" class="span4" type="text" value="" autocomplete="false">

                                    </div>
                                    <br>

                                 <div class="control-group ">
                                    <label class="control-label">Last Name <span class="required">*</span></label>
                                    <div class="controls">
                                        <input id="current-pass-control" name="lname" class="span4" type="text" value="" autocomplete="false">

                                    </div>
                                <br>

                                 <div class="control-group ">
                                    <label class="control-label">Middle Name<span class="required">*</span></label>
                                    <div class="controls">
                                        <input id="current-pass-control" name="mname" class="span4" type="text" value="" autocomplete="false">

                                    </div>
                                    <br>

                                     <div class="control-group ">
                                    <label class="control-label">Sex<span class="required">*</span></label>
                                    <div class="controls">
                                        <select class="span4" name="sex">
                                            <option>Select Position</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            
                                        </select>
                                        

                                    </div>
                                    <br>

                                 <div class="control-group ">
                                    <label class="control-label">Position<span class="required">*</span></label>
                                    <div class="controls">
                                        <select class="span4" name='position'>
                                            <option>Select Position</option>

                                            <?php
                                            $positions = getUserPositions();
                                            while($position = mysqli_fetch_object($positions)) {
                                                if($_SESSION['user']['position']==11) {
                                                    echo "<option value=\"$position->position_id\">$position->position_name</option>";
                                                } else if($_SESSION['user']['position']==12 && ($position->position_id==12||$position->position_id==13||$position->position_id==14)) {
                                                    echo "<option value=\"$position->position_id\">$position->position_name</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                        

                                    </div>
                                    <br>
                                <div class="control-group ">
                                    <label class="control-label">Username <span class="required">*</span></label>
                                    <div class="controls">
                                        <input id="current-pass-control" name="username" class="span4" type="text" value="" autocomplete="false">
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label class="control-label">Email <span class="required">*</span></label>
                                    <div class="controls">
                                        <input id="current-pass-control" name="email" class="span4" type="email" value="" autocomplete="false">
                                    </div>
                                </div>
                               
                                <div class="control-group ">
                                    <label class="control-label">Password<span class="required">*</span></label>
                                    <div class="controls">
                                        <input id="new-pass-control" name="password" class="span4" type="password" value="" autocomplete="false">

                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label class="control-label">Re-type Password <span class="required">*</span></label>
                                    <div class="controls">
                                        <input id="new-pass-verify-control" name="repassword" class="span4" type="password" value="" autocomplete="false">

                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        
                    </div>
                    <footer id="submit-actions" class="form-actions">
                        <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">Save</button>
                        <button type="button" class="btn" value="CANCEL" onClick="window.location.replace('/scc/?page=user');">Cancel</button>
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