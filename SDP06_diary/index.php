<?php
		include 'temp/db.php';
		include 'temp/online.php';
		$page = 'guest';

		if($online==true){
			
			if(isset($_SESSION['user_id']) && isset($_SESSION['user_password'])){

				$page = 'user';

				if(isset($_GET['action'])){
					if($_GET['action']=="logout"){

				        $_SESSION['user_id']=""; 
				        $_SESSION['user_password']=""; 
				        session_destroy(); 
				        setcookie("login","",1,"/"); 
				        setcookie("password","",1,"/"); 
				        $page = 'guest';
				        header("Location:?");

				    //END action LOGOUT
					}

					if($_GET['action']=="contact_us"){
						include 'temp/contact_us_form.php';
				    //END action addNOTE
					}
				//END isset ACTION
				}
			}

			if(isset($_GET['page'])){
				switch($_GET['page']){
					case 'contact_us':		$page = 'contact_us';	break;
					case 'marks':			$page = 'marks';		break;
					case 'user': 			$page = 'user';			break;
					default: 				$page = '404_user';		break;
				}
			}

		}else{
			if(isset($_COOKIE['login']) && isset($_COOKIE['password'])){
                $cook_login = $_COOKIE['login'];
                $cook_password = $_COOKIE['password'];
                $query = $connection->query("SELECT * FROM users WHERE login=\"$cook_login\" and password=\"$cook_password\"");
                                        
                    if($row=$query->fetch_object()){
                        $user_password = $row->password;
                        $user_id = $row->id;
                    }

                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_password'] = $user_password;
                
                header("Location:?");
                            
            //ELSE of check for COOKIE                         
            }else{

				if(isset($_GET['action'])){

					if($_GET['action']=='registration'){
						include('temp/registration.php');
					//END action REGISTRATION 
					}else if($_GET['action']=='login'){
						if($_SERVER['REQUEST_METHOD']=='POST'){
							$login = $_POST['login'];
							$password = $_POST['password'];

							if($login!="" && $password!=""){
								$passwordSha1 = sha1($password);
								$query = $connection->query("SELECT * FROM users WHERE login = \"$login\" ");

								if($row = $query->fetch_object()){
									if($login==$row->login && $passwordSha1==$row->password){
										$userId = $row->id;
										$userLogin = $row->login;
										$userPassword = $row->password;

										if(isset($_POST['rememberMe'])){
	                                        setcookie("login", $userLogin  , time() + 360  , "/");
	                                        setcookie("password", $userPassword  , time() + 360, "/");
	                                    }

	                                    $_SESSION['user_id'] = $userId;
	                                    $_SESSION['user_password'] = $userPassword;
	                                    //include 'keys/generate_keys.php';//GENERATE KEYS

	                                    header("Location:?");
									}else{
										header("Location:?page=login");
									}
								}else{
									header("Location:?page=login");
								}
							}else{
								header("Location:?page=login");
							}
						}else{
							header("Location:?page=login");
						}
					//END action LOGIN 
					}
				//END isset ACTION
				}
			//END check for COOKIE
			}

			if(isset($_GET['page'])){
				switch($_GET['page']){
					case 'login': 			$page = 'login';		break;
					case 'registration': 	$page = 'registration';	break;
					case 'guest': 			$page = 'guest';		break;
					default: 				$page = '404';			break;
				}
			}
		//END check for ONLINE
		}

		
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

	<?php
		include 'temp/header.php';
		include 'pages/'.$page.'.php';
		include 'temp/footer.php'
	?>	

</body>
</html>