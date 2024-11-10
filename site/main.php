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
            title: 'Развитие инфраструктуры',
            pieHole: 0.4,
            pieSliceText: 'none',
            colors: ['#7392FF',  '#9356A0'],
            
            legend: { position: 'bottom' }
        };
        var chart1 = new google.visualization.PieChart(document.getElementById('chart1'));
        chart1.draw(data1, options1);

        // Данные для второй диаграммы
        var data2 = google.visualization.arrayToDataTable([
            ['Объект', 'Процент уровня обеспечения инвесторов'],
            ['Процент выполненного плана', 65],
            ['Процент не выполненного плана', 35]
        ]);
        var options2 = {
            title: 'Турпоток',
            pieHole: 0.4, // Устанавливаем размер дырки в центре диаграммы
            pieSliceText: 'none', // Убираем проценты внутри сектора
            colors: ['#7392FF',  '#9356A0'],
            legend: { position: 'bottom' }
        };
        var chart2 = new google.visualization.PieChart(document.getElementById('chart2'));
        chart2.draw(data2, options2);

        // Данные для третьей диаграммы
        var data3 = google.visualization.arrayToDataTable([
            ['Инвестор', 'Процент'],
            ['Процент выполненного плана', 65],
            ['Процент не выполненного плана', 35]
        ]);
        var options3 = {
            title: 'Инвесторы',
            pieHole: 0.4, // Устанавливаем размер дырки в центре диаграммы
            pieSliceText: 'none', // Убираем проценты внутри сектора
            colors: ['#7392FF',  '#9356A0'],
            legend: { position: 'bottom' }
        };
        var chart3 = new google.visualization.PieChart(document.getElementById('chart3'));
        chart3.draw(data3, options3);

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
        var options5 = {
            title: 'Горнолыжные трассы',
            pieHole: 0.4,
            pieSliceText: 'none',
            colors: ['#7392FF',  '#9356A0'],
            legend: { position: 'bottom' }
        };
        var chart5 = new google.visualization.PieChart(document.getElementById('chart5'));
        chart5.draw(data5, options5);

        var data6 = google.visualization.arrayToDataTable([
            ['Категория', 'Количество'],
            ['Процент выполненного плана', 65],
            ['Процент не выполненного плана', 35]
        ]);
        var options6 = {
            title: 'Горнолыжные трассы',
            pieHole: 0.4,
            pieSliceText: 'none',
            colors: ['#7392FF',  '#9356A0'],
            legend: { position: 'bottom' }
        };
        var chart6 = new google.visualization.PieChart(document.getElementById('chart6'));
        chart6.draw(data6, options6);

        var data7 = google.visualization.arrayToDataTable([
            ['Категория', 'Количество'],
            ['Процент выполненного плана', 65],
            ['Процент не выполненного плана', 35]
        ]);
        var options7 = {
            title: 'Горнолыжные трассы',
            pieHole: 0.4,
            pieSliceText: 'none',
            colors: ['#7392FF',  '#9356A0'],
            legend: { position: 'bottom' }
        };
        var chart7 = new google.visualization.PieChart(document.getElementById('chart7'));
        chart7.draw(data7, options7);
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
                ['Месяц', 'Кол-во туристов'],
                ['Январь', 90000],
                ['Февраль', 75000],
                ['Март', 45000],
                ['Апрель', 74000],
                ['Май', 25000],
                ['Июнь', 60000],
                ['Июль', 65000],
                ['Август', 40000],
                ['Сентябрь', 50000],
                ['Октябрь', 10000],
                ['Ноябрь', 30000],
                ['Декабрь', 90000]
            ]);

            var options = {
                
                hAxis: {
                    
                    slantedText: true,
                    slantedTextAngle: 45,
                    textStyle: {fontSize: 10} // Размер шрифта названий месяцев
                },
                vAxis: {
                   
                    ticks: [0, 25000, 50000, 75000, 100000] // Изменены деления на вертикальной оси
                },
                colors: ['#5B9DFF', '#78AEFF','#95BFFF','#BCD7FF','#CFE2FF','#E7F1FF','#EBB5FE','#D285FF','#A866FF','#882DFF'], // Цвет колонок (голубой)
                legend: { position: 'none' } // Убираем легенду
                
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('oil'));
            chart.draw(data, options);
        }
    </script></div>
   <h2 class="h2zagl">Процент исполнения стратегии горнолыжного курорта “Шерегеш”</h2>
   <div class="charts-container">
   
        <div id="chart1" class="chart"></div>
        <div id="chart2" class="chart"></div>
        <div id="chart3" class="chart"></div>
        <div id="chart4" class="chart"></div>
        <img src="img/kart.png" alt="Карта Шерегеша" class="cart" height=300px>
        <br>
        
        <br>
    </div>
    <h2 class="h2zagl">Процент готовности объектов уровня ресурсов</h2>
    <div class="charts-container">
   
        <div id="chart5" class="chart"></div>
        <div id="chart6" class="chart"></div>
        <div id="chart7" class="chart"></div>
         <div id="oil" style="width: 850px; height: 320px;"></div>
    </div>
  
    <h3>Заголовок</h3>
   
   
</body>
</html>