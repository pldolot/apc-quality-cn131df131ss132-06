<?php 
 if(isset($_POST['action']) && isset($_GET['update'])) {
    $ticket = array(
    'ticket_id' => $_GET['update'],
    'ticket_notes' => $_POST['ticket_notes'],
    'ticket_status' => $_POST['ticket_status']
    );


    updateTicket($ticket);
}

$ticket = null;
if(isset($_GET['update'])) { 
    $ticket = mysqli_fetch_object(getTicketByID($_GET['update']));
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
                        <div id="acct-password-row" class="span7">
                            <fieldset>
                                <legend>Ticket Form</legend><br>

                                <?php
                                if(isset($_POST['action']) && !isset($_GET['update'])) {
                                    $ticket = array(
                                    'ticket_name' => $_POST['ticket_name'],
                                    'ticket_notes' => nl2br($_POST['ticket_notes']),
                                    'ticket_status' => $_POST['ticket_status'],
                                    'case_id' => $_GET['case'],
                                    'created_by' => $_SESSION['user']['employee_id']
                                    );

                                    $ticket_id = createTicket($ticket);

                                    if($ticket_id>-1) {
                                        echo "<script>window.location.replace('/scc/?page=ticketview&ticket=$ticket_id');</script>";
                                    }
                                }
                                
                                ?>

                                <div class="control-group ">
                                    <label class="control-label">Ticket Name<span class="required">*</span></label>
                                    <div class="controls">
                                        <input id="current-pass-control" name="ticket_name" class="span4" type="text" value="<?php if($ticket) { echo $ticket->ticket_name; } ?>" <?php echo isset($_GET['update'])?"disabled":""; ?> autocomplete="false">

                                    </div>
                                </div>
                                 
                                <div class="control-group ">
                                    <label class="control-label">Ticket Status<span class="required">*</span style="color:red"></label>
                                    <div class="controls">
                                        <select class="span4" name="ticket_status">
                                            <?php
                                                $statuses = getTicketStatuses();
                                                while($status = mysqli_fetch_object($statuses)) {
                                                    echo "<option value=\"$status->ticket_status_id\">$status->ticket_status_name</option>";
                                                }
                                            ?>
                                            
                                        </select>
                                        

                                    </div>
                                </div>
                                    <br>
                                

                                <div class="control-group ">
                                    <label class="control-label">Ticket Notes<span class="required">*</span></label>
                                    <div class="controls">
                                        
                                        <textarea rows="10" style="width:500px" name="ticket_notes"><?php if($ticket) { echo $ticket->ticket_notes; } ?></textarea>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        
                    </div>

<?php
if(isset($_POST['action']) && isset($_GET['update'])) {echo "<br>Update Successful";
if(isset($_POST['action']) && $_POST['ticket_status']!=1) {echo "<script>window.location.replace('/scc/?page=ticketview&ticket=$_GET[update]');</script>";}
}


?>  
                    <footer id="submit-actions" class="form-actions">
                        <button id="submit-button" type="submit" class="btn btn-primary" status="action" name="action">Save</button>
                        <button type="button" class="btn" value="CANCEL" onClick="window.location.replace('/scc/?page=caseview&case=<?php echo isset($_GET['case'])?$_GET['case']:$ticket->case_id; ?>');">Cancel</button>
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