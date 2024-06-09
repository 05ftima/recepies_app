
<?php

include('./connecion.php');
if (isset($_GET['name'])) {
    $name = $_GET['name'];

$stmt  = $conn->prepare("SELECT * FROM product WHERE plant=?");
$stmt->bind_param("i", $name);
$stmt->execute();

$featurd_products = $stmt->get_result();

}
?>