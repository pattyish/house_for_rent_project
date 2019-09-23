<?php

function checkLogin(){
		//checks if there is current login
		if(!session_id())
			session_start();
		return login($_SESSION['email']??"", $_SESSION['pwd']??"");
	}


	function login($email, $password){
		global $conn;
		$email = $conn->real_escape_string($email);
		$password = $conn->real_escape_string($password);
		$sql = "SELECT * FROM users WHERE email = \"$email\" AND password = \"$password\" LIMIT 1 ";
		$query = $conn->query($sql) or trigger_error($conn->error);

		if($query->num_rows){
			//logged in successfully

			//check if is suspended or not approved
			$data = $query->fetch_assoc();
			if($data['approved']){
				if(!session_id())
					session_start();
				$_SESSION['email'] = $email;
				$_SESSION['pwd'] = $password;
				return $data['id'];
			}
			else
			{
				return -1;
			}
			
		}else{
			return false;
		}
	}
	function userData($userId){
		global $conn;
		$query = $conn->query("SELECT *, CONCAT(fname, ' ', lname) as name FROM users WHERE id = \"$userId\" ") or trigger_error($conn->error);
		if($query->num_rows){
			return $query->fetch_assoc();
		}else{
			return false;
		}
	}
	function getCategories(){
		global $conn;
		$sql = "SELECT * FROM categories GROUP BY name";
		
		$query = $conn->query($sql) or trigger_error($conn->error);
		if($query->num_rows){
			return mysqli_fetch_all($query, MYSQLI_ASSOC);
		}else{
			return false;
		}
	}

function getPayments($userId){
		global $conn;
		$query = $conn->query("SELECT *") or trigger_error($conn->error);
		if($query->num_rows){
			return $query->fetch_assoc();
		}else{
			return false;
		}
	}
	function getPost(){
		global $conn;
		$query = $conn->query("SELECT * FROM post") or trigger_error($conn->error);
		if($query->num_rows){
			$subs=array();
			$data = $query->fetch_assoc();
			$data['link'] = 'details?post_id='.$data['post_id'].md5($data['post_id']);
			$subs[] = $data;
			return $data;
		}else{
			return false;
		}
	}
		function getImages($postId){
		global $conn;
		$query = $conn->query("SELECT * FROM images WHERE postid=\"$postId\" AND main='yes' ") or trigger_error($conn->error);
		if($query->num_rows){
			$data= $query->fetch_assoc();
			return $data['name'];
		}else{
			return false;
		}
	}
	function getCategory($Categoryid){
		global $conn;
		$query = $conn->query("SELECT * FROM categories WHERE id = \"$Categoryid\"") or trigger_error($conn->error);
		if($query->num_rows){
			$data= $query->fetch_assoc();
			return $data['name'];
		}else{
			return false;
		}
	}
	function all_posts(){
		//returns all teacher
		global $conn;

		// $query = $conn->query("SELECT * FROM users, teacherdata WHERE type = 'teacher' AND teacherdata.userCode = users.id ") or trigger_error($conn->error);
		$query = $conn->query("SELECT * FROM post") or trigger_error($conn->error);
		return $query->fetch_all(MYSQLI_ASSOC);
	}
	?>



	