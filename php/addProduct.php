<?php
session_start();

$user_id = $_SESSION['ID'];

// ID товара
$product_id = $_POST['product_id'];
echo $product_id;
$ID_Delivery = 1;
$comment = "no";

require("./connect.php");

$sql = "INSERT INTO OrderBuy(`ID_Product`, `ID_Delivery`, `ID_Client`, `Comment`) VALUES ($product_id, $ID_Delivery, $user_id, $comment);";
$mysql->query($sql);
$mysql->close();

header("Location: ../page/katalog.php");
?>