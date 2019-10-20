<?php


class Buses
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

        $stmt = $pdo->query('SELECT * FROM buses');

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);


        echo '<table border=1>';
        echo '<tr>';
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
    }

}