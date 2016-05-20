<?php
function getPageTitle($page) {
	return "SCC:".getPageHeader($page);
}

function getPageHeader($page) {
	switch ($page) {
		case 'dashboard':
			return "Dashboard";
			break;

		case 'beibocp':
			return "BEI/BOC PROFILE";
			break;

		case 'beibocpform':
			return "BEI/BOC PROFILE FORM";
			break;

		case 'case':
			return "Cases";
			break;

		case 'caseview':
			return "Case View";
			break;

		case 'caseform':
			return "Case Form";
			break;

		case 'ticket':
			return "Ticket";
			break;

		case 'ticketview':
			return "Ticket View";
			break;

		case 'ticketform':
			return "Ticket Form";
			break;

		case 'users':
			return "Users";
			break;
		
		case 'userform':
			return "User Form";
			break;
		
		default:
			return "Dashboard";
			break;
	}
}



function getPageInclude($page) {
	switch ($page) {
		case 'dashboard':
			break;

		case 'beibocp':
			include('pages/bei-boc-view.php');
			break;

		case 'beibocpform':
			include('pages/bei-boc-form.php');
			break;

		case 'case':
			include('pages/case.php');
			break;

		case 'caseview':
			include('pages/caseview.php');
			break;

		case 'caseform':
			include('pages/case-form.php');
			break;

		case 'ticket':
			include('pages/ticket.php');
			break;

		case 'ticketview':
			include('pages/ticketview.php');
			break;

		case 'ticketform':
			include('pages/ticket-form.php');
			break;

		case 'users':
			include('pages/users.php');
			break;
		
		case 'userform':
			include('pages/user-form.php');
			break;
		
		default:
			return "Dashboard";
			break;
	}
}

function getPageIconNav($page) {
	switch ($page) {
		case 'dashboard':
			break;

		case 'beibocp':
			echo '<a href="?page=beibocpform" rel="tooltip" data-placement="left" title="Create New Profile">
	                    <i class="icon-group icon-large"></i>
	                </a>';
			break;

		case 'beibocpform':
			break;

		case 'case':
			break;

		case 'caseview':
			break;

		case 'caseform':
			break;

		case 'ticketview':
			break;

		case 'users':
			echo '<a href="?page=userform" rel="tooltip" data-placement="left" title="Create New User">
	                    <i class="icon-group icon-large"></i>
	                </a>';
			break;
		
		case 'userform':
			break;
		
		default:
			break;
	}
}
?>