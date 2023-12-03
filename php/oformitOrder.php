<?php
$delivery = $_POST['delivery'];
$address = $_POST['address'];
$comment = $_POST['comment'];
echo $delivery;
echo $address;

// данные о клиенте
$fio = $_POST['fio'];
$number = $_POST['number'];
$email = $_POST['email'];
$bank = $_POST['bank'];

require("./connect.php");

// заносим данные в таблицу доставки
$sql = "INSERT INTO `Delivery`(`Delivery_Method`, `Address`) VALUES ($delivery, $address)";
$result = $mysql->query($sql);
if($result) {
    header('Location: ../page/kabinet.php');
} else {
    die("Ошибка: " . $mysql->error);
}

?>