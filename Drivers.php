<?php

require_once 'Connect.php';

class Drivers
{
    private $dsn;
    private $user;
    private $pass;


    public function Table($dsn, $user, $pass)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->pass = $pass;



        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // выводит ошибки и выводит инфу ассациотивным массивом
        ];

        $pdo = new PDO($dsn, $user, $pass, $options);

        $stmt = $pdo->query('SELECT id, Nmae, Date, Experience, Licence, Price FROM drivers');

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);


        echo '<table border=1>';
        echo '<tr>';
        echo '<td>id</td>';
        echo '<td>Имя</td>';
        echo '<td>Дата рождения</td>';
        echo '<td>Стаж</td>';
        echo '<td>Номер водительского удостоверения</td>';
        echo '<td>Стоимость часа работы</td>';
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
    }

    public function TableIdBuses($dsn, $user, $pass)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->pass = $pass;



        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // выводит ошибки и выводит инфу ассациотивным массивом
        ];

        $pdo = new PDO($dsn, $user, $pass, $options);

        $stmt = $pdo->query('SELECT id, Nmae, Date, Experience, Licence, Price, id_buses FROM drivers');

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);


        echo '<table border=1>';
        echo '<tr>';
        echo '<td>id</td>';
        echo '<td>Имя</td>';
        echo '<td>Дата рождения</td>';
        echo '<td>Стаж</td>';
        echo '<td>Номер водительского удостоверения</td>';
        echo '<td>Стоимость часа работы</td>';
        echo '<td>id Связанного автобуса</td>';
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
    }


}