<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Процент исполнения стратегии горнолыжного курорта “Шерегеш”</title>
    <link href="style/style.css" rel="stylesheet">
    <script src="https://www.google.com/jsapi"></script>

    
    
</head>
<body>
    <header>
     <h1>Сектор А</h1>
    </header>
    
    <div class="cont">

    <script>
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawCharts);
    
    function drawCharts() {
        // Данные для первой диаграммы
        var data1 = google.visualization.arrayToDataTable([
    ['Объект', 'Процент готовности'],
    ['Процент выполненного плана', 65],
    ['Процент не выполненного плана', 35]
]);

var options1 = {
    pieHole: 0.8, // Размер дырки в центре
    pieSliceText: 'none', // Убрать подписи в секторах
    colors: ['#EFFBFE', '#9356A0'], //  цвета
    legend: { position: 'bottom' }, // Легенда снизу
    chartArea: { // Настройка области диаграммы
        left: 10, // Отступ слева
        top: 40, // Отступ сверху
        width: '90%', // Ширина
        height: '90%' // Высота
    },
    backgroundColor: { fill: '#171D5B' }, // Темный фон для диаграммы
    titleTextStyle: {
        color: '#ffffff' // Цвет текста заголовка
    }
};

var chart1 = new google.visualization.PieChart(document.getElementById('chart1'));
chart1.draw(data1, options1);

// Добавляем текст в центр диаграммы
var centerText = document.createElement('div');
centerText.style.position = 'absolute';
centerText.style.top = '55%';
centerText.style.left = '50%';
centerText.style.transform = 'translate(-50%, -50%)';
centerText.style.fontSize = '48px'; // Увеличиваем размер шрифта
centerText.style.fontWeight = 'bold';
centerText.style.color = 'white'; // Цвет текста
centerText.textContent = '65%'; // Текст в центре

// Получаем элемент диаграммы и добавляем текст в его контейнер
var chartContainer = document.getElementById('chart1');
chartContainer.style.position = 'relative'; // Устанавливаем относительное позиционирование для контейнера
chartContainer.appendChild(centerText);

// Добавляем заголовок под диаграммой
var title = document.createElement('h3');
title.textContent = 'Развитие инфраструктуры';
title.style.textAlign = 'center';
title.style.color = 'white'; // Цвет текста заголовка
title.style.backgroundColor = '#171D5B'; // Фон заголовка совпадает с фоном диаграммы
title.style.margin = '0'; // Убираем отступы вокруг заголовка
chartContainer.appendChild(title);

// Добавляем пояснения к цветам
var legend = document.createElement('div');
legend.style.textAlign = 'left'; // Выравниваем по левому краю
legend.style.marginTop = '10px'; // Устанавливаем верхний отступ у легенды (10 пикселей)
legend.style.backgroundColor = '#171D5B'; // Фон для пояснения
legend.style.color = 'white'; // Цвет текста

// Функция для создания строки с цветом и текстом
function addLegendItem(color, text) {
    var itemContainer = document.createElement('div');
    itemContainer.style.display = 'flex';
    itemContainer.style.alignItems = 'center';
    itemContainer.style.marginBottom = '5px'; // Отступ между строками

    var colorBox = document.createElement('span');
    colorBox.style.display = 'inline-block';
    colorBox.style.width = '20px';
    colorBox.style.height = '20px';
    colorBox.style.borderRadius = '50%';
    colorBox.style.backgroundColor = color;
    colorBox.style.marginRight = '10px';

    var textSpan = document.createElement('span');
    textSpan.textContent = text;

    itemContainer.appendChild(colorBox);
    itemContainer.appendChild(textSpan);
    legend.appendChild(itemContainer);
}

// Добавляем элементы легенды
addLegendItem('#EFFBFE', 'Процент выполненного плана');
addLegendItem('#9356A0', 'Процент не выполненного плана');

chartContainer.appendChild(legend);


        // Данные для второй диаграммы
        var data2 = google.visualization.arrayToDataTable([
            ['Объект', 'Процент уровня обеспечения инвесторов'],
            ['Процент выполненного плана', 65],
            ['Процент не выполненного плана', 35]
        ]);
        var options2 = {
                pieHole: 0.8, // Размер дырки в центре
                pieSliceText: 'none', // Убрать подписи в секторах
                colors: ['#EFFBFE', '#9356A0'], // Цвета для второй диаграммы
                legend: { position: 'none' }, // Убираем легенду
                chartArea: { 
                    left: 10,
                    top: 40,
                    width: '90%',
                    height: '90%'
                },
                backgroundColor: { fill: '#171D5B' }, // Темный фон для диаграммы
                titleTextStyle: {
                    color: '#ffffff' // Цвет текста заголовка
                }
            };

            var chart2 = new google.visualization.PieChart(document.getElementById('chart2'));
            chart2.draw(data2, options2);

            // Добавляем текст в центр второй диаграммы
            var centerText2 = document.createElement('div');
            centerText2.style.position = 'absolute';
            centerText2.style.top = '55%';
            centerText2.style.left = '50%';
            centerText2.style.transform = 'translate(-50%, -50%)';
            centerText2.style.fontSize = '48px'; // Увеличиваем размер шрифта
            centerText2.style.fontWeight = 'bold';
            centerText2.style.color = 'white'; // Цвет текста
            centerText2.textContent = '65%'; // Текст в центре

            var chartContainer2 = document.getElementById('chart2');
            chartContainer2.style.position = 'relative'; // Устанавливаем относительное позиционирование для контейнера
            chartContainer2.appendChild(centerText2);

            // Добавляем заголовок под второй диаграммой
            var title2 = document.createElement('h3');
            title2.textContent = 'Турпоток';
            title2.style.textAlign = 'center';
            title2.style.color = 'white'; // Цвет текста заголовка
            title2.style.backgroundColor = '#171D5B'; // Фон заголовка совпадает с фоном диаграммы
            title2.style.margin = '0'; // Убираем отступы вокруг заголовка
            chartContainer2.appendChild(title2);

        // Данные для третьей диаграммы
        var data3 = google.visualization.arrayToDataTable([
            ['Инвестор', 'Процент'],
            ['Процент выполненного плана', 65],
            ['Процент не выполненного плана', 35]
        ]);
        var options3 = {
                pieHole: 0.8, // Размер дырки в центре
                pieSliceText: 'none', // Убрать подписи в секторах
                colors: ['#EFFBFE', '#9356A0'], // Цвета для второй диаграммы
                legend: { position: 'none' }, // Убираем легенду
                chartArea: { 
                    left: 10,
                    top: 40,
                    width: '90%',
                    height: '90%'
                },
                backgroundColor: { fill: '#171D5B' }, // Темный фон для диаграммы
                titleTextStyle: {
                    color: '#ffffff' // Цвет текста заголовка
                }
            };

            var chart3 = new google.visualization.PieChart(document.getElementById('chart3'));
            chart3.draw(data3, options3);

            // Добавляем текст в центр третьей диаграммы
            var centerText3 = document.createElement('div');
            centerText3.style.position = 'absolute';
            centerText3.style.top = '55%';
            centerText3.style.left = '50%';
            centerText3.style.transform = 'translate(-50%, -50%)';
            centerText3.style.fontSize = '48px'; // Увеличиваем размер шрифта
            centerText3.style.fontWeight = 'bold';
            centerText3.style.color = 'white'; // Цвет текста
            centerText3.textContent = '65%'; // Текст в центре

            var chartContainer3 = document.getElementById('chart3');
            chartContainer3.style.position = 'relative'; // Устанавливаем относительное позиционирование для контейнера
            chartContainer3.appendChild(centerText3);

            // Добавляем заголовок под третью диаграммой
            var title3 = document.createElement('h3');
            title3.textContent = 'Инвесторы';
            title3.style.textAlign = 'center';
            title3.style.color = 'white'; // Цвет текста заголовка
            title3.style.backgroundColor = '#171D5B'; // Фон заголовка совпадает с фоном диаграммы
            title3.style.margin = '0'; // Убираем отступы вокруг заголовка
            chartContainer3.appendChild(title3);

        // Данные для четвертой диаграммы
        var data4 = google.visualization.arrayToDataTable([
            ['Категория', 'Количество'],
            ['Водоснабжение', 25],
            ['Электричество', 25],
            ['Дороги и транспорты', 25],
            ['Водоотведение', 25]
        ]);
        var options4 = {
            title: 'Инфраструктура курорта',
            pieHole: 0.4,
            pieSliceText: 'none',
            colors: ['#C369D6', '#DCCAE9', '#7392FF', '#AEA0FF'],
            legend: { position: 'bottom' }
        };
        var chart4 = new google.visualization.PieChart(document.getElementById('chart4'));
        chart4.draw(data4, options4);

        var data5 = google.visualization.arrayToDataTable([
    ['Категория', 'Количество'],
    ['Процент выполненного плана', 65],
    ['Процент не выполненного плана', 35]
]);

// Используем те же параметры, что и для первой диаграммы
var options5 = {
    pieHole: 0.8, // Размер дырки в центре
    pieSliceText: 'none', // Убрать подписи в секторах
    colors: ['#EFFBFE', '#9356A0'], // Цвета
    legend: { position: 'bottom' }, // Легенда снизу
    chartArea: { // Настройка области диаграммы
        left: 10, // Отступ слева
        top: 40, // Отступ сверху
        width: '90%', // Ширина
        height: '90%' // Высота
    },
    backgroundColor: { fill: '#171D5B' }, // Темный фон для диаграммы
    titleTextStyle: {
        color: '#ffffff' // Цвет текста заголовка
    }
};

// Создаем диаграмму
var chart5 = new google.visualization.PieChart(document.getElementById('chart5'));
chart5.draw(data5, options5);

// Добавляем текст в центр диаграммы
var centerText5 = document.createElement('div');
centerText5.style.position = 'absolute';
centerText5.style.top = '55%';
centerText5.style.left = '50%';
centerText5.style.transform = 'translate(-50%, -50%)';
centerText5.style.fontSize = '48px'; // Увеличиваем размер шрифта
centerText5.style.fontWeight = 'bold';
centerText5.style.color = 'white'; // Цвет текста
centerText5.textContent = '65%'; // Текст в центре

// Получаем элемент диаграммы и добавляем текст в его контейнер
var chartContainer5 = document.getElementById('chart5');
chartContainer5.style.position = 'relative'; // Устанавливаем относительное позиционирование для контейнера
chartContainer5.appendChild(centerText5);

// Добавляем заголовок под диаграммой
var title5 = document.createElement('h3');
title5.textContent = 'Горнолыжные трассы';
title5.style.textAlign = 'center';
title5.style.color = 'white'; // Цвет текста заголовка
title5.style.backgroundColor = '#171D5B'; // Фон заголовка совпадает с фоном диаграммы
title5.style.margin = '0'; // Убираем отступы вокруг заголовка

chartContainer5.appendChild(title5);

var data6 = google.visualization.arrayToDataTable([
    ['Категория', 'Количество'],
    ['Процент выполненного плана', 65],
    ['Процент не выполненного плана', 35]
]);

// Используем те же параметры, что и для пятой диаграммы
var options6 = {
    pieHole: 0.8, // Размер дырки в центре
    pieSliceText: 'none', // Убрать подписи в секторах
    colors: ['#EFFBFE', '#9356A0'], // Цвета
    legend: { position: 'bottom' }, // Легенда снизу
    chartArea: { // Настройка области диаграммы
        left: 10, // Отступ слева
        top: 40, // Отступ сверху
        width: '90%', // Ширина
        height: '90%' // Высота
    },
    backgroundColor: { fill: '#171D5B' }, // Темный фон для диаграммы
    titleTextStyle: {
        color: '#ffffff' // Цвет текста заголовка
    }
};

// Создаем диаграмму
var chart6 = new google.visualization.PieChart(document.getElementById('chart6'));
chart6.draw(data6, options6);

// Добавляем текст в центр диаграммы
var centerText6 = document.createElement('div');
centerText6.style.position = 'absolute';
centerText6.style.top = '55%';
centerText6.style.left = '50%';
centerText6.style.transform = 'translate(-50%, -50%)';
centerText6.style.fontSize = '48px'; // Увеличиваем размер шрифта
centerText6.style.fontWeight = 'bold';
centerText6.style.color = 'white'; // Цвет текста
centerText6.textContent = '65%'; // Текст в центре

// Получаем элемент диаграммы и добавляем текст в его контейнер
var chartContainer6 = document.getElementById('chart6');
chartContainer6.style.position = 'relative'; // Устанавливаем относительное позиционирование для контейнера
chartContainer6.appendChild(centerText6);

// Добавляем заголовок под диаграммой
var title6 = document.createElement('h3');
title6.textContent = 'Горнолыжные трассы'; // Заголовок для шестой диаграммы
title6.style.textAlign = 'center';
title6.style.color = 'white'; // Цвет текста заголовка
title6.style.backgroundColor = '#171D5B'; // Фон заголовка совпадает с фоном диаграммы
title6.style.margin = '0'; // Убираем отступы вокруг заголовка
chartContainer6.appendChild(title6);

// Данные для седьмой диаграммы
var data7 = google.visualization.arrayToDataTable([
    ['Категория', 'Количество'],
    ['Процент выполненного плана', 65],
    ['Процент не выполненного плана', 35]
]);

// Используем те же параметры, что и для пятой диаграммы
var options7 = {
    pieHole: 0.8, // Размер дырки в центре
    pieSliceText: 'none', // Убрать подписи в секторах
    colors: ['#EFFBFE', '#9356A0'], // Цвета
    legend: { position: 'bottom' }, // Легенда снизу
    chartArea: { // Настройка области диаграммы
        left: 10, // Отступ слева
        top: 40, // Отступ сверху
        width: '90%', // Ширина
        height: '90%' // Высота
    },
    backgroundColor: { fill: '#171D5B' }, // Темный фон для диаграммы
    titleTextStyle: {
        color: '#ffffff' // Цвет текста заголовка
    }
};

// Создаем диаграмму
var chart7 = new google.visualization.PieChart(document.getElementById('chart7'));
chart7.draw(data7, options7);

// Добавляем текст в центр диаграммы
var centerText7 = document.createElement('div');
centerText7.style.position = 'absolute';
centerText7.style.top = '55%';
centerText7.style.left = '50%';
centerText7.style.transform = 'translate(-50%, -50%)';
centerText7.style.fontSize = '48px'; // Увеличиваем размер шрифта
centerText7.style.fontWeight = 'bold';
centerText7.style.color = 'white'; // Цвет текста
centerText7.textContent = '65%'; // Текст в центре

// Получаем элемент диаграммы и добавляем текст в его контейнер
var chartContainer7 = document.getElementById('chart7');
chartContainer7.style.position = 'relative'; // Устанавливаем относительное позиционирование для контейнера
chartContainer7.appendChild(centerText7);

// Добавляем заголовок под диаграммой
var title7 = document.createElement('h3');
title7.textContent = 'Горнолыжные трассы'; // Заголовок для седьмой диаграммы
title7.style.textAlign = 'center';
title7.style.color = 'white'; // Цвет текста заголовка
title7.style.backgroundColor = '#171D5B'; // Фон заголовка совпадает с фоном диаграммы
title7.style.margin = '0'; // Убираем отступы вокруг заголовка
chartContainer7.appendChild(title7);
    }
</script>


 
<style>
  
 
    h2 {
        text-align: center;
        font-family: "Verdana", sans-serif;
        font-size: 40px;
    }
</style>
 

   
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
          var data = google.visualization.arrayToDataTable([
              ['Месяц', 'Фиолетовый', 'Голубой'],
              ['Январь',  85000, 110000],
              ['Февраль', 82000, 98000],
              ['Март',   45000, 50000],
              ['Апрель', 76000, 68000],
              ['Май',    34000, 66000],
              ['Июнь',   97000, 50000],
              ['Июль',   81000, 87000],
              ['Август', 60000, 40000],
              ['Сентябрь', 50000, 75000],
              ['Октябрь', 8000, 12000],
              ['Ноябрь',  61000, 56000],
              ['Декабрь', 99000, 91000]
          ]);

          var options = {
              title: 'Поток количества туристов по месяцам',
              hAxis: {
                  title: 'Месяц',
                  slantedText: true,
                  slantedTextAngle: 45,
                  textStyle: {fontSize: 10, color: '#ffffff'} // Светлый цвет текста
              },
              vAxis: {
                  title: 'Количество туристов',
                  ticks: [0, 25000, 50000, 75000, 100000],
                  textStyle: {color: '#ffffff'} // Светлый цвет текста
              },
              colors: ['#BD00FF', '#006AFF'], // Фиолетовый и голубой
              legend: { position: 'bottom' }, // Легенда снизу
              backgroundColor: '#171D5B', // Темный фон
              titleTextStyle: {
                  color: '#ffffff' // Светлый цвет текста заголовка
              },
              width: 1000, // Установите ширину графика
              height: 400 // Установите высоту графика
          };

          var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
          chart.draw(data, options);
      }
    </script></div>
   <h3 class="h2zagl">Процент исполнения стратегии горнолыжного курорта “Шерегеш”</h3>
   <div class="charts-container">
   
        <div id="chart1" class="chart"></div>
        <div id="chart2" class="chart"></div>
        <div id="chart3" class="chart"></div>
        <div id="chart4" class="chart"></div>
        <img src="img/kart.png" alt="Карта Шерегеша" class="cart" height=300px>
        <br>
        
        <br>
    </div>
    <br>
    <br>
    <br>
    <h3 class="h2zagl">Процент готовности объектов уровня ресурсов</h3>
    <div class="charts-container">
   
        <div id="chart5" class="chart"></div>
        <div id="chart6" class="chart"></div>
        <div id="chart7" class="chart"></div>
        <div id="chart_div"></div>
    </div>
  
    <h3>Заголовок</h3>
   
   
</body>
</html>