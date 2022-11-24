<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
include_once 'banco/dados.php';
include_once 'index/Product.php';
  
$database = new Database();
$db = $database->getConnection();
  
$product = new Product($db);
  
// pega id do produto
$data = json_decode(file_get_contents("php://input"));
  
// seleciona id para excluir
$product->id = $data->id;
  
// deleta o produto
if($product->delete()){
  
    // codigo 200 sucesso
    http_response_code(200);
    echo json_encode(array("message" => "Product was deleted."));
}
  
else{
  
    // set response code - 503 service unavailable
    http_response_code(503);
    echo json_encode(array("message" => "Unable to delete product."));
}
?>
