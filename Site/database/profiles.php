<?php
	function getPersonInfo($info){
		global $conn;
		
		$user_id = intval(strip_tags($info['user_id']));
		
		$stmt = $conn->prepare("SELECT * FROM person WHERE id = :user_id");
		$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
		$stmt->execute();
		
		return $stmt->fetch();
	}
	
	function getAPIClientInfo($info){
		global $API_URL;
		
		$user_id = strval(strip_tags($info['user_id']));
		
		$url = $API_URL . 'clientes/' . $user_id;
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		return json_decode($output,true);
	}
	
	function getRegisteredInfo($info){
		global $conn;
		
		$user_id = strval(strip_tags($info['user_id']));
		
		$stmt = $conn->prepare("SELECT *
								FROM User
								WHERE codCliente = :user_id;");
		$stmt->bindParam(':user_id', $user_id, PDO::PARAM_STR);
		$stmt->execute();
		$result = $stmt->fetch();
		
		return json_decode($result,true);
	}
	
	function APIUpdateClient($info){
		global $API_URL;
		
		$data['CodCliente'] = strip_tags($info['codCliente']);	
		$data['NomeCliente'] = strip_tags($info['name']);
		$data['Morada'] = strip_tags($info['address']); 
		$data['Contacto'] = strip_tags($info['contact']); 

		$content = json_encode($data);
		$url = $API_URL . 'clientes/' . $data['CodCliente'];
		
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
?>