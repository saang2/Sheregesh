<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link href="style/style.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: row;
            margin: 0;
            height: 100vh; /* Занять всю высоту экрана */
        }
        .image-container {
            flex: 1; /* Занять половину ширины */
            background: url('img/aut.png') no-repeat center center; /* Замените на путь к вашему изображению */
            background-size: cover; /* Изображение будет масштабироваться */
        }
        .form-container {
            flex: 1; /* Занять вторую половину ширины */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Центрировать содержимое по вертикали */
            align-items: center; /* Центрировать содержимое по горизонтали */
            padding: 20px; /* Добавить немного отступов */
        }
        .inp {
            padding: 10px; /* Отступы внутри инпута */
            border-radius: 10px;
            background: linear-gradient(to right, #050A26, #0F1D65);
            background-color: #0F1D65;
            color: rgb(255, 255, 255);
            border: none; /* Убираем границу */
            width: 100%; /* Занять всю ширину контейнера */
            margin-bottom: 15px; /* Отступ между инпутами */
        }
        .btn {
            padding: 15px; /* Отступы внутри кнопки */
            border-radius: 10px;
            background: linear-gradient(to right, #060684, #224dac); /* Градиент от синего к голубому */
            color: white; /* Цвет текста на кнопке */
            border: none; /* Убираем границу */
            cursor: pointer; /* Указываем, что элемент кликабельный */
            font-size: 16px; /* Размер шрифта */
            transition: background 0.3s; /* Плавный переход при наведении */
            width: 100%; /* Занять всю ширину контейнера */
        }
    </style>
</head>
<body>
    <div class="image-container"></div> <!-- Контейнер для изображения -->
    <div class="form-container">
        <header>
           
        </header>
        <img src="img/logonew.png" alt="Логотип" height=150px>
        <p class="text1">Рады встрече</p>
        <p class="text2">Введите свой логин и пароль для авторизации</p>
        <div>
            <form action="" method="post">
                <p class="textAut">Ваш логин</p>
                <input type="text" name="login" placeholder="Логин" required class="inp">
                <p class="textAut">Ваш пароль</p>
                <input type="password" name="password" placeholder="Пароль" required class="inp">
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
    </div>
</body>
</html>


