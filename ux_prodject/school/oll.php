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
            <h2>Обучающиеся 1 — 11 классов</h2>
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
            $sql = "SELECT surname, name, patronymic, status, birth_date, city, school, class, study_year, address, phone, email FROM user";
            $result = $conn->query($sql);

            // Проверка наличия результатов
            if ($result->num_rows > 0) {
                // Вывод данных в HTML
                echo "<table>";
                echo "<tr><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Статус</th><th>Дата рождения</th><th>Город</th><th>Школа</th><th>Класс</th><th>Год обучения</th><th>Адрес</th><th>Телефон</th><th>Email</th></tr>";

                // Обход результатов и вывод данных
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["surname"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["patronymic"] . "</td>";
                    echo "<td>" . $row["status"] . "</td>";
                    echo "<td>" . $row["birth_date"] . "</td>";
                    echo "<td>" . $row["city"] . "</td>";
                    echo "<td>" . $row["school"] . "</td>";
                    echo "<td>" . $row["class"] . "</td>";
                    echo "<td>" . $row["study_year"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
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