<?php
	ob_start();
	include_once 'conn.php';
	session_start();

	//checking the page
	$reqURI = trim($_SERVER['REQUEST_URI']??"", "/")??'home';

	//if reqURI is empty
	if(!$reqURI){
		$reqURI = 'home';
	}

	//REMOVING GET_VARIABLES
	if($pos  = strripos($reqURI, "?")){
		//here get are sent
		$reqURI = substr_replace($reqURI, '', $pos);
	}

	//special routes without templatinh
	$special_routes = array('signin', '', 'signup', 'logout','thankyou','verification');

	$req_parts = explode("/", $reqURI);

	//remove all the parts before admin/
	$s = array_search("House Major", $req_parts);

	$req_parts = array_values($req_parts);

	if(empty($req_parts)){
		$req_parts = array('home');
	}

	//storing requested routes
	$routes = $req_parts==array()?array("home"):array_values($req_parts);
	$page_file = "pages/".$routes[0].".php";

	include_once 'functions.php';

	//Check login
	$loggedUser = checkLogin();

	if($loggedUser){
		//get data
		$currentUser = userData($loggedUser);
		$currentUserId = $currentUser['id'];
		$currentUserType = $currentUser['type'];
	}

	include 'class/page.php';

	//TODO: construct best title generatio
	if(!file_exists($page_file) ){
		include_once $page_file = "pages/not_found.php";
		die();
		exit();
	}else if(is_int(array_search($req_parts[0], $special_routes))){		
		// echo "$page_file";
		include_once $page_file;
		die();
	}
	else{
		include 'pages/mainPageTemplate.php';
	}

	// //checking the login
	// $username = $_SESSION['username']??"";
	// $password = $_SESSION['password']??"";

	// $userId = login($username, $password);
	// if($userId){
	// }else{
	// 	header("location: login.php");
	// 	die();
	// }
?>