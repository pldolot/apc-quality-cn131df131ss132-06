<?php 
 if(isset($_POST['action']) && isset($_GET['update'])) {
    $profile = array(
    'profile_id' => $_GET['update'],
    'firstname' => $_POST['fname'],
    'lastname' => $_POST['lname'],
    'middlename' => $_POST['mname'],
    'mmname' => $_POST['mmname'],
    'sex' => $_POST['sex'],
    'type' => $_POST['type'],
    'sssgsis' => $_POST['sssgsis'],
    'sssgsis_number' => $_POST['sssgsis_number'],
    'precinct' => $_POST['precinct'],
    'phonenumber' => $_POST['phonenumber'],
    'employee_id' => $_SESSION['user']['employee_id']   
    );


    updateProfile($profile);
}

$profile = null;
if(isset($_GET['update'])) { 
    $profile = mysqli_fetch_object(getProfileByID($_GET['update']));
}



?>
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
                        <div id="acct-password-row" class="span7" style="width: 802px;">
                            <fieldset>
                                <legend>BEI/BOC Form</legend><br>

                                 <div class="control-group ">
                                    <label class="control-label">First Name<span class="required">*</span></label>
                                    <div class="controls">
                                        <input id="current-pass-control" name="fname" class="span4" type="text" value="<?php if($profile) { echo $profile->profile_firstname; } ?>" autocomplete="false">

                                    </div>
                                    <br>

                                 <div class="control-group ">
                                    <label class="control-label">Last Name <span class="required">*</span></label>
                                    <div class="controls">
                                        <input id="current-pass-control" name="lname" class="span4" type="text" value="<?php if($profile) { echo $profile->profile_lastname; } ?>" autocomplete="false">

                                    </div>
                                <br>

                                 <div class="control-group ">
                                    <label class="control-label">Middle Name<span class="required">*</span></label>
                                    <div class="controls">
                                        <input id="current-pass-control" name="mname" class="span4" type="text" value="<?php if($profile) { echo $profile->profile_middlename; } ?>" autocomplete="false">

                                    </div>
                                    <br>

                                    <div class="control-group ">
                                    <label class="control-label">Mother's Maiden Name<span class="required">*</span></label>
                                    <div class="controls">
                                        <input id="current-pass-control" name="mmname" class="span4" type="text" value="<?php if($profile) { echo $profile->mothers_maiden_name; } ?>" autocomplete="false">

                                    </div>
                                    <br>



                                    <div class="control-group ">
                                    <label class="control-label">Precinct<span class="required">*</span></label>
                                    <div class="controls">

                                      <?php
                                      getPrecincts($profile);
                                      ?>


                                    </div>
                                    <br>

                                    <div class="control-group ">
                                    <label class="control-label">SSS/GSIS<span class="required">*</span></label>
                                    <div class="controls">

                                      <input type="radio" name="sssgsis" value="1" <?php if($profile) { echo $profile->sss!=""?"checked":"";} else { echo "checked";} ?>> SSS <input type="radio" name="sssgsis" value="2" <?php if($profile) { echo $profile->gsis!=""?"checked":"";} ?>> GSIS<br><br>
                                        <input id="current-pass-control" name="sssgsis_number" class="span4" type="text" value="<?php if($profile) { echo $profile->sss!=""?$profile->sss:$profile->gsis;} ?>" autocomplete="false">

                                    </div>
                                    <br>

                                     <div class="control-group ">
                                    <label class="control-label">Sex<span class="required">*</span></label>
                                    <div class="controls">

                                      <input type="radio" name="sex" value="Male" <?php if($profile) { echo $profile->p_sex=="Male"?"checked":"";} else { echo "checked";}?>> Male <input type="radio" name="sex" value="Female" <?php if($profile) { echo $profile->p_sex=="Female"?"checked":"";}?>> Female<br>
                                        

                                    </div>
                                    <br>



                                    <div class="control-group ">
                                    <label class="control-label">Type<span class="required">*</span></label>
                                    <div class="controls">
                                        <input type="radio" name="type" value="1" <?php if($profile) { echo $profile->type_id==1?"checked":"";} else { echo "checked";}?> > BEI <input type="radio" name="type" value="2" <?php if($profile) { echo $profile->type_id==2?"checked":"";}?>> BOC<br>
                                        

                                    </div>
                                    <br>

                                    <div class="control-group ">
                                    <label class="control-label">Phonenumber<span class="required">*</span></label>
                                    
                                    <div class="controls">
                                        <input id="current-pass-control" name="phonenumber" class="span4" type="text" value="<?php if($profile) { echo $profile->phonenumber; } ?>" autocomplete="false">

                                    </div>
                                    <br>

                                    

                        <?php
                                if(isset($_POST['action']) && !isset($_GET['update'])) {
                                    $profile = array(
                                    'firstname' => $_POST['fname'],
                                    'lastname' => $_POST['lname'],
                                    'middlename' => $_POST['mname'],
                                    'mmname' => $_POST['mmname'],
                                    'sex' => $_POST['sex'],
                                    'type' => $_POST['type'],
                                    'sssgsis' => $_POST['sssgsis'],
                                    'sssgsis_number' => $_POST['sssgsis_number'],
                                    'precinct' => $_POST['precinct'],
                                    'phonenumber' => $_POST['phonenumber'],
                                    'employee_id' => $_SESSION['user']['employee_id']   
                                    );

                                    if(createProfile($profile)) {
                                        echo "Success";

                                            echo "<script>window.location.replace('/scc/?page=beibocp');</script>";
                                    } else {
                                        echo "Failed";
                                    }
                                } else if(isset($_POST['action']) && isset($_GET['update'])) {
                                    echo "Update Successful";
                                }
                                
                                ?>
                        
                    </div>
                    <footer id="submit-actions" class="form-actions">
                        <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">Save</button>
                        <button type="button" class="btn" value="CANCEL" onClick="window.location.replace('/scc/?page=beibocp');">Cancel</button>
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