
        <section class="page container">
            <div class="row">
                <div class="span16">
                        <?php
                        mysqli_fetch_object(getProfiles());

                            $tickets = getTicketByID($_GET['ticket']);

                            while ($ticket = $tickets->fetch_object()) {

                                echo "<div class='box'>
                                        <div class='box-header'>
                                            <i class='icon-leaf icon-large'></i>
                                            <h5>($ticket->ticketnumber) $ticket->ticket_name</h5>
                                            
                                        </div>
                                        <div style='padding:5px;font-size:12px'>
                                            <b>Date Created</b>: $ticket->t_date_time<br>
                                            <b>Created By</b>: $ticket->firstname $ticket->lastname, $ticket->middlename<br>
                                            <b>Status</b>: $ticket->ticket_status_name<br>
                                            <b>Notes</b>: $ticket->ticket_notes<br>
                                            <button type='button' class='btn' onClick='window.location.replace(\"/scc/?page=caseview&case=$ticket->case_id\");'>Back</button>
                                            ";
                                            if($ticket->ticket_status_id==1 && $_SESSION['user']['employee_id'] == $ticket->t_created_by) {
                                                echo "<button type='button' class='btn' onClick='window.location.replace(\"/scc/?page=ticketform&update=$ticket->ticket_id\");'>Update</button>";
                                            }

                                            echo "
                                         </div>
                                        <div class='box-content box-table'>

                                        </table>
                                        </div>

                                    </div>";
                            }
                        ?>
                
                    
                
                
                
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