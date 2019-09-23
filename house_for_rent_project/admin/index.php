<?php
	ob_start();
	include_once '../conn.php';
	include_once '../functions.php';

	//check login
	$currentUserId = $userId = checkLogin();
	if($userId){
		//get user data
		$userData = userData($userId);
		$currentUserType = $userType = $userData['type'];
		$currentUserName = $userData['fname'];

		if($userType != 'admin' && $userType != 'advert'){
			header("location:../login_for_adverter");
		}
	}else{
		header("location:../login_for_adverter");
	}

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
	$special_routes = array('', '', '', '');

	$req_parts = explode("/", $reqURI);

	//remove all the parts before admin/
	$s = array_search("admin", $req_parts);
	unset($req_parts[$s]);

	$req_parts = array_values($req_parts);

	if(empty($req_parts)){
		$req_parts = array('home');
	}

	//storing requested routes
	$routes = $req_parts == array()?array("home"):array_values($req_parts);
	$page_file = "pages/".$routes[0].".php";

	//check if the page eists
	if(file_exists($page_file)){
		$title = ucwords($routes[0]);
	}else{
		$title = "Page not found";
		$page_file = '../pages/not_found.php';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"><meta name="keywords" content="Renting, Sale, Auction, Kugurisha, kugura, gukodesha, inzu">
    <title>Sales & Rental | House Mojor</title>
    <link rel="stylesheet" href="../css_style/styles.css" type='text/css'>
    <link rel="stylesheet" href="../bootstrap/bootstrap-3.3.7/dist/css/bootstrap.min.css" type='text/css'>
    <link rel="stylesheet" type="text/css" href="../bootstrap/font-awesome-4.7.0/css/font-awesome.min.css"/>
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
<?php
include_once 'modules/menu.php';
?>
<?php include $page_file?>
<?php
include_once'modules/footer.php'; 
?>
<script src="../css_style/js/main.js"></script> 
<script src="../jquery/jquery-3.3.1.js"></script>   
<script src="../bootstrap/bootstrap-3.3.7/dist/js/bootstrap.js"></script>
<script src="../jquery/jquery-ui-1.12.1/"></script>
</body>
</html>

