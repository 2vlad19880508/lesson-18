<?php

require_once 'Connect.php';

if($_POST) {

    if ($_POST['id'] == null) {
        echo 'Укажите id!';
    } elseif ($_POST['Name'] == null) {
        echo 'Укажите имя!';
    } elseif ($_POST['Data'] == null) {
        echo 'Укажите дату рождения!';
    } elseif ($_POST['Experience'] == null) {
        echo 'Укажите стаж!';
    } elseif ($_POST['Licence'] == null) {
        echo 'Укажите номер водительского!';
    } elseif ($_POST['Price'] == null) {
        echo 'Укажите стоимость работы!';
    } else {
        $id = $_POST['id'];
        $name = $_POST['Name'];
        $data = $_POST['Data'];
        $experience = $_POST['Experience'];
        $licence = $_POST['Licence'];
        $price = $_POST['Price'];


        $sql = "INSERT INTO drivers (id, Nmae, Date, Experience, Licence, Price, id_buses) value ($id, '$name', '$data', $experience, $licence, $price, 1)";
        if (mysqli_query($conn, $sql)) {
            echo "Новый водитель добавлен";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }
}
