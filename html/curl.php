<?php
$url = "https://servidor-externo.com/validar-usuario";
$data = ['correo' => $correo, 'password' => $password];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
curl_close($ch);

if ($response === "validado") {
    // Usuario válido
} else {
    echo "Usuario no válido";
}
?>