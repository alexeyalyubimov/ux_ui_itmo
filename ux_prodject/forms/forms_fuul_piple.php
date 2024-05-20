<!DOCTYPE html>
<html>
    <head>
        <title>Проект "Электронный журнал учителя-дефектолога"</title>
        <meta charset="utf-8">
<link rel="stylesheet" href="../template/css.css">
    </head>
<header id="header">
<?php include "../template/header.html"; ?>
</header>
<nav id="sidebar">
<?php include "../template/menu.html"; ?>
</nav>

<main>

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

if ($result->num_rows > 0) {
    // Вывод данных
    echo "<table>";
    echo "<tr><th>ID</th><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Статус</th><th>Дата рождения</th><th>Город</th><th>Школа</th><th>Класс</th><th>Год обучения</th><th>Адрес</th><th>Телефон</th><th>Email</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
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
    echo "Данные не найдены";
}

$conn->close();
?>

</main>

<footer id="footer">
<?php include "../template/footer.html"; ?>
</footer>