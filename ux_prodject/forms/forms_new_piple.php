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
<h2>Добавление нового ученика</h2>
    <form method="post" action="insert.php">
        <label for="surname">Фамилия:</label>
        <input type="text" id="surname" name="surname" required><br><br>

        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="patronymic">Отчество:</label>
        <input type="text" id="patronymic" name="patronymic"><br><br>

        <label for="status">Статус:</label>
        <input type="text" id="status" name="status"><br><br>

        <label for="birth_date">Дата рождения:</label>
        <input type="date" id="birth_date" name="birth_date"><br><br>

        <label for="city">Город:</label>
        <input type="text" id="city" name="city"><br><br>

        <label for="school">Школа:</label>
        <input type="text" id="school" name="school"><br><br>

        <label for="class">Класс:</label>
        <input type="text" id="class" name="class"><br><br>

        <label for="study_year">Год обучения:</label>
        <input type="text" id="study_year" name="study_year"><br><br>

        <label for="address">Адрес:</label>
        <input type="text" id="address" name="address"><br><br>

        <label for="phone">Телефон:</label>
        <input type="tel" id="phone" name="phone"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <input type="submit" value="Добавить">
    </form>
</main>

<footer id="footer">
<?php include "../template/footer.html"; ?>
</footer>