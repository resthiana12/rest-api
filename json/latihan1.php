<?php

// $mahasiswa=[
//     [
//         "nama" => "Resthiana",
//         "nrp" => "173040057",
//         "email" => "resthiana123@gmail.com"
//     ],
//     [
//         "nama" => "Tawfeeq Aatef",
//         "nrp" => "143020057",
//         "email" => "tawfeeqA123@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost; dbname=phpdasar', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>