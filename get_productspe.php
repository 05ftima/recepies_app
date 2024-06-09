<?php
include('./connecion.php');

if (isset($_GET['nam'])) {
    $nam = $_GET['nam'];

    // Utilisez une requête préparée pour éviter les injections SQL
    $stmt = $conn->prepare("SELECT product.* FROM product INNER JOIN meal ON product.meal = meal.id WHERE meal.name = ?");
    $stmt->bind_param("s", $nam); // Utilisez "s" pour une chaîne de caractères
    $stmt->execute();

    $featurd_products = $stmt->get_result();
}

?>