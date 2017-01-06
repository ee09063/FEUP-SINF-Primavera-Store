<?php
	function getProductInfo($info){
		global $conn;
		global $API_URL;
		
		$artigo_id = strval(strip_tags($info['product_id']));
		
		$url = $API_URL . 'artigos/' . $artigo_id;
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		return json_decode($output,true);
	}
	
	function getProductList($info){
		global $conn;
		global $API_URL;
		
		$category = strval(strip_tags($info['category_id']));
		$query = strval(strip_tags($info['query']));
		
		$url = $API_URL . 'artigos?title=' . $query . '&cat=' . $category;  
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		return json_decode($output,true);
	}

	function getAllProducts(){
		global $conn;
		global $API_URL;
		
		$url = $API_URL . 'artigos';
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		return json_decode($output,true);
	}
	
	function getProductImage($id){
		global $BASE_DIR;
		$product = strval(strip_tags($id));
		$filename = $BASE_DIR . 'images/products/' . $product;
		if(file_exists($filename . '.jpg')){
			return $product . '.jpg';
		} else if(file_exists($filename . '.png')){
			return $product . '.png';
		} else {
			return 'default.jpg';
		}
	}

	function ProductInCart($id){
		global $BASE_DIR;
		$product_id = strval(strip_tags($id));
		if(count($_SESSION['cart']) == 0){
			return false;
		} else {
			foreach($_SESSION['cart'] as &$item){
				if($item['Codigo'] == $product_id){
					return true;
				}
				$index++;
			}
			return false;
		}
	}
	
	function getWarehouseList($id){
		global $conn;
		global $API_URL;
		
		$product_id = strval(strip_tags($id));
		$url = $API_URL . 'armazens/' . $product_id;
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		return json_decode($output,true);
	}
	
	function APIGetOrderInfo($info){
		global $conn;
		global $API_URL;
		
		$order_id = strval(strip_tags($info['order_id']));
		$url = $API_URL . 'encomendas/' . $order_id;
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		$output = curl_exec($ch);
		
		curl_close($ch);
		
		return json_decode($output,true);
	}
?>









