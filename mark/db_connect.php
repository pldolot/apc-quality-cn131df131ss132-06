<?php

	function s($c) {
		$s = "";
		for($x = 0; $x<$c;$x++) {
			$s .= "&nbsp;";
		}

		return $s;
	}	

	function connect() {
		$server = 'localhost';
		$username = 'root';
		$password = '';
		$database = 'scc';

		$conn = new mysqli($server, $username, $password, $database);

		if($conn->connect_error) {
			die('Connect to Database ERROR : ') . $conn->connect_error;
		}

		return $conn;
	}

	function login($username, $password) {
	 	$conn = connect();

		$user_result = $conn->query("SELECT * FROM user WHERE username = '$username' AND password_hash = '".md5($password)."'");

		if(mysqli_num_rows($user_result) > 0) {
			$user = mysqli_fetch_object($user_result);

			$user_info_result = $conn->query("SELECT * FROM employee WHERE user_id = '$user->id'");
			$user_info = mysqli_fetch_object($user_info_result);

 			return array(
 				'username' => $user->username,
 				'firstname' => $user_info->firstname,
 				'lastname' => $user_info->lastname,
 				'middlename' => $user_info->middlename,
 				'position' => $user_info->position_id,
 				'sex' => $user_info->sex,
 				'status' => $user_info->employee_status,
 				'user_id' => $user_info->user_id,
 				'employee_id' => $user_info->employee_id,
 				'id_number' => $user_info->id_number
 				);
		}

		return null;
	}

	function getUserPositions() {
		$conn = connect();

	 	if($rows = $conn->query("SELECT * FROM position")) {
	 		return $rows;
		}

		return null;
	}

	function getUsers() {
		$conn = connect();

	 	if($rows = $conn->query("SELECT * FROM user INNER JOIN employee ON user.id = employee.user_id INNER JOIN position ON employee.position_id = position.position_id")) {
	 		return $rows;
		}

		return null;
	}

	function createUser($user) {
		$conn = connect();

	

		$sql = "INSERT INTO user (username, password_hash, email)
		VALUES ('$user[username]','".md5($user['password'])."','$user[email]')";

		$conn->query($sql);
		$id = mysqli_insert_id($conn);

		$id_number = date("Ymd")."-".$id;

		$sql = "INSERT INTO employee (id_number,firstname, lastname, middlename,position_id,sex,user_id,employee_status)
		VALUES ('$id_number','$user[fname]','$user[lname]','$user[mname]','$user[position]','$user[sex]','$id','ACTIVE')";

		$conn->query($sql);
		$id = mysqli_insert_id($conn);

		if($id > 0) {
			$conn->close();
			return true;
		} else {
			$conn->close();
			return false;
		}
	}

	function getProfileByID($id) {
		$conn = connect();

	 	if($rows = $conn->query("SELECT * FROM profile WHERE profile_id = '$id'")) {
	 		return $rows;
		}

		return null;	
	}

	function getProfileByQuery($query) {
		$conn = connect();

		 	if($rows = $conn->query("SELECT * FROM profile
		 		INNER JOIN precinct ON precinct.precinct_id = profile.precinct_id
		 		INNER JOIN school ON school.school_id = precinct.school_id
		 		INNER JOIN barangay ON barangay.barangay_id = school.barangay_id
		 		INNER JOIN district ON district.district_id = barangay.district_id
		 		INNER JOIN municipal_city ON municipal_city.municipality_id = district.municipality_id
		 		INNER JOIN province ON province.province_id = municipal_city.province_id
		 		INNER JOIN region ON region.region_id = province.region_id
		 		INNER JOIN island_group ON island_group.island_id = region.island_id
		 		WHERE
		 		profile.profile_firstname like '%$query%' OR
		 		profile.profile_middlename like '%$query%' OR
		 		profile.profile_lastname like '%$query%' OR
		 		profile.mothers_maiden_name like '%$query%' OR
		 		profile.phonenumber like '%$query%' OR
		 		profile.gsis like '%$query%' OR
		 		profile.sss like '%$query%' OR
		 		profile.profilenumber like '%$query%' OR
		 		precinct.precinctnumber like '%$query%'
		 		")) {
	 		return $rows;
		}

		return null;	
	}

	function getProfiles() {
		$conn = connect();

		 	if($rows = $conn->query("SELECT * FROM profile
		 		INNER JOIN precinct ON precinct.precinct_id = profile.precinct_id
		 		INNER JOIN school ON school.school_id = precinct.school_id
		 		INNER JOIN barangay ON barangay.barangay_id = school.barangay_id
		 		INNER JOIN district ON district.district_id = barangay.district_id
		 		INNER JOIN municipal_city ON municipal_city.municipality_id = district.municipality_id
		 		INNER JOIN province ON province.province_id = municipal_city.province_id
		 		INNER JOIN region ON region.region_id = province.region_id
		 		INNER JOIN island_group ON island_group.island_id = region.island_id
	 			INNER JOIN employee ON employee.employee_id = profile.employee_id
		 		")) {
	 		return $rows;
		}

		return null;	
	}

	function createProfile($profile) {
		$conn = connect();

		$profiles = $conn->query("SELECT * FROM profile ORDER BY profile_id DESC LIMIT 1");

		$id = 1;
		if(mysqli_num_rows($profiles) > 0) {
			$p = mysqli_fetch_object($profiles);
			$id = $p->profile_id;
			$id++;
		}

		$profilenumber = date("Y")."-".sprintf('%06d', $id);

        $sss = "";
        $gsis = "";
        if($profile['sssgsis'] == 1) {
        	$sss = $profile['sssgsis_number'];
        } else {
        	$gsis = $profile['sssgsis_number'];
        }

		$sql = "INSERT INTO profile (
			profilenumber,
			profile_firstname,
			profile_lastname,
			profile_middlename,
			mothers_maiden_name,
			phonenumber,
			p_sex,
			gsis,
			sss,
			precinct_id,
			type_id,
			employee_id
			)
		VALUES (
			'$profilenumber',
			'$profile[firstname]',
			'$profile[lastname]',
			'$profile[middlename]',
			'$profile[mmname]',
			'$profile[phonenumber]',
			'$profile[sex]',
			'$gsis',
			'$sss',
			$profile[precinct],
			$profile[type],
			$profile[employee_id]
			)";


		$conn->query($sql);
		$id = mysqli_insert_id($conn);

		if($id > 0) {
			$conn->close();
			return true;
		} else {
			$conn->close();
			return false;
		}
	}


	function updateProfile($profile) {
		$conn = connect();

        $sss = "";
        $gsis = "";
        if($profile['sssgsis'] == 1) {
        	$sss = $profile['sssgsis_number'];
        } else {
        	$gsis = $profile['sssgsis_number'];
        }

		$sql = "UPDATE profile SET
			profile_firstname = '$profile[firstname]',
			profile_lastname = '$profile[lastname]',
			profile_middlename = '$profile[middlename]',
			mothers_maiden_name = '$profile[mmname]',
			phonenumber = '$profile[phonenumber]',
			p_sex = '$profile[sex]',
			gsis = '$gsis',
			sss = '$sss',
			precinct_id = $profile[precinct],
			type_id = $profile[type]
			WHERE profile_id = '$profile[profile_id]'";

		$conn->query($sql);
	}


	function getCasesByID($case_id) {
		$conn = connect();

	 	if($rows = $conn->query("SELECT * FROM scc_case
	 		INNER JOIN category ON category.category_id = scc_case.category_id
	 		INNER JOIN subcategory ON subcategory.subcategory_id = scc_case.subcategory_id
	 		INNER JOIN case_status ON case_status.case_status_id = scc_case.case_status_id
	 		INNER JOIN issue ON issue.issue_id = scc_case.issue_id
	 		INNER JOIN profile ON profile.profile_id = scc_case.profile_id
	 		INNER JOIN employee ON employee.employee_id = scc_case.created_by
	 		WHERE scc_case.case_id = '$case_id'")) {
	 		return $rows;
		}

		return null;
	}

	function getCasesByProfile($profile_id) {
		$conn = connect();

	 	if($rows = $conn->query("SELECT * FROM scc_case
	 		INNER JOIN category ON category.category_id = scc_case.category_id
	 		INNER JOIN subcategory ON subcategory.subcategory_id = scc_case.subcategory_id
	 		INNER JOIN case_status ON case_status.case_status_id = scc_case.case_status_id
	 		INNER JOIN issue ON issue.issue_id = scc_case.issue_id
	 		INNER JOIN profile ON profile.profile_id = scc_case.profile_id
	 		INNER JOIN employee ON employee.employee_id = scc_case.created_by
	 		WHERE scc_case.profile_id = '$profile_id'
	 		")) {
	 		return $rows;
		}

		return null;
	}

	function createCase($case) {
		$conn = connect();

		$cases = $conn->query("SELECT * FROM scc_case ORDER BY case_id DESC LIMIT 1");

		$id = 1;
		if(mysqli_num_rows($cases) > 0) {
			$c = mysqli_fetch_object($cases);
			$id = $c->case_id;
			$id++;
		}


		$casenumber = date("Ymd")."-".sprintf('%04d', $id);

		$sql = "INSERT INTO scc_case (casenumber, case_name, profile_id, category_id, subcategory_id,issue_id, case_status_id, created_by)
		VALUES (
			'$casenumber',
			'$case[case_name]',
			$case[profile_id],
			$case[category],
			$case[subcategory],
			$case[issue],
			$case[case_status],
			$case[created_by]
			)";

		$conn->query($sql);
		$id = mysqli_insert_id($conn);

		if($id > 0) {
			$conn->close();
			return $id;
		} else {
			$conn->close();
			return -1;
		}
	}

	function updateCase($case) {
		$conn = connect();


		$sql = "UPDATE scc_case SET
		case_status_id = $case[case_status]
		WHERE case_id = '$case[case_id]'";

		$conn->query($sql);
	}

	function getTicketByID($ticket_id) {
		$conn = connect();

	 	if($rows = $conn->query("SELECT * FROM ticket
	 		INNER JOIN scc_case ON scc_case.case_id = ticket.case_id
	 		INNER JOIN ticket_status ON ticket_status.ticket_status_id = ticket.ticket_status_id
	 		INNER JOIN employee ON employee.employee_id = ticket.t_created_by
	 		WHERE ticket.ticket_id = '$ticket_id'")) {
	 		return $rows;
		}

		return null;
	}

	function getTicketsByCase($case_id) {
		$conn = connect();

	 	if($rows = $conn->query("SELECT * FROM ticket
	 		INNER JOIN scc_case ON scc_case.case_id = ticket.case_id
	 		INNER JOIN ticket_status ON ticket_status.ticket_status_id = ticket.ticket_status_id
	 		INNER JOIN employee ON employee.employee_id = ticket.t_created_by
	 		WHERE ticket.case_id = '$case_id'")) {
	 		return $rows;
		}

		return null;
	}


	function createTicket($ticket) {
		$conn = connect();

		$case = mysqli_fetch_object(getCasesByID($ticket['case_id']));

		$tickets = $conn->query("SELECT * FROM ticket ORDER BY ticket_id DESC LIMIT 1");

		$id = 1;
		if(mysqli_num_rows($tickets) > 0) {
			$t = mysqli_fetch_object($tickets);
			$id = $t->ticket_id;
			$id++;
		}

		$ticketnumber = $case->casenumber."-".sprintf('%06d', $id);

		$sql = "INSERT INTO ticket (ticketnumber, case_id, ticket_name, ticket_notes, ticket_status_id, t_created_by)
		VALUES (
			'$ticketnumber',
			$ticket[case_id],
			'$ticket[ticket_name]',
			'$ticket[ticket_notes]',
			$ticket[ticket_status],
			$ticket[created_by]
			)";

		$conn->query($sql);
		$id = mysqli_insert_id($conn);

		if($id > 0) {
			$conn->close();
			return $id;
		} else {
			$conn->close();
			return -1;
		}
	}

	function updateTicket($ticket) {
		$conn = connect();

		$sql = "UPDATE ticket SET
		ticket_notes = '$ticket[ticket_notes]',
		ticket_status_id = $ticket[ticket_status]
		WHERE ticket_id = '$ticket[ticket_id]'";

		$conn->query($sql);
	}

	function getTicketStatuses() {
		$conn = connect();

	 	if($rows = $conn->query("SELECT * FROM ticket_status")) {
	 		return $rows;
		}

		return null;
	}

	function getCaseStatuses() {
		$conn = connect();

	 	if($rows = $conn->query("SELECT * FROM case_status")) {
	 		return $rows;
		}

		return null;
	}
	function getIssues() {
		$conn = connect();

	 	if($rows = $conn->query("SELECT * FROM issue")) {
	 		return $rows;
		}

		return null;
	}
	function getCategories() {
		$conn = connect();

	 	if($rows = $conn->query("SELECT * FROM category")) {
	 		return $rows;
		}

		return null;
	}
	function getSubCategories() {
		$conn = connect();

	 	if($rows = $conn->query("SELECT * FROM subcategory")) {
	 		return $rows;
		}

		return null;
	}

	function getPrecincts($profile) {
		$conn = connect();

		echo "<br>";
		$island_groups = $conn->query("SELECT * FROM island_group");

		while($island_group = mysqli_fetch_object($island_groups)) {
			echo $island_group->island_name."<br>";
			$regions = $conn->query("SELECT * FROM region WHERE island_id = $island_group->island_id");

			while($region = mysqli_fetch_object($regions)) {
				echo s(5).$region->region_name."<br>";
				$provinces = $conn->query("SELECT * FROM province WHERE region_id = $region->region_id");

				while($province = mysqli_fetch_object($provinces)) {
					echo s(10).$province->province_name."<br>";
					$municipal_cities = $conn->query("SELECT * FROM municipal_city WHERE province_id = $province->province_id");

					while($municipal_city = mysqli_fetch_object($municipal_cities)) {
						echo s(15).$municipal_city->municipality_name."<br>";
						$districts = $conn->query("SELECT * FROM district WHERE municipality_id = $municipal_city->municipality_id");

						while($district = mysqli_fetch_object($districts)) {
							echo s(20).$district->district_name."<br>";
							$barangays = $conn->query("SELECT * FROM barangay WHERE district_id = $district->district_id");

							while($barangay = mysqli_fetch_object($barangays)) {
								echo s(25).$barangay->barangay."<br>";
								$schools = $conn->query("SELECT * FROM school WHERE barangay_id = $barangay->barangay_id");

								while($school = mysqli_fetch_object($schools)) {
									echo s(30).$school->school_name."<br>";
									$precincts = $conn->query("SELECT * FROM precinct WHERE school_id = $school->school_id");

									while($precinct = mysqli_fetch_object($precincts)) {

										echo s(35).' <input type="radio" name="precinct" value="'.$precinct->precinct_id.'" '.($profile?$profile->precinct_id==$precinct->precinct_id ? "checked" : "":"").'> '.$precinct->precinctnumber."<br>";
									}
								}
							}
						}
					}
				}
			}
        }
	}
?>