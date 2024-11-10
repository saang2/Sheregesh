<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link href="style/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Авторизация</h1>
    </header>
    <p class="text1">Рады встрече</p>
    <p class="text2">Введите свой логин и пароль для автризации</p>
    <div>
        <form action="" method="post">
            <p class="textAut">Ваш логин</p>
            
            <input type="text" name="login" placeholder="Логин" required class="inp">
            <p class="textAut">Ваш пароль</p>
            <input type="password" name="password" placeholder="Пароль" required  class="inp">
            <input type="submit" value="+ Авторизация" class="btn">
        </form>
    </div>

    <?php
    // Проверка, была ли отправлена форма
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получаем значения логина и пароля из формы
        $login = $_POST['login'];
        $password = $_POST['password'];

        // Условия для проверки логина и пароля
        if ($login == "1" && $password == "2") {
            // Если логин и пароль правильные, перенаправляем на main.php
            header("Location: main.php");
            exit(); // Завершаем выполнение скрипта
        } else {
            echo "<p style='color:red;'>Неверный логин или пароль.</p>";
        }
    }
    ?>
</body>
</html>


