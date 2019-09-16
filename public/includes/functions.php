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

	?>


	