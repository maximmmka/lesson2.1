<?php
    $file = file_get_contents("index.json");
    $decode = json_decode($file, true);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Домашнее задание к лекции 2.1 «Установка и настройка веб-сервера»</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div>
    <h1>Телефонная книга</h1>
    <div>
        <table>
            <thead>
            <tr>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Адрес</th>
                <th>Телефон</th>
            </tr>
            </thead>

            <?php foreach ($decode as $phone):?>
                <tr>
                    <td><?=$phone['firstName']; ?></td>
                    <td><?=$phone['lastName']; ?></td>
                    <td><?=$phone['address']; ?></td>
                    <td><?=$phone['phoneNumber']; ?></td>
                </tr>
            <?php endforeach;?>

        </table>
    </div>
</div>

</body>

</html>
