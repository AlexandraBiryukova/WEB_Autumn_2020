<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $timestamp = date("YmdHis");?>
    <link rel="stylesheet" href="allCountries.css?v=<?=$timestamp?>">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Oswald&display=swap" rel="stylesheet">
    <title>Наши предложения </title>
</head>
<body>
    <div id = "header">
        <h1> LUX TRAVEL</h1>
    </div>
    <div id = "search">
        <form>
            <input value = "<?= isset($_GET["searchText"]) ? $_GET["searchText"]: ""?>" name = "searchText" type = "text" placeholder="Поиск"><input type = "submit" value="Найти">
        </form>
    </div>
    <div id = "countries">
        <?php 
        $allCountries = array( 
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
                ),
            array(
                    "title" => "Hoşgeldiniz!",
                    "flag" => "https://upload.wikimedia.org/wikipedia/commons/b/b4/Flag_of_Turkey.svg",
                    "description" => "Туры в Турцию из Алматы занимают лидирующие позиции среди огромного количества летних туристических направлений. Турция – это ласковое море, прекрасные пляжи, высококлассный сервис, увлекательный шопинг, уникальные достопримечательности и великолепная национальная кухня. Турция славится своей богатейшей историей, культурными ценностями, древними реликвиями и роскошной природой. "
            ),
            array(
                "title" => "Ciao!",
                "flag" => "https://upload.wikimedia.org/wikipedia/commons/0/03/Flag_of_Italy.svg",
                "description" => "Именно в Италии сосредоточены основные составляющие культурного наследия Европы, поэтому ее смело можно назвать страной-музеем исторических ценностей. Но музеи – только хранители памяти о прошлом, а Италия обладает живой культурой, уникальной историей и яркими традициями. Здесь каждый может выбрать для себя отдых по своему вкусу."
            ),
            array(
                "title" => "Gracias",
                "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/1200px-Flag_of_Spain.svg.png",
                "description" => "Испания – солнечная и гостеприимная страна, которая заставляет туристов всего мира возвращаться вновь и вновь на свои белоснежные песочные берега с лазурным морем и мягким средиземноморским климатом. Отдых в Испании – это зажигательная коррида, страстные Фламенко, причудливая архитектура Гауди и пламенная Севилья."
            ),
            array(
                "title" => "marhaba! مرحبا",
                "flag" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_United_Arab_Emirates.svg/1200px-Flag_of_the_United_Arab_Emirates.svg.png",
                "description" => "Отдых в ОАЭ очень полюбился нашим туристам и уже давно занимает одно из лидирующих мест на туристическом рынке Казахстана. Эмираты могут угодить практически любому туристу. Здесь есть всё, что нужно для отличного отдыха: великолепные пляжи и тёплое море, увлекательные экскурсии, спортивные развлечения, рестораны и дискотеки, выгодный шоппинг, отели на любой вкус и кошелек."
            ),
            array(
                "title" => "Dobrý den",
                "flag" => "https://upload.wikimedia.org/wikipedia/commons/c/cb/Flag_of_the_Czech_Republic.svg",
                "description" => "Такая колоритная и интереснейшая своими достопримечательностями страна, как Чехия всегда готова с радостью принимать туристов, которые ищут для себя значительно больше, чем обыкновенный пляжный отдых. В основном, отдых в Чехии может быть как оздоровительный, так и активный, в зависимости от того, какой именно курорт страны решит посетить турист."
            ),
            array(
                "title" => "Καλό βράδυ",
                "flag" => "https://upload.wikimedia.org/wikipedia/commons/5/5c/Flag_of_Greece.svg",
                "description" => "Греция – это страна олимпийских богов, родина мифов и легенд, сокровищница мировой культуры. Современная Греция считается одним из лучших курортов мира, привлекающим туристов с разных стран. Отдых в Греции – это гостеприимные местные жители, богатые традиции, живописные пляжи, комфортабельные отели и величественные памятники старины."
            ),
            );
            if (isset($_GET["searchText"]) && !empty($_GET["searchText"])) {
                $count = 0;
                $newcountries = array();
                for ($i = 0; $i < count($allCountries);$i++) {
                    if (!(strpos($allCountries[$i]["description"], $_GET["searchText"]) === false)) {
                        $newcountries[$count] = $allCountries[$i];
                        $count++;
                    }
                }
            } else {
                $newcountries = $allCountries;
            }
            for($i = 0; $i < count($newcountries); $i++) {?>
        <div class = "country">
            <h2><?= $newcountries[$i]["title"]?></h2>
            <img src=<?= $newcountries[$i]["flag"]?>>
            <p><?= $newcountries[$i]["description"]?></p>
            <form method = "post">
            <input type="submit" value = "ПОДРОБНЕЕ" name = <?=$i?>>
            </form>
        </div>
        <?php }?>
    </div>
    <?php 
    for($i = 0; $i < count($newcountries);$i++) {
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