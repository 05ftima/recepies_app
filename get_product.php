<?php

include('./connecion.php');

$stmt  = $conn->prepare("SELECT * FROM product ");
$stmt->execute();

$featurd_products = $stmt->get_result();


?>