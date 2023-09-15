<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $password = $_POST["password"];

    // Cuvanje u JSON fajl
    $data = [
        "name" => $name,
        "password" => $password,
    ];
    $jsonFile = "podaci.json";
    $jsonData = file_get_contents($jsonFile);
    $existingData = json_decode($jsonData, true) ?: [];
    $existingData[] = $data;
    file_put_contents($jsonFile, json_encode($existingData));

    // Unos u MySQL bazu
    $db = new mysqli("localhost", "marija", "P@ssw0rd", "forma");
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $sql = "INSERT INTO podaci_sa_forme (name, password) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("sss", $name, $password);

    if ($stmt->execute()) {
        echo "Data stored successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $db->close();
}
?>
