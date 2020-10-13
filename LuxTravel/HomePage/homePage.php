<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    $timestamp = date("YmdHis"); ?>
    <link rel="stylesheet" href="homePage.css?v=<?=$timestamp?>">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Oswald&display=swap" rel="stylesheet">
    <title>Главная</title>
</head>
<body>
    <div id = "header">
        <h1> LUX TRAVEL</h1>
    </div>
    <div id = "navBar">
        <button id = "aboutUs" class = "navBarIcon"> О КОМПАНИИ</button>
        <button id = "offices" class = "navBarIcon"> ОФИСЫ </button>
        <button id = "contacts" class = "navBarIcon">КОНТАКТЫ</button>
    </div>
    <div id = "countries">
        <?php 
        $countries = array( 
            array( 
                "title" => "Elementary, Watson",
                "flag" => "https://upload.wikimedia.org/wikipedia/commons/a/ae/Flag_of_the_United_Kingdom.svg",
                "description" => "Лондон притягивает туристов как магнит. Каждый хочет своими глазами увидеть красный даблдекер, красную же телефонную будку, гвардейца Её Величества в медвежьей шапке, восковые куклы Мадам Тюссо, Тауэр и Биг-Бен — то, о чем говорили на школьных уроках английского под общим заголовком “London is the capital of Great Britain”."
                ),
            array(
                "title" => "Bonjour, mon ami",
                "flag" => "https://upload.wikimedia.org/wikipedia/commons/c/c3/Flag_of_France.svg",
                "description" => "В Париже можно насладиться изысканным кофе с круассанами, посмотреть знаменитые выставки художников-импрессионистов, прогуляться по Монмартру, сфотографироваться на фоне Эйфелевой башни.На южном побережье всех отдыхающих ждут великолепные пляжи с ласковым солнцем. Горнолыжные курорты – это святое место для любителей активного отдыха."
            ),
            array(
                "title" => "Guten Morgen, Monsieur",
                "flag" => "https://upload.wikimedia.org/wikipedia/commons/b/ba/Flag_of_Germany.svg",
                "description" => "Германия — популярное направление среди туристов: здесь красивая и разнообразная природа, множество объектов культурного наследия, архитектурных и исторических памятников. Одно из сокровищ страны — ее замки. Большой выбор экскурсионных туров в Германию позволит даже самому подготовленному туристу узнать что-то новое и интересное о стране"
                )
            );
        for($i = 0; $i< count($countries); $i++) {?>
        <div class = "country">
            <h2><?= $countries[$i]["title"]?></h2>
            <img src=<?= $countries[$i]["flag"]?>>
            <p><?= $countries[$i]["description"]?></p>
            <form method = "post">
            <input type="submit" value = "ПОДРОБНЕЕ" name = <?=$i?>>
            </form>
        </div>
        <?php }?>
    </div>
    <div>
        <button id = "all" class = "navigationButton"> ВСЕ ПРЕДЛОЖЕНИЯ </button>
    </div>
    <br><br><br><br>
    <script type="text/javascript">
    document.getElementById("aboutUs").onclick = function () {
        location.href = "../AboutUs/aboutUs.php";
    };
    document.getElementById("all").onclick = function () {
        location.href = "../All/all.php";
    };
    document.getElementById("offices").onclick = function () {
        location.href = "../Offices/offices.php";
    };
    document.getElementById("contacts").onclick = function () {
        location.href = "../Contacts/contacts.php";
    };
    </script>
    <?php 
    for($i = 0; $i < count($countries);$i++) {
        if(isset($_POST[$i])) { ?>
        <script>
            location.href = "../Country/country.php?index=<?= $i?>";
        </script>
        }
    <?php break;
        }
    } ?>
</body>
</html>