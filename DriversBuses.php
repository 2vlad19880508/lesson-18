<?php

require_once 'Connect.php';
require_once 'Buses.php';
require_once 'Drivers.php';

$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // выводит ошибки и выводит инфу ассациотивным массивом
];


if($_POST) {

    $id_buses = $_POST['id_buses'];
    $driver_name = $_POST['driver_name'];


    $sql = "UPDATE drivers SET id_buses=$id_buses WHERE Nmae = '$driver_name'";
    if (mysqli_query($conn, $sql)) {
        echo "Водитель связан";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

$user = $newConnect->username;
$pass = $newConnect->password;

$pdo = new PDO($dsn, $user, $pass, $options);

$stmt = $pdo->query('SELECT * FROM drivers INNER JOIN buses ON drivers.id_buses = buses.id');

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);



echo '<table border=1>';
echo '<tr>';
echo '<td>id</td>';
echo '<td>Имя</td>';
echo '<td>Дата рождения</td>';
echo '<td>Стаж</td>';
echo '<td>Номер водительского удостоверения</td>';
echo '<td>Стоимость часа работы</td>';
echo '<td>id</td>';
echo '<td>Модель</td>';
echo '<td>Вместительность</td>';
echo '<td>Регистрационный номер</td>';
echo '<td>Расход топлива</td>';
echo '<td>Стоимость перевозки за час</td>';
echo '</tr>';
foreach ($data as &$value)
{
    $arr = $value;
    echo '<tr>';
    foreach ($arr as &$value)
    {
        echo '<td>' . $value . '</td>';
    }

    echo '</tr>';
}
echo '</table>';
echo '<br>';



echo '<h1>Водители</h1>';
$drivers = new Drivers();
$drivers->TableIdBuses('mysql:host=localhost;port=3306;dbname=drivers;charset=utf8', 'root', '');

echo '<br>';

echo '<h1>Автобусы</h1>';
$buses = new Buses();
$buses->Table('mysql:host=localhost;port=3306;dbname=drivers;charset=utf8', 'root', '');
echo '<br>';

echo '<h1>Связать водителя и автобус</h1>';

$stmt = $pdo->query('SELECT Nmae FROM drivers');

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
    <form action="DriversBuses.php" method="POST">
<?
echo 'Выберете водителя <select name="driver_name">';
foreach ($data as &$value)
{
    $arr = $value;
    foreach ($arr as &$value)
    {
        echo '<option>' . $value . '</option>';
    }
}
echo '</select></br>';
echo 'Выберете id автобуса';
$stmt = $pdo->query('SELECT id FROM buses');

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo 'Выберете водителя <select name="id_buses">';
foreach ($data as &$value)
{
    $arr = $value;
    foreach ($arr as &$value)
    {
        echo '<option>' . $value . '</option>';
    }
}
echo '</select></br>';
?>

        <button name="submit">Сохранить</button>
    </form>
