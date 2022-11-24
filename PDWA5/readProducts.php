<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
include_once 'banco/dados.php';
include_once 'index/Product.php';
  
$database = new Database();
$db = $database->getConnection();
  
$product = new Product($db);
  
$stmt = $product->read();
$num = $stmt->rowCount();
  
// verifica se ha dados
if($num>0){
  
    $products_arr=array();
    $products_arr["records"]=array();
  
    // recupera dados da tabela
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    
        // extrai row
        extract($row);
  
        $product_item=array(
            "id" => $id,
            "name" => $name,
            "description" => html_entity_decode($description),
            "price" => $price,
            "category_id" => $category_id,
            "category_name" => $category_name
        );
  
        array_push($products_arr["records"], $product_item);
    }
  
    // codigo 200 sucesso
    http_response_code(200);
    echo json_encode($products_arr);
}
  

