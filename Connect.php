<?php


class Connect
{
    public $servername;
    public $database;
    public $username;
    public $password;

    public function Connect($servername, $database, $username, $password)
    {

        $this->servername = $servername;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;

        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            die("Ошибка подключения к базе: " . mysqli_connect_error());
        }

    }
}

$newConnect= new Connect('localhost', 'drivers', 'root', '');
$conn = mysqli_connect($newConnect->servername, $newConnect->username, $newConnect->password, $newConnect->database);
$dsn = 'mysql:host=localhost;port=3306;dbname=drivers;cha';