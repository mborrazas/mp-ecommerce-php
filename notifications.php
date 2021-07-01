<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');

$data = json_decode(file_get_contents('php://input'), true);

error_log(json_encode($data));
$payment = [];  

$value = $_GET["topic"] ?? $_GET['type'];
switch($value) {
    case "payment":
        $payment = MercadoPago\Payment::find_by_id($_GET["id"]); 
        break; 
}

error_log(json_encode($payment));
