<?php

require_once 'Drivers.php';
require_once 'Buses.php';
require_once 'Connect.php';


echo '<h1>Водители</h1>';
$drivers = new Drivers();
$drivers->Table('mysql:host=localhost;port=3306;dbname=drivers;charset=utf8', 'root', '');
?>
<h2>Добавить водителя</h2>
    <form action="WriteDriver.php" method="POST">
        <table>
            <tr>
                <td>id </td><td><input value="" name="id"></td>
            </tr>
            <tr>
                <td>Имя </td><td><input value="" name="Name">
            </tr>
            <tr>
                <td>Дата рождения</td><td><input value="" name="Data">
            </tr>
            <tr>
                <td>Стаж </td><td><input value="" name="Experience">
            </tr>
            <tr>
                <td>Номер водительского </td><td><input value="" name="Licence">
            </tr>
            <tr>
                <td>Стоимость часа работы </td><td><input value="" name="Price">
            </tr>
            <tr>
                <td><button name="submit">Сохранить</button></td>
            </tr>
        </table>
    </form>
<h2>Удалить водителя</h2>
<form action="DeleteDriver.php" method="POST">
    <table>
        <tr>
            <td>id </td><td><input value="" name="id"></td>
        </tr>
        <tr>
            <td><button name="submit">Удалить</button></td>
        </tr>
    </table>
</form>
<br>
<h2>Изменить данные</h2>
<form action="RemoveDriver.php" method="POST">
    <table>
        <tr>
            <td>Выбирете колонку для обновления </td>
            <td>
                <select name="param"><option value="Nmae">id</option>
                <option value="Nmae">Имя</option>
                <option value="Date">Дату рождения</option>
                <option value="Experience">Опыт</option>
                <option value="Licence">Водительское удостоверение</option>
                <option value="Price">Цена за час работы</option></select>
            </td>
        </tr>
        <tr>
            <td>Введите id водителя которого необходимо изменить</td><td><input value="" name="id"></td>
        </tr>
        <tr>
            <td>Значение на которое меняем </td><td><input value="" name="name"></td>
        </tr>
        <tr>
            <td><button name="submit">Изменить</button></td>
        </tr>
    </table>
</form>
<br>
<hr></hr>
<?php
echo '<h1>Автобусы</h1>';
$buses = new Buses();
$buses->Table('mysql:host=localhost;port=3306;dbname=drivers;charset=utf8', 'root', ''); ?>


<h2>Добавить автобус</h2>
    <form action="WriteBus.php" method="POST">
        <table>
            <tr>
                <td>id </td><td><input value="" name="id"></td>
            </tr>
            <tr>
                <td>Модель </td><td><input value="" name="Name">
            </tr>
            <tr>
                <td>Вместительность</td><td><input value="" name="Data">
            </tr>
            <tr>
                <td>Номер </td><td><input value="" name="Experience">
            </tr>
            <tr>
                <td>Расход топлива </td><td><input value="" name="Licence">
            </tr>
            <tr>
                <td>Стоимость перевозки за час </td><td><input value="" name="Price">
            </tr>
            <tr>
                <td><button name="submit">Сохранить</button></td>
            </tr>
        </table>
    </form>

<br>
<h2>Изменить данные</h2>
<form action="RemoveBuses.php" method="POST">
    <table>
        <tr>
            <td>Выбирете колонку для обновления </td>
            <td>
                <select name="param"><option value="Nmae">id</option>
                    <option value="Model">Модель</option>
                    <option value="Size">Вместительность</option>
                    <option value="Number">Номер</option>
                    <option value="Fuel">Расход топлива</option>
                    <option value="Price">Цена за час работы</option></select>
            </td>
        </tr>
        <tr>
            <td>Введите id автобуса которого необходимо изменить</td><td><input value="" name="id"></td>
        </tr>
        <tr>
            <td>Значение на которое меняем </td><td><input value="" name="name"></td>
        </tr>
        <tr>
            <td><button name="submit">Изменить</button></td>
        </tr>
    </table>
</form>

<h2>Удалить автобус</h2>
<form action="DeleteBus.php" method="POST">
    <table>
        <tr>
            <td>id </td><td><input value="" name="id"></td>
        </tr>
        <tr>
            <td><button name="submit">Удалить</button></td>
        </tr>
    </table>
</form>