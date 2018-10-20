<?php
$success = false;

if($_SERVER['REQUEST_METHOD']=='POST'){
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$login = $_POST['login'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$age = $_POST['age'];
	$role_id = $_POST['role'];

	$query = $connection->query("SELECT * FROM users WHERE login = \"$login\" ");
	if($row = $query->fetch_object()){
		$exist_login = true;
	}else{
		$exist_login= false;
	}

	if($exist_login==false){	//check for the individuality of login 
		if($name!="" && $surname!="" && $age!=0 && $role_id!=0 && $login!="" && $password!="" && $password2!="" && strlen($password)>7){ //check for empty
			if($password==$password2){  //check for the 2 passwords same
				$passwordSha1 = sha1($password);
				$connection->query("INSERT INTO users(id,name,surname,age,role_id,login,password,active) VALUES(NULL,\"$name\",\"$surname\",\"$age\",\"$role_id\",\"$login\",\"$passwordSha1\",1) ");
				$success = true;
			}
		}	
	}

	if($success)
		header("Location:?page=login");
	else	
		header("Location:?page=registration");
}

?>