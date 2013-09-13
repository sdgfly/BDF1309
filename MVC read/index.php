<link href="css/main.css" type="text/css" rel="stylesheet" media="screen" />

<?php
// index page
include 'models/viewModel.php';
include 'models/opinionModel.php';

$pagename = 'index';

$views = new viewModel();
$opinion = new opinionModel();

//Show header here
//maybe with buttons
$views->getView("views/header.inc");

//initial list
if(!empty($_GET["action"])){

	if ($_GET["action"] == "home") {
		
		$result = $opinion->getAll();
		$views->getView("views/body.php", $result);

	}if ($_GET["action"] == "details") {

		$result = $opinion->getOne($_GET["id"]);
		$views->getView("views/details.php", $result);

	}

}else{

	$result = $opinion->getAll();
	$views->getView("views/body.php",$result);

}

//footer
$views->getView("views/footer.inc");
?>