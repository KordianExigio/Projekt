<?php

$conn = mysqli_connect("localhost", "root", "", "bron");
$sql = "SELECT * FROM `bron_krotka`";

if (!$conn) {
     die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `bron_krotka`";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

// Tworzenie tablicy na dane
$data = array();

// Pobranie danych z wyników zapytania
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Zamiana danych na format JSON
$json_data = json_encode($data, JSON_PRETTY_PRINT);

// Zapisanie danych JSON do pliku
file_put_contents('dane.json', $json_data);

// Zamknięcie połączenia z bazą danych
mysqli_close($conn);


?>