<?php

require_once 'Connect.php';


if($_POST) {
    if ($_POST['id'] == null) {
        echo 'Укажите id!';
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $param = $_POST['param'];
        $sql = "UPDATE buses SET $param = '$name' WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            echo "Изменено";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }
}
