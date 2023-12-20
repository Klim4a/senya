<?php
require_once('db.php');
require_once('index.html');
$name = $_POST['name'];
$adress = $_POST['adress'];
$email = $_POST['email'];
$number = $_POST['number'];
$NameonCard = $_POST['NameonCard'];
$city = $_POST['city'];
$Creditcardnumber = $_POST['Creditcardnumber'];
$ExpMonth = $_POST['ExpMonth'];
$ExpYear = $_POST['ExpYear'];
$CVV = $_POST['CVV'];


$sql = "INSERT INTO `users` (name, adress, email, number, NameonCard, city, Creditcardnumber, ExpMonth, ExpYear, CVV) VALUES ('$name', '$adress', '$email', '$number', '$NameonCard', '$city', '$Creditcardnumber', '$ExpMonth', '$ExpYear', '$CVV')";


if ($conn -> query($sql) === TRUE) {
file_get_contents('index.html');
} else {
echo "Ошибка" .$conn -> error;
}

?>