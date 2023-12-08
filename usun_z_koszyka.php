<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $produktId = $_GET['id'];

    function usunZKoszyka($produktId) {
        unset($_SESSION['cart'][$produktId]);
    }

    usunZKoszyka($produktId);


    header("Location: koszyk.php");
    exit();
}
?>