<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$title = $_POST['title'];
		$note = $_POST['note'];
		$user_id = $_SESSION['user_id'];

		if($title!="" && $note!=""){

			

			$encrypted_title = public_encrypt($title);
			$encrypted_txt = public_encrypt($note);
			$connection->query("INSERT INTO diary(id,user_id,title,note,created_date) VALUES(NULL,\"$user_id\",\"$encrypted_title\",\"$encrypted_txt\",NOW())");
		}

		
		header('Location:?');
}



function public_encrypt($plaintext){
		$fp=fopen("keys/mykey.pub","r");
		$pub_key=fread($fp,8192);
		fclose($fp);
		openssl_get_publickey($pub_key);
		openssl_public_encrypt($plaintext,$crypttext, $pub_key );
		return(base64_encode($crypttext)); 
}
?>