<?php
	include_once('config.php');
	include_once('Encryption.php');
	header('charset: utf-8');
	try{
		$username = $_GET['username'];
		$pass = $_GET['password'];
		//$username ='admin';
		//$pass = 'Pa$$w0rd';

		/*$data = 'Pa$$w0rd';
	    $key = 'tho2016';
	    $e = new Encryption(MCRYPT_BLOWFISH, MCRYPT_MODE_CBC);
		$encryptedData = $e->encrypt($data, $key);
		$encryptedData = utf8_encode($encryptedData);*/

		$link = new PDO(   $db_url, 
	                        $user, 
	                        $password,  
	                        array(
	                            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	                        ));
		
		$handle = $link->prepare('SELECT usuario username, password pass FROM '.$table_user.' WHERE usuario = :user');
		//$handle = $link->prepare('INSERT INTO '.$table_user.'(usuario, password) VALUES (:user, :pass)');


	 	$handle->bindParam(':user', $username);
	 	//$handle->bindParam(':pass', $encryptedData);
		
	    $handle->execute();

	    

		$key = 'tho2016';

	    if($result = $handle->fetch(PDO::FETCH_OBJ)){
	    	$e2 = new Encryption(MCRYPT_BLOWFISH, MCRYPT_MODE_CBC);
			$data = $e2->decrypt(utf8_decode($result->pass), $key);
			if($data == $pass){
				echo json_encode(true);
			}else{
				echo json_encode(false);
			}
	    	//echo utf8_encode($result->pass);
	    	//echo  mb_detect_encoding($result->pass);
	    	//echo utf8_decode($result->pass);
	    	//echo $data;
	    }
	    else echo json_encode(false);
		
	}
	catch(PDOException $ex){
		error_log($ex->getMessage());
	    print($ex->getMessage());
	}

?>