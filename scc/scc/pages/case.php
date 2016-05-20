
        <section class="page container">
            <div class="row">
                <div class="span4">
                    <div class="blockoff-right">
                        <form method="GET" action="">
                            <input type="hidden" name="page" value="case"/>  
                            <input type="text" name="search" placeholder="Search Profile">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <div class="span12">
                        <?php
                        mysqli_fetch_object(getProfiles());

                            $profiles;

                            if(isset($_GET['search'])) {
                                $profiles = getProfileByQuery($_GET['search']);
                            } else {
                                $profiles = getProfiles();
                            }

                            if(mysqli_num_rows($profiles) == 0) {
                                echo "No Profile Found";
                            }

                            while ($profile = $profiles->fetch_object()) {
                                echo "<div class='box'>
                                        <div class='box-header'>
                                            <i class='icon-user icon-large'></i>
                                            <h5>($profile->profilenumber) $profile->profile_firstname $profile->profile_middlename $profile->profile_lastname</h5>
                                            
                                        </div>
                                        <div style='padding:5px;font-size:12px'>
                                            <b>Type</b>: ".($profile->type_id==1 ? "BEI" : "BOC")."<br>
                                            <b>Phone Number</b>: $profile->phonenumber<br>
                                            <b>Sex</b>: $profile->p_sex<br>
                                            <b>SSS</b>: $profile->sss<br>
                                            <b>GSIS</b>: $profile->gsis<br>
                                            <b>Precinct Number</b>: $profile->precinctnumber<br>
                                            <b>Location</b>: $profile->island_name, $profile->region_name, $profile->province_name, $profile->municipality_name, $profile->district_name, $profile->barangay, $profile->school_name
                                            <br>
                                            ";
                                            if($_SESSION['user']['position']==11 || $_SESSION['user']['position']==15){echo "<button type='button' class='btn' onClick='window.location.replace(\"/scc/?page=beibocpform&update=$profile->profile_id\");'>Update</button>";}
                                            echo "
                                        </div>
                                        <div class='box-content box-table'>


                                        <div class='box-header'>
                                           <a href='?page=caseform&profile=$profile->profile_id' class='icon-pencil icon-large'></a>
                                            <h5>Cases</h5>
                                        </div>
                                        <table class='table table-hover tablesorter'>
                                            <thead>
                                                <tr>
                                                    <th>Case Number</th>
                                                    <th>Case Name</th>
                                                    <th>Date Created</th>
                                                    <th>Created By</th>
                                                    <th>Category</th>
                                                    <th>Status</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>";

                                $cases = getCasesByProfile($profile->profile_id);
                                while ($case = $cases->fetch_object()) {

                                         echo "<tr onClick='window.document.location=\"?page=caseview&case=$case->case_id\"' style='cursor: pointer'>
                                                    <td>$case->casenumber</td>
                                                    <td>$case->case_name</td>
                                                    <td>$case->c_date_time</td>
                                                    <td>$case->firstname $case->lastname, $case->middlename</td>
                                                    <td>$case->category_name</td>
                                                    <td>$case->case_status_name</td>
                                                </tr>";
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