<?php

require_once 'Connect.php';



if($_POST) {
    if ($_POST['id'] == null) {
        echo 'Укажите id!';
    } else {
        $id = $_POST['id'];
        $sql = "DELETE FROM drivers WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            echo "Удален id" . $id;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }
}