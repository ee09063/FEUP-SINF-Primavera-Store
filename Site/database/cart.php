<?php
	function APIcreateOrder($info){
		global $conn;
		global $API_URL;
		
		$data['Entidade'] = $_SESSION['user_id'];
		$data['Serie'] = '2015';
		
		$i = 0;
		foreach($info as $item){
			$data['LinhasDoc'][$i] = array('CodArtigo' => $item['Codigo'], 'Quantidade' => $item['Quantidade'], 'PrecoUnitario' => $item['Preco']);
			$i++;
		}
		
		$content = json_encode($data);
		$url = $API_URL . 'encomendas';
		
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
	
	function APIGetClientOrders($info){
		global $API_URL;
		
		$user_id = $_SESSION['user_id'];
		$filter = $_GET['filter'];
		
		$url = $API_URL . 'encomendas/' . $user_id . '?filter=' . $filter;
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		return json_decode($output,true);
	}
?>