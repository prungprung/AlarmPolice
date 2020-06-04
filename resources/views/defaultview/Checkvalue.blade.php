<?php
$method = $_SERVER['REQUEST_METHOD'];
if($method == "POST"){
  $requestBody = file_get_contents('php://input');
  $json = json_decode($requestBody);
  $text = $json->queryResult->queryText;
}else{
  echo "metho not allowed";
}
?>
