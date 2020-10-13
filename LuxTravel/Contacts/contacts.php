<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    $timestamp = date("YmdHis"); ?>
    <link rel="stylesheet" href="contacts.css?v=<?=$timestamp?>">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Oswald&display=swap" rel="stylesheet">
    <title>Контакты</title>
</head>
<body>
    <?php 
    $name = isset($_REQUEST["name"]) ? $_REQUEST["name"] : "";
    $email = isset($_REQUEST["email"]) ? $_REQUEST["email"] : "";   
    $tel = isset($_REQUEST["tel"]) ? $_REQUEST["tel"] : "";   
    $startDate = isset($_REQUEST["startDate"]) ? $_REQUEST["startDate"] : "";   
    $endDate = isset($_REQUEST["endDate"]) ? $_REQUEST["endDate"] : "";     
        if ( isset($_POST['submit'])) { 
            if (!empty($_REQUEST["name"]) && !empty($_REQUEST["tel"]) && !empty($_REQUEST["email"]) &&!empty($_REQUEST["startDate"]) && !empty($_REQUEST["endDate"])) {?>
            <script>
                location.href = "../Success/success.php";
            </script>
    <?php }
    }?>
    <div id = "header">
        <h1> LUX TRAVEL</h1>
        <a href = "mailto:luxtravel@gmail.com"><button>Напишите нам</button></a>
    </div>
    <div id = "or">
        <h2>ИЛИ</h2>
    </div>
    <div id = "form">
        <form method="post" action="">
            <p>ВАШ ЗАПРОС</p>
            <input name = "name" type = "text" placeholder="ФИО" value=<?=$name?>>
            <input name = "email" type = "email" placeholder="Aдрес электронной почты" value=<?=$email?>>
            <input name = "tel" type = "tel" placeholder="Номер телефона" value=<?=$tel?>>
            <div>
                <p>Срок поездки:</p>
                <label>с</label>
                <input name = "startDate" type = "date" value=<?=$startDate?>>
                <label>до</label>
                <input name = "endDate" type = "date" value=<?=$endDate?>>
            </div>
            <div>
            <label style="font-weight: bold;">Количестов людей:</label>
            <input type = "number" min = 1 max = 10 value = 1 name = "number">
            </div>
            <div>
            <p id = "cost">Цена поездки: 500 000 тг</p>
            <input style = "width: 90%; padding: 0px;" type = "range" min = 100000 max = 1000000 onchange="updateTextInput(this.value);">
            <p></p>
            </div>
            <p>Дополнительно:</p>
            <textarea placeholder="Ищу..." rows = 5></textarea>
            <div class = "buttons">
            <input type = "reset" value = "Очистить">
            <input name = "submit" type = "submit" value = "Отправить">
            </div>
        </form>
        <br><br>
    </div>
    <script>
        function updateTextInput(val) {
            document.getElementById('cost').innerHTML= "Цена поездки: " + val + "тг"; 
        }
    </script>
</body>
</html>