<!DOCTYPE html>
<html>
    <head>
        <title>Проект "Электронный журнал учителя-дефектолога"</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../template/css.css">
    </head>
    <body>
        <header id="header">
            <?php include "../template/header.html"; ?>
        </header>
        <nav id="sidebar">
            <?php include "../template/menu.html"; ?>
        </nav>

        <main>
<h2>Обучающиеся 11 класса</h2>
            <?php
            // Подключение к базе данных
            $servername = "tiflolab.mysql";
            $username = "tiflolab_itmo";
            $password = "LW-6akOX";
            $dbname = "tiflolab_itmo";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Проверка соединения
            if ($conn->connect_error) {
                die("Ошибка подключения к базе данных: " . $conn->connect_error);
            }

            // Подготовка и выполнение запроса SQL
            $sql = "SELECT * FROM user ORDER BY surname ASC";
            $result = $conn->query($sql);

            // Подготовка и выполнение запроса SQL
            $sql_11 = "SELECT * FROM user WHERE class = '11'";
            $result_11 = $conn->query($sql_11);

            // Проверка наличия результатов
            if ($result_11->num_rows > 0) {
                // Вывод данных в HTML
                echo "<table>";
                echo "<tr><th>ID</th><th>Фамилия</th><th>Имя</th><th>Класс</th></tr>";

                // Обход результатов и вывод данных
                while($row = $result_11->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["surname"] . "</td>"; // Используем правильный ключ из массива $row
                    echo "<td>" . $row["name"] . "</td>"; // Используем правильный ключ из массива $row
                    echo "<td>" . $row["class"] . "</td>"; // Используем правильное название столбца
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "Нет результатов";
            }
            ?>

        </main>

        <footer id="footer">
            <?php include "../template/footer.html"; ?>
        </footer>