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
    <!-- Шапка сайта -->
    <header style="background-color: #312C8C; margin:0 text-align: center; padding: 20px 0;">
        <div class="divHed" style="display: flex; ">
            <img src="img/logonew.png" height=120px>
            <h1 style="color: white; padding-top: 30px;">Сектор А</h1>
        </div>
       
    </header>
    
    
    <div class="cont">

    <script>
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawCharts);
    
    function drawCharts() {
        // Данные для первой диаграммы
        var data1 = google.visualization.arrayToDataTable([
    ['Объект', 'Процент готовности'],
    ['Процент выполненного плана', 75],
    ['Процент не выполненного плана', 25]
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
    centerText.textContent = '75%'; // Текст в центре

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
            ['Процент выполненного плана', 81],
            ['Процент не выполненного плана', 19]
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
            centerText2.textContent = '81%'; // Текст в центре

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
            ['Процент выполненного плана', 21],
            ['Процент не выполненного плана', 79]
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
            centerText3.textContent = '21%'; // Текст в центре

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
        pieHole: 0.8,
        pieSliceText: 'none',
        colors: ['#C369D6', '#DCCAE9', '#7392FF', '#AEA0FF'],
        legend: { position: 'none' }, // Скрываем легенду
        chartArea: {
          left: 10,
          top: 40,
          width: '90%',
          height: '90%'
        },
        backgroundColor: { fill: '#171D5B' },
        titleTextStyle: {
          color: '#ffffff'
        }
      };

      var chart4 = new google.visualization.PieChart(document.getElementById('chart4'));
chart4.draw(data4, options4);

// Добавляем текст в центр диаграммы
var centerText4 = document.createElement('div');
centerText4.style.position = 'absolute';
centerText4.style.top = '55%';
centerText4.style.left = '50%';
centerText4.style.transform = 'translate(-50%, -50%)';
centerText4.style.fontSize = '48px';
centerText4.style.fontWeight = 'bold';
centerText4.style.color = 'white';
centerText4.textContent = '25%';
var chartContainer4 = document.getElementById('chart4');
chartContainer4.style.position = 'relative';
chartContainer4.appendChild(centerText4);

// Добавляем заголовок под диаграммой
var title4 = document.createElement('h3');
title4.textContent = 'Инфраструктура курорта';
title4.style.textAlign = 'center';
title4.style.color = 'white';
title4.style.backgroundColor = '#171D5B';
title4.style.margin = '0';
chartContainer4.appendChild(title4);

// Добавляем пояснения к секторам
var legendContainer = document.createElement('div');
legendContainer.classList.add('legend-container');
var legendItems = [
    { color: '#C369D6', text: 'Водоснабжение' },
    { color: '#DCCAE9', text: 'Электричество' },
    { color: '#7392FF', text: 'Дороги и транспорты' },
    { color: '#AEA0FF', text: 'Водоотведение' }
];

legendItems.forEach(item => {
    var legendItem = document.createElement('div');
    legendItem.classList.add('legend-item');

    var colorElement = document.createElement('div');
    colorElement.classList.add('legend-color');
    colorElement.style.backgroundColor = item.color;
    colorElement.style.width = '15px'; // Устанавливаем ширину цветного квадрата
    colorElement.style.height = '15px'; // Устанавливаем высоту цветного квадрата
    colorElement.style.marginRight = '8px'; // Отступ справа

    var textElement = document.createElement('div');
    textElement.classList.add('legend-text');
    textElement.textContent = item.text;
    textElement.style.color = 'white'; // Устанавливаем цвет текста в белый

    legendItem.appendChild(colorElement);
    legendItem.appendChild(textElement);
    legendContainer.appendChild(legendItem);
});

chartContainer4.appendChild(legendContainer);

            var data5 = google.visualization.arrayToDataTable([
            ['Категория', 'Количество'],
            ['Процент выполненного плана', 79],
            ['Процент не выполненного плана', 21]
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
centerText5.textContent = '79%'; // Текст в центре

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
    ['Процент выполненного плана',74],
    ['Процент не выполненного плана', 26]
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
centerText6.textContent = '74%'; // Текст в центре

// Получаем элемент диаграммы и добавляем текст в его контейнер
var chartContainer6 = document.getElementById('chart6');
chartContainer6.style.position = 'relative'; // Устанавливаем относительное позиционирование для контейнера
chartContainer6.appendChild(centerText6);

// Добавляем заголовок под диаграммой
var title6 = document.createElement('h3');
title6.textContent = 'Подъемники'; // Заголовок для шестой диаграммы
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
title7.textContent = 'Инфраструктура'; // Заголовок для седьмой диаграммы
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
<script>
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);

        function drawChart() {
          var data = google.visualization.arrayToDataTable([
              ['Месяц', 'Белая', 'Синяя', 'Фиолетовая'],
              ['Январь',  0, 0, 600000],
              ['Февраль', 180000, 300000, 610000],
              ['Март',   300000, 100000, 610000],
              ['Апрель', 200000, 300000, 500000],
              ['Май',    230000, 400000, 300000],
              ['Июнь',   360000, 280000, 500000],
              ['Июль',   370000, 300000, 610000],
              ['Август', 500000, 100000, 600000],
              ['Сентябрь', 290000, 400000, 500000],
              ['Октябрь', 290000, 450000, 200000],
              ['Ноябрь',  300000, 550000, 200000],
              ['Декабрь', 600000, 600000, 600000]
          ]);

          var options = {
              title: 'Перспектива увеличения ресурсов от строительства объекта в рублях',
              hAxis: {
                 
                  slantedText: true,
                  slantedTextAngle: 45,
                  textStyle: {fontSize: 10, color: '#ffffff'} // Светлый цвет текста
              },
              vAxis: {
                  
                  ticks: [100000, 200000, 300000, 400000, 500000, 600000],
                  textStyle: {color: '#868B93'} // Светлый цвет текста
              },
              colors: ['#ffffff', '#006AFF', '#BD00FF'], // Белая, синяя, фиолетовая
              legend: { position: 'top', textStyle: {color: '#ffffff'} }, // Легенда сверху
              backgroundColor: '#171D5B', // Темный фон
              titleTextStyle: {
                  color: '#ffffff' // Светлый цвет текста заголовка
              },
              width: 1000, // Ширина графика
              height: 400 // Высота графика
          };

          var chart = new google.visualization.LineChart(document.getElementById('lineChart')); // Изменено 'chart_div' на 'lineChart'
          chart.draw(data, options);
        }
    </script>

   
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
                  
                  slantedText: true,
                 
                  slantedTextAngle: 45,
                  textStyle: {fontSize: 10, color: '#ffffff'} // Светлый цвет текста
              },
              vAxis: {
                 
                  ticks: [0, 25000, 50000, 75000, 100000],
                  textStyle: {color: '#ffffff'} // Светлый цвет текста
              },
              colors: ['#BD00FF', '#006AFF'], // Фиолетовый и голубой
              legend: { 
                  position: 'left', // Легенда слева
                  textStyle: {color: '#ffffff'}, // Белый цвет текста в легенде
                  alignment: 'start' // Выравнивание элементов легенды по началу
              }, 
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

<script type="text/javascript">
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Месяц', 'Количество'], 
        ['Январь', 98], 
        ['Февраль', 80],
        ['Март', 40],
        ['Апрель', 60],
        ['Май', 26],
        ['Июнь', 52],
        ['Июль', 51],
        ['Август', 57],
        ['Сентябрь', 32],
        ['Октябрь', 10],
        ['Ноябрь', 28],
        ['Декабрь', 85]
      ]);

      var options = {
        title: 'Уровень обеспеченности инвесторов русурсами для строительства в процентах',
        hAxis: {
            slantedText: true,
            slantedTextAngle: 45,
            textStyle: { fontSize: 10, color: '#ffffff' }
        },
        vAxis: {
            ticks: [0, 25, 50, 75, 100],
            textStyle: { color: '#ffffff' }
        },
        colors: ['#0066FF'],
        legend: { 
            position: 'none', 
            textStyle: { color: '#ffffff' }
        },
        backgroundColor: '#171D5B',
        titleTextStyle: { color: '#ffffff' },
        width: 1400, // Установите желаемую ширину в пикселях
        height: 400, // Установите желаемую высоту в пикселях
        bar: { groupWidth: '20%' } // Уменьшите значение для уменьшения ширины столбцов
    };

      var chart = new google.visualization.ColumnChart(document.getElementById('diag2'));
      chart.draw(data, options);
    }
</script>
   <h3 class="h2zagl">Процент исполнения стратегии горнолыжного курорта “Шерегеш”</h3>
   <div class="charts-container">
   
        <div id="chart1" class="chart"></div>
        <div id="chart2" class="chart"></div>
        <div id="chart3" class="chart"></div>
        
        <div id="lineChart"></div>
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
    <div class="charts-container">
       
        <div id="chart4" class="chart"></div>
        <div id="diag2"></div>
        
    </div>
    <style>
        .button-container {
            display: flex; /* Используем Flexbox */
            flex-wrap: wrap; /* Разрешаем перенос элементов на новую строку */
            justify-content: center; /* Центрируем элементы по горизонтали */
            margin-top: 20px; /* Отступ сверху */
        }
        .info-text {
            width: 45%; /* Ширина текстового блока */
            padding: 15px; /* Увеличиваем отступы внутри текстового блока */
            border-radius: 5px; /* Скругление углов */
            background-color: #312C8C; /* Цвет фона текстового блока */
            color: white; /* Цвет текста */
            display: flex; /* Используем Flexbox для выравнивания кнопки */
            justify-content: space-between; /* Размещаем текст и кнопку по краям */
            align-items: center; /* Вертикальное выравнивание по центру */
            margin: 5px; /* Отступ между блоками */
            font-size: 20px;
        }
        .info-button {
            padding: 10px 15px; /* Отступы внутри кнопки "Подробнее" */
            border-radius: 5px; /* Скругление углов */
            background-color: #171D5B; /* Цвет фона кнопки "Подробнее" */
            color: white; /* Цвет текста кнопки */
            border: none; /* Убираем границу */
            cursor: pointer; /* Указываем, что кнопка кликабельная */
            font-size: 18px; /* Размер шрифта кнопки */
        }
        .info-button:hover {
            background-color: #0066FF; /* Цвет фона при наведении на кнопку "Подробнее" */
        }
        .modal {
            display: none; /* Скрываем модальное окно по умолчанию */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7); /* Полупрозрачный фон */
        }
        .modal-content {
            background: linear-gradient(to bottom, #050A26, #0A1448);
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            color: white;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>


<div class="button-container">
    <div class="info-text">
        Горнолыжная трасса A60 | Камера 38 | Сектор А
        <button class="info-button" type="button" onclick="openModal('modal1')">+ Подробно</button>
    </div>
    <div class="info-text">
        Горнолыжная трасса B17 | Камера 345 | Сектор B
        <button class="info-button" type="button" onclick="openModal('modal2')">+ Подробно</button>
    </div>
    <div class="info-text">
        Горнолыжная трасса E9 | Камера 11 | Сектор E
        <button class="info-button" type="button" onclick="openModal('modal3')">+ Подробно</button>
    </div>
    <div class="info-text">
        Горнолыжная трасса F4 | Камера 114 | Сектор F
        <button class="info-button" type="button" onclick="openModal('modal4')">+ Подробно</button>
    </div>
</div>

<!-- Модальные окна -->
<div class="modal" id="modal1">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal1')">&times;</span>
        <h3>Горнолыжная трасса A60 - Сектор А</h3>
        
        <div class="background-container"> <!-- Новый контейнер для фона -->
            <div class="columns">
                <div class="column">
                    <p>Инвестор</p>
                    <br>
                    <p>ООО "Лыжня"</p>
                    <br>
                    <p>ООО "Лыжня"</p>
                </div>
                <div class="column">
                    <p>Финансирование</p>
                    <br>
                    <p>85940</p>
                    <br>
                    <p>85940</p>
                </div>
                <div class="column">
                    <p>Контратакция</p>
                    <br>
                    <p>Контракт ООО "Лыжня"</p>
                    <br>
                    <p>Контракт ООО "Лыжня"</p>
                </div>
            </div>
        </div>

        <img src="img/sect1.png" alt="Изображение" height="300px">

        <!-- Новый контейнер для проблемы и кнопки -->
        <div class="background-container problem-container">
            <p>Проблема: Грязная стоковая вода</p>
            <!-- Убираем flex и добавляем отступ для кнопки -->
            <button class="transmission-button" onclick="window.location.href='https://egegesh.ru/online/sheregesh-kaskad-posadkauchebka'">+Трансляция</button>
        </div>
    </div>
</div>

<style>
    .background-container {
        background-color: #3C354A; /* Цвет подложки */
        border-radius: 10px; /* Закругленные углы */
        padding: 20px; /* Отступ внутри контейнера */
        margin-bottom: 20px; /* Отступ снизу для отделения от изображения */
    }

    .columns {
        display: flex; /* Используем Flexbox для колонок */
        justify-content: space-between; /* Распределяем пространство между колонками */
    }

    .column {
        flex: 1; /* Каждая колонка занимает равное пространство */
        padding: 10px; /* Отступ внутри колонок */
        box-sizing: border-box; /* Учитываем отступы в ширине */
    }

    .column p {
        margin: 0; /* Убираем отступы для параграфов */
    }

    .problem-container {
        display: block; /* Убираем flex для вертикального расположения элементов */
        margin-top: 15px; /* Добавляем отступ сверху для отделения от текста проблемы */
    }

    .transmission-button {
        background-color: #171D5B; /* Цвет кнопки */
        color: white; /* Цвет текста кнопки */
        border: none; /* Убираем рамку */
        border-radius: 5px; /* Закругленные углы кнопки */
        padding: 10px 15px; /* Отступы внутри кнопки */
        cursor: pointer; /* Курсор при наведении на кнопку */
        margin-top: 10px; /* Отступ сверху для отделения от текста проблемы */
    }

    .transmission-button:hover {
        background-color: #0066FF; /* Цвет кнопки при наведении */
    }
</style>

<div class="modal" id="modal2">
    <div class="modal-content">
    <span class="close" onclick="closeModal('modal2')">&times;</span>
    <h3>Горнолыжная трасса B17 - Сектор B</h3>
        
        <div class="background-container"> <!-- Новый контейнер для фона -->
            <div class="columns">
                <div class="column">
                    <p>Инвестор</p>
                    <br>
                    <p>ООО "Лыжня"</p>
                    <br>
                    <p>ООО "Лыжня"</p>
                </div>
                <div class="column">
                    <p>Финансирование</p>
                    <br>
                    <p>85940</p>
                    <br>
                    <p>85940</p>
                </div>
                <div class="column">
                    <p>Контратакция</p>
                    <br>
                    <p>Контракт ООО "Лыжня"</p>
                    <br>
                    <p>Контракт ООО "Лыжня"</p>
                </div>
            </div>
        </div>

        <img src="img/sect2.jpg" alt="Изображение" height="300px">

        <!-- Новый контейнер для проблемы и кнопки -->
        <div class="background-container problem-container">
            <p>Проблема: Грязная стоковая вода</p>
            <!-- Убираем flex и добавляем отступ для кнопки -->
            <button class="transmission-button" onclick="window.location.href='https://egegesh.ru/online/sheregesh-kaskad-olimpexpress'">+Трансляция</button>
        </div>
    </div>
</div>

<div class="modal" id="modal3">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal3')">&times;</span>
        <h3>Горнолыжная трасса E9 - Сектор E</h3>
        <div class="background-container"> <!-- Новый контейнер для фона -->
            <div class="columns">
                <div class="column">
                    <p>Инвестор</p>
                    <br>
                    <p>ООО "Лыжня"</p>
                    <br>
                    <p>ООО "Лыжня"</p>
                </div>
                <div class="column">
                    <p>Финансирование</p>
                    <br>
                    <p>85940</p>
                    <br>
                    <p>85940</p>
                </div>
                <div class="column">
                    <p>Контратакция</p>
                    <br>
                    <p>Контракт ООО "Лыжня"</p>
                    <br>
                    <p>Контракт ООО "Лыжня"</p>
                </div>
            </div>
        </div>

        <img src="img/sect3.jpg" alt="Изображение" height="300px">

        <!-- Новый контейнер для проблемы и кнопки -->
        <div class="background-container problem-container">
            <p>Проблема: Грязная стоковая вода</p>
            <!-- Убираем flex и добавляем отступ для кнопки -->
            <button class="transmission-button" onclick="window.location.href='https://egegesh.ru/online/sheregesh-kaskad-uchebnayalift'">+Трансляция</button>
        </div>
    </div>
</div>

<div class="modal" id="modal4">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal4')">&times;</span>
        <h3>Горнолыжная трасса F4 - Сектор F</h3>
        <div class="background-container"> <!-- Новый контейнер для фона -->
            <div class="columns">
                <div class="column">
                    <p>Инвестор</p>
                    <br>
                    <p>ООО "Лыжня"</p>
                    <br>
                    <p>ООО "Лыжня"</p>
                </div>
                <div class="column">
                    <p>Финансирование</p>
                    <br>
                    <p>85940</p>
                    <br>
                    <p>85940</p>
                </div>
                <div class="column">
                    <p>Контратакция</p>
                    <br>
                    <p>Контракт ООО "Лыжня"</p>
                    <br>
                    <p>Контракт ООО "Лыжня"</p>
                </div>
            </div>
        </div>

        <img src="img/sect4.jpg" alt="Изображение" height="300px">

        <!-- Новый контейнер для проблемы и кнопки -->
        <div class="background-container problem-container">
            <p>Проблема: Грязная стоковая вода</p>
            <!-- Убираем flex и добавляем отступ для кнопки -->
            <button class="transmission-button" onclick="window.location.href='https://egegesh.ru/online/sheregesh-kaskad-landinguchebka'">+Трансляция</button>
        </div>
    </div>
</div>

<script>
    function openModal(modalId) {
        document.getElementById(modalId).style.display = "block";
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = "none";
    }

    // Закрытие модального окна при клике вне его содержимого
    window.onclick = function(event) {
        const modals = document.getElementsByClassName("modal");
        for (let i = 0; i < modals.length; i++) {
            if (event.target == modals[i]) {
                modals[i].style.display = "none";
            }
        }
    }
</script>

</body>
</html>