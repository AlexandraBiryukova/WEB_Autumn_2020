<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    $timestamp = date("YmdHis"); ?>
    <link rel="stylesheet" href="success.css?v=<?=$timestamp?>">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Oswald&display=swap" rel="stylesheet">
    <title>Контакты</title>
</head>
<body>
    <div id = "header">
        <h1> LUX TRAVEL</h1>
    </div>
    <div id = "success">
        <img src="https://www.suunto.com/contentassets/b1199e5391ab4cfd8389de9ceb0c9ae5/icon-success.png">
        <h2>Запрос успешно отправлен!<br>В скором времени мы с Вами свяжемся</h2>
    </div>
    <script>
        document.getElementById("success").onclick = function () {
        location.href = "../HomePage/homePage.php";
    };
    </script>
</body>
</html>