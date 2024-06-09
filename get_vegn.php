<?php

include('./connecion.php');
if (isset($_GET['vegan'])) {
    $id = $_GET['vegan'];

    $stmt  = $conn->prepare("SELECT * FROM product WHERE diet=?");
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $featurd_products = $stmt->get_result();
    } else {
        // Handle error if prepare fails
        echo "Prepare statement failed: " . $conn->error;
    }
} else {
    // Handle case if $_GET['vegan'] is not set
    
}
?>

<?php

include('./connecion.php');

if (isset($_GET['meth'])) {
    $id = $_GET['meth'];

    $stmt  = $conn->prepare("SELECT * FROM product WHERE method=?");
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $featurd_products = $stmt->get_result();
    } else {
        // Handle error if prepare fails
        echo "Prepare statement failed: " . $conn->error;
    }
} else {
    // Handle case if $_GET['vegan'] is not set
    echo "No diet type specified.";
}

?>




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



