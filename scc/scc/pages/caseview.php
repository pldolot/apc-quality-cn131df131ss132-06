
        <section class="page container">
            <div class="row">
                <div class="span16">
                        <?php
                        mysqli_fetch_object(getProfiles());

                            $cases = getCasesByID($_GET['case']);

                            while ($case = $cases->fetch_object()) {

                                echo "<div class='box'>
                                        <div class='box-header'>
                                            <i class='icon-envelope icon-large'></i>
                                            <h5>($case->casenumber) $case->case_name</h5>
                                            
                                        </div>
                                        <div style='padding:5px;font-size:12px'>
                                            <b>Date Created</b>: $case->c_date_time<br>
                                            <b>Created By</b>: $case->firstname $case->lastname, $case->middlename<br>
                                            <b>Issue</b>: $case->issue_name<br>
                                            <b>Category</b>: $case->category_name<br>
                                            <b>Sub-Category</b>: $case->subcategory_name<br>
                                            <b>Status</b>: $case->case_status_name<br>
                                            ".($case->case_status_id==1?"<button type='button' class='btn' onClick='window.location.replace(\"/scc/?page=caseform&update=$case->case_id\");'>Update</button>":"")."
                                        </div>
                                        <div class='box-content box-table'>


                                        <div class='box-header'>
                                        ".($case->case_status_id==1?"<a href='?page=ticketform&case=$case->case_id' class='icon-pencil icon-large'></a>":"")."
                                           
                                            <h5>Tickets</h5>
                                        </div>
                                        <table class='table table-hover tablesorter'>
                                            <thead>
                                                <tr>
                                                    <th>Ticket Number</th>
                                                    <th>Ticket Name</th>
                                                    <th>Date Created</th>
                                                    <th>Created By</th>
                                                    <th>Ticket Notes</th>
                                                    <th>Ticket Status</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>";

                                $tickets = getTicketsByCase($case->case_id);

                                if($tickets) {
                                    while ($ticket = $tickets->fetch_object()) {

                                             echo "<tr onClick='window.document.location=\"?page=ticketview&ticket=$ticket->ticket_id\"' style='cursor: pointer'>
                                                        <td>$ticket->ticketnumber</td>
                                                        <td>$ticket->ticket_name</td>
                                                        <td>$ticket->t_date_time</td>
                                                        <td>$ticket->firstname $ticket->lastname, $ticket->middlename</td>
                                                        <td>$ticket->ticket_notes</td>
                                                        <td>$ticket->ticket_status_name</td>
                                                    </tr>";
                                    }
                                }
                                
                                echo "
                                            
                                            </tbody>
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