<?php
header('Content-Type: application/json'); 
$añoInicio = 1995;
$añoFin = 2020;
$pais = 'PER'; 
$urlBase = "https://api.worldbank.org/v2/country/$pais/indicator/SI.POV.DDAY?format=json";

$datos = [];

for ($año = $añoInicio; $año <= $añoFin; $año++) {
    $url = "$urlBase&date=$año:$año"; 
    $respuesta = file_get_contents($url); 
    $respuestaDecodificada = json_decode($respuesta, true); 

    // Validar si los datos son válidos y extraer la información relevante
    if (isset($respuestaDecodificada[1]) && count($respuestaDecodificada[1]) > 0) {
        $tasa = $respuestaDecodificada[1][0]['value']; 
        $datos[] = [
            'año' => $año,
            'tasa' => $tasa
        ];
    }
}
echo json_encode($datos);
?>
