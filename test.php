<?php


$token = "TEST-6660607320613134-011301-03d3d1b3159336d6218c7ec7f4acd9f5__LD_LA__-147823178";
$url = "https://api.mercadolibre.com/users/test_user?access_token=$token";
$vars = "{\"site_id\":\"MLU\"}";
echo(enviar($vars, $url));



function enviar($parametrospost,$urlpost)
{

                $curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $urlpost);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $parametrospost);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$respuesta = trim(curl_exec($curl));
		curl_close($curl);
		
                return $respuesta ;
} 

