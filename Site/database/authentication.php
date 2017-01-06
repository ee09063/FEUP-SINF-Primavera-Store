<?php
	function createUser($info){
		global $conn;
		
		$codCliente = strip_tags($info['codCliente']);
		$username = strip_tags($info['username']); 
		$password = strip_tags($info['password']); 
		$email = strip_tags($info['email']); 
		$name = strip_tags($info['name']); 
		$address = strip_tags($info['address']); 
		$nif = strip_tags($info['nif']); 
		
		$stmt = $conn->prepare("INSERT into User(codCliente, username, password) VALUES(:codCliente, :username, :password);");
		$stmt->bindParam(':codCliente', $codCliente, PDO::PARAM_STR);
		$stmt->bindParam(':username', $username, PDO::PARAM_STR);
		$stmt->bindParam(':password', hash("sha256", $password), PDO::PARAM_STR);
		
		$stmt->execute();
		
		return APICreateUser($info);
	}
	
	function APICreateUser($info){
		global $API_URL;
		
		$data['CodCliente'] = strip_tags($info['codCliente']);	
		$data['NomeCliente'] = strip_tags($info['name']);
		$data['Morada'] = strip_tags($info['address']); 
		$data['NumContribuinte'] = strip_tags($info['nif']);
		$data['Contacto'] = strip_tags($info['email']); 

		$content = json_encode($data);
		$url = $API_URL . 'clientes';
		
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
		$json_response = curl_exec($ch);
		
		$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		curl_close($curl);

		$response = json_decode($json_response, true);
		
		return $status;
	}
	
	function isLoginCorrect($info) {
		global $conn;
		
		$username = strip_tags($info['username']);
		$password = strip_tags($info['password']);
		
		$stmt = $conn->prepare("SELECT codCliente
								FROM User 
								WHERE username = :username AND password = :password;");
		$stmt->bindParam(':username', $username, PDO::PARAM_STR);
		$stmt->bindParam(':password', hash("sha256", $password), PDO::PARAM_STR);
		$stmt->execute();
		
		$res = $stmt->fetch();
		$user_id = $res['codCliente'];

		$result = array('user_id' => $user_id ,'username' => $username,'password' => $password);
		
		return $result;
	}
?>
