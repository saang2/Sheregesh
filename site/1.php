
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
<script>
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);

        function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Работа', 11],
            ['Сон', 8],
            ['Отдых', 2],
            ['Другое', 3]
        ]);

        var options = {
            title: 'Распределение времени',
            pieHole: 0.6, // Размер дырки в центре
            pieSliceText: 'none', // Убрать подписи в секторах
            colors: ['#f0f8ff', '#f5f5f5', '#fffffa', '#f5f5dc'], // Светлые цвета
            legend: { position: 'bottom' }, // Легенда снизу
            chartArea: { // Настройка области диаграммы
                left: 10, // Отступ слева
                top: 40, // Отступ сверху
                width: '90%', // Ширина
                height: '90%' // Высота
            },
            backgroundColor: { fill: '#2c2c2c' }, // Темный фон для диаграммы
            titleTextStyle: {
                color: '#ffffff' // Цвет текста заголовка
            }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);

        // Добавляем текст в центр диаграммы
        var centerText = document.createElement('div');
        centerText.style.position = 'absolute';
        centerText.style.top = '50%';
        centerText.style.left = '50%';
        centerText.style.transform = 'translate(-50%, -50%)';
        centerText.style.fontSize = '24px';
        centerText.style.fontWeight = 'bold';
        centerText.style.color = 'white'; // Цвет текста в центре
        centerText.textContent = '24 часа';

        document.getElementById('piechart').appendChild(centerText);
    }
    </script>
    <style>
        #piechart {
            position: relative; /* Необходимо для размещения текста в центре */
            width: 500px;
            height: 300px;
            margin: 0 auto;
        }
    </style>
    
    <div id="piechart"></div>
   
</body>
</html>
