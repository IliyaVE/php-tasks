<?php
$link = mysqli_connect("localhost:8001", "root", "test", "test_php");

if ($link == false) {
    print("Ошибка: Невозможно подключиться к Базе Данных" . mysqli_connect_error());
    exit;
}
$LastName = $_POST["LastName"];
$firstName = $_POST["FirstName"];
$Years = $_POST["Years"] ;
$City = $_POST["City"] ;
$NumberClass = $_POST["NumberClass"] ;
$Grands = $_POST["Grands"] ;
$CountGrands = 10000;
$Grades = $_POST["Grades"] ;
$ScoreOfUniversity = $_POST["ScoreOfUniversity"] ;
$sql =  "INSERT INTO list_students VALUES(NULL,'$LastName','$firstName',$Years,'$City',$NumberClass,$Grands,$CountGrands,$Grades,$ScoreOfUniversity)";

#$num = '20';
#$varch = 'sad';
#$sql =  "INSERT INTO test_name_1 VALUES($num,'$varch')";
$result = mysqli_query($link, $sql);


if (!$result) {
    echo "Произошла ошибка.\n";
    exit;
}








