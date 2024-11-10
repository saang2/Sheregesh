
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
    <h1 class="zagl">Процент исполнения стратегии горнолыжного курорта “Шерегеш”</h1>
    
    <div class="col-xs-12 text-center">
        <h2>Donut Chart</h2>
    </div>
 
    <div id="donut-chart"></div>
 
    <script>
        let chart = bb.generate({
            data: {
                columns: [
                    ["Blue", 2],
                    ["orange", 4],
                    ["green", 3],
                ],
                type: "donut",
                onclick: function (d, i) {
                    console.log("onclick", d, i);
                },
                onover: function (d, i) {
                    console.log("onover", d, i);
                },
                onout: function (d, i) {
                    console.log("onout", d, i);
                },
            },
            donut: {
                title: "70",
            },
            bindto: "#donut-chart",
        });
    </script>
    

   
</body>
</html>
