<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category = strtoupper(substr($_POST['category'], 0, 3));
    $product_name = strtoupper(substr($_POST['product_name'], 0, 3));
    $random_number = rand(0, 100);
    $sku_code = $category . $product_name . $random_number;
    $product_description = $_POST['product_description'];
    $regular_price = $_POST['regular_price'];
    $sale_price = $_POST['sale_price'];
    $product_weight = $_POST['product_weight'];
    $product_quantity = $_POST['product_quantity'];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO products (category, product_sku, productName, productDescription, regularPrice, salePrice, productWeight, productQuantity) VALUES (:category, :sku_code, :product_name, :product_description, :regular_price, :sale_price, :product_weight, :product_quantity);";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':sku_code', $sku_code);
        $stmt->bindParam(':product_description', $product_description);
        $stmt->bindParam(':product_name', $product_name);
        $stmt->bindParam(':regular_price', $regular_price);
        $stmt->bindParam(':sale_price', $sale_price);
        $stmt->bindParam(':product_weight', $product_weight);
        $stmt->bindParam(':product_quantity', $product_quantity);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location:../index.php");
}
