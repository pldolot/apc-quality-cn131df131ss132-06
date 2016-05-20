<?php 
 if(isset($_POST['action']) && isset($_GET['update'])) {
    $case = array(
    'case_id' => $_GET['update'],
    'case_status' => $_POST['case_status'],
    'created_by' => $_SESSION['user']['employee_id']
    );


    updateCase($case);
}

$case = null;
if(isset($_GET['update'])) { 
    $case = mysqli_fetch_object(getCasesByID($_GET['update']));
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
                        <div style="width:900px">
                            
                                <legend>Case Form</legend><br>

                                <?php
                                if(isset($_POST['action']) && !isset($_GET['update'])) {
                                    $case = array(
                                    'case_name' => $_POST['case_name'],
                                    'case_status' => $_POST['case_status'],
                                    'issue' => $_POST['issue'],
                                    'category' => $_POST['category'],
                                    'subcategory' => $_POST['subcategory'],
                                    'profile_id' => $_GET['profile'],
                                    'created_by' => $_SESSION['user']['employee_id']
                                    );

                                    $case_id = createCase($case);

                                    if($case_id>-1) {
                                        echo "<script>window.location.replace('/scc/?page=caseview&case=$case_id');</script>";
                                    }
                                }
                                
                                ?>

                                 
                                <div class="one">
                                    <div class="control-group ">
                                        <label class="control-label">Case Name<span class="required">*</span></label>
                                        <div class="controls">
                                            <input id="current-pass-control" name="case_name" class="span4" type="text" value="<?php if($case) { echo $case->case_name; } ?>" <?php echo isset($_GET['update'])?"disabled":""; ?> autocomplete="false">

                                        </div>
                                    </div>
                                        <br>

                                    <div class="control-group ">
                                        <label class="control-label">Case Status<span class="required">*</span></label>
                                        <div class="controls">
                                        <select class="span4" name="case_status">
                                            <?php
                                            $case_statuses = getCaseStatuses();
                                            while($case_status = mysqli_fetch_object($case_statuses)) {
                                                echo "<option value=\"$case_status->case_status_id\" ".($case?($case->case_status_id==$case_status->case_status_id?"selected":""):"").">$case_status->case_status_name</option>";
                                            }
                                            ?>
                                            
                                        </select>
                                        

                                        </div>
                                    </div>
                                    <br>

                                 <div class="control-group ">
                                    <label class="control-label">Issue<span class="required">*</span></label>
                                    <div class="controls">
                                        <select class="span4" name="issue" <?php echo isset($_GET['update'])?"disabled":""; ?>>
                                            <?php
                                            $issues = getIssues();
                                            while($issue = mysqli_fetch_object($issues)) {
                                                echo "<option value=\"$issue->issue_id\" ".($case?($case->issue_id==$issue->issue_id?"selected":""):"").">$issue->issue_name</option>";
                                            }
                                            ?>
                                           
                                            
                                        </select>
                                        

                                    </div>
                                </div>
                                    <br>
                                <div class"two">
                                    
                                        <label class="control-label">Category<span class="required">*</span></label>
                                        <div class="controls">
                                            <select class="span4" name="category" <?php echo isset($_GET['update'])?"disabled":""; ?>>
                                               
                                                <?php
                                                $categories = getCategories();
                                                while($category = mysqli_fetch_object($categories)) {
                                                    echo "<option value=\"$category->category_id\" ".($case?($case->category_id==$category->category_id?"selected":""):"").">$category->category_name</option>";
                                                }
                                                ?>
                                            </select>
                                            

                                        </div>
                                    
                                
                                    <br>

                                    
                                        <label class="control-label">Sub-Category<span class="required">*</span></label>
                                        <div class="controls">
                                            <select class="span4" name="subcategory" <?php echo isset($_GET['update'])?"disabled":""; ?>>
                                                <?php
                                                $subcategories = getSubCategories();
                                                while($subcategory = mysqli_fetch_object($subcategories)) {
                                                    echo "<option value=\"$subcategory->subcategory_id\" ".($case?($case->subcategory_id==$subcategory->subcategory_id?"selected":""):"").">$subcategory->subcategory_name</option>";
                                                }
                                                ?>
                                               
                                                
                                            </select>
                                            

                                        </div>

                                    </div>

                            </div>
                        </div>
                    </div>
<?php
if(isset($_POST['action']) && isset($_GET['update'])) {echo "<br>Update Successful";
if(isset($_POST['action']) && $_POST['ticket_status']!=1) {echo "<script>window.location.replace('/scc/?page=caseview&case=$_GET[update]');</script>";}
}

?>  


                    <footer id="submit-actions" class="form-actions">
                        <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM">Save</button>
                        <button type="button" class="btn" value="CANCEL" onClick="window.location.replace('/scc/?page=case');">Cancel</button>
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