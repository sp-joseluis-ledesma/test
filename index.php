<?php
// Crear un nuevo recurso cURL
$ch = curl_init();

// Establecer URL y otras opciones apropiadas
curl_setopt($ch, CURLOPT_URL, "https://admin:qiJxHVNAmUlWGodxo99IYa38ICIvYG9a@kubernetes.default.svc.cluster.local/api/v1/namespaces/");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

// Capturar la URL y pasarla al navegador
$data = curl_exec($ch);
$json = json_decode ( $data);
foreach($json['item'] as $item) {
  echo $item['metadata']['name']. "<br/>";
}

// Cerrar el recurso cURL y liberar recursos del sistema
curl_close($ch);
