<link href="css/main.css" type="text/css" rel="stylesheet" media="screen" />

<?php
// index page
include 'models/viewModel.php';
include 'models/contactsModel.php';

$pagename = 'index';

$views = new viewModel();
$contacts = new contactsModel();

//Show header here
//maybe with buttons
$views->getView("views/header.inc");

//initial list
if(!empty($_GET["action"])){

	if ($_GET["action"] == "home") {
		
		$result = $contacts->getAll();
		$views->getView("views/body.php", $result);

	}if ($_GET["action"] == "details") {

		$result = $contacts->getOne($_GET["id"]);
		$views->getView("views/details.php", $result);

	}

}else{

	$result = $contacts->getAll();
	$views->getView("views/body.php",$result);

}

//footer
$views->getView("views/footer.inc");
?>