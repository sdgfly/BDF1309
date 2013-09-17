<?php

//required classes
require_once "models/DB.php";
require_once "models/AuthModel.php";
require_once "models/AuthView.php";

$model = new AuthModel(MY_DSN,MY_USER,MY_PASS);

$view = new AuthView();


if(!empty($_SESSION['userInfo'])){

	$contentPage = 'success';
	$user = $_SESSION['userInfo'];
	
}

$username = mysql_real_escape_string(empty($_POST['username']) ? '' : strtolower(trim($_POST['username'])));
$password = mysql_real_escape_string(empty($_POST['password']) ? '' : trim($_POST['password']));

$contentPage = 'form';
$user = NULL;

if(!empty($username) && !empty($password)){
	
	$user = $model->getUserByNamePass($username, $password);
	if(is_array($user)){
	
		$contentPage = 'success';
		
		session_start();
		$_SESSION['userInfo'] = $user;
		
	}

}


$view->show('header');

$view->show($contentPage, $user);

$view->show('footer');

?>