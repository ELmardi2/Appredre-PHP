<?php
$serveurnom = "localhost";
$utilisateur = "root";
$mdpass = "root";

// Créer connection
$conn = new mysqli($serveurnom, $utilisateur, $mdpass);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

require 'connect.php';
$query = "SELECT * FROM Utilisateurs WHERE id = '$prénom id';";
//Replace $query with your own MySQL query.

$execquery = mysqli_query($conn,$query);
?>
