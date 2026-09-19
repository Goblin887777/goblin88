<?php
$token = "ISI_TOKEN_DARI_FONNTE_LO"; // Ambil dari tombol 'Token' di dashboard Fonnte

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.fonnte.com/fetch-groups',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POST => true,
  CURLOPT_HTTPHEADER => array("Authorization: $token"),
));

$response = curl_exec($curl);
curl_close($curl);

echo "<h3>Daftar ID Grup WA:</h3>";
echo "<pre>$response</pre>";
?>