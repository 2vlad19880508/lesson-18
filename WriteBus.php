<?php

require_once 'Connect.php';

if($_POST) {

    if ($_POST['id'] == null) {
        echo 'Укажите id!';
    } elseif ($_POST['Name'] == null) {
        echo 'Укажите модель!';
    } elseif ($_POST['Data'] == null) {
        echo 'Укажите вместительность!';
    } elseif ($_POST['Experience'] == null) {
        echo 'Укажите номер!';
    } elseif ($_POST['Licence'] == null) {
        echo 'Укажите расход топлива!';
    } elseif ($_POST['Price'] == null) {
        echo 'Укажите стоимость перевозки за час!';
    } else {
        $id = $_POST['id'];
        $name = $_POST['Name'];
        $data = $_POST['Data'];
        $experience = $_POST['Experience'];
        $licence = $_POST['Licence'];
        $price = $_POST['Price'];


        $sql = "INSERT INTO buses (id, Model, Size, Number, Fuel, Price) value ($id, '$name', '$data', $experience, $licence, $price)";
        if (mysqli_query($conn, $sql)) {
            echo "Новый автобус добавлен";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }
}
