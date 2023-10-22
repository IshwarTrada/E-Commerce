<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $item_id = $_GET['id'];
    $delete_query = "DELETE FROM cart_items WHERE product_id = $item_id";

    if ($con->query($delete_query) === TRUE) {
        // Item deleted successfully
        header('Location: cart.php');
        exit();
    } else {
        // Error deleting item
        echo 'Error: ' . $con->error;
    }
} else {
    // Invalid request, no id provided
    echo 'Invalid request';
}
?>
