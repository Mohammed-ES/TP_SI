<?php
$servername = "localhost";
$username = "root"; // Par défaut pour XAMPP ou WAMP
$password = ""; // Laisser vide si vous utilisez XAMPP ou WAMP
$dbname = "TPSI";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Récupérer les données du formulaire
$vehicle_id = $_POST['vehicle_id'];
$type = $_POST['type'];
$max_passengers = $_POST['max_passengers'];
$state = $_POST['state'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$year = $_POST['year'];

// Requête SQL
$sql = "INSERT INTO vehicles (vehicle_id, type, max_passengers, state, brand, model, year)
        VALUES ('$vehicle_id', '$type', $max_passengers, '$state', '$brand', '$model', $year)";

if ($conn->query($sql) === TRUE) {
    echo "Véhicule ajouté avec succès.";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
