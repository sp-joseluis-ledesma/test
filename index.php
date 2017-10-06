<?php
// Crear un nuevo recurso cURL
$ch = curl_init();

// Establecer URL y otras opciones apropiadas
curl_setopt($ch, CURLOPT_URL, "https://admin:qiJxHVNAmUlWGodxo99IYa38ICIvYG9a@kubernetes.default.svc.cluster.local/api/v1/namespaces/");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Capturar la URL y pasarla al navegador
$data = curl_exec($ch);
curl_close($ch);
$json = json_decode($data, true);

foreach($json['items'] as $item) {
  if (preg_match("sp-(.*)", $item['metadata']['name'], $matches) == 1) {
    echo $matches[1]. "<br/>";
  }
}

// Cerrar el recurso cURL y liberar recursos del sistema
