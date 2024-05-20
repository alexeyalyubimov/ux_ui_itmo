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

// Получение данных из формы
$surname = $_POST['surname'];
$name = $_POST['name'];
$patronymic = $_POST['patronymic'];
$status = $_POST['status'];
$birth_date = $_POST['birth_date'];
$city = $_POST['city'];
$school = $_POST['school'];
$class = $_POST['class'];
$study_year = $_POST['study_year'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// Подготовка и выполнение запроса SQL
$sql = "INSERT INTO user (surname, name, patronymic, status, birth_date, city, school, class, study_year, address, phone, email)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssssssss", $surname, $name, $patronymic, $status, $birth_date, $city, $school, $class, $study_year, $address, $phone, $email);

if ($stmt->execute()) {
    echo "<h2>Поздравляем! Данные по новому учащемуся успешно добавлены.</h2>";
    echo "<p><a href=../index.php>Продолжить</a></p>";
} else {
    echo "Ошибка добавления данных: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>