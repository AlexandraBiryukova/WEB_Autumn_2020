<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    $timestamp = date("YmdHis"); ?>
    <link rel="stylesheet" href="aboutUs.css?v=<?$timestamp?>">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Oswald&display=swap" rel="stylesheet">

    <title>О нас</title>
</head>
<body>
    <div id = "header">
        <h1> LUX TRAVEL</h1>
    </div>
    <div id = "slogan">
        <hr>
        <hr>
        <h2> Путь длиной в тысячи миль начинается с одного клика </h2>
        <hr>
        <hr>
    </div>
    <div id = "description">
        <p>«LuxTravel» — турагентство, готовое помочь Вам с выбором и оформлением путешествия на любой вкус и уровень дохода. 
            Мы задумывались как высокотехнологичное агентство, уровню которого мы всячески стараемся соответствовать. 
            На нашем сайте вы сможете:
        </p>
        <ul>
            <li>найти самую подробную информацию по странам</li>
            <li>подобрать морской круиз</li>
            <li>подписаться на рассылку горящих туров</li>
            <li>заказать подбор тура опытным менеджером</li>
            <li>посмотреть отзывы отдыхающих о любом отеле</li>
        </ul>
        <p>На сегодняшний день турфирма «LuxTravel» занимает одно из лидирующих мест среди турагентств Казахстана. 
            Турагентство «LuxTravel» помогает беспристрастно, опираясь только на Ваши пожелания и финансовые возможности, подобрать подходящий именно Вам тур. 
            Нам важнее всего, чтобы клиент остался доволен, а не «лишь бы продать то, что есть».
            <br><br>
            Мы всегда предоставляем своим клиентам полную и объективную информацию о странах, туры в которые реализуем: Турции, Египте, Греции, Канарах, Мальдивах, Китае, Таиланде, Шри-Ланке и других. 
            Туристическое агентство «LuxTravel» всегда аккуратно и в срок оформляет все необходимые документы, включая страховку. Нам важно, чтобы Вы получали удовольствие от наших услуг и обращались к нам и далее!
        </p>
        <h2>К тому же...</h2>
        <p>Туристическая фирма – это не просто посредник между туроператором и клиентом, задача которой – получить деньги и передать необходимые документы. 
            Она избавит Вас от лишних хлопот, временных затрат и возьмет на себя многие важные обязательства. 
            Турагентство «LuxTravel» – является гарантом Вашей безопасности и комфорта во время полета в обе стороны, в аэропорту по прибытии, в процессе заселения и проживания в отеле и, вообще, на протяжении всего отдыха.
            <br><br>
            Тут у Вас может возникнуть еще один вопрос по поводу того, почему бы сразу не купить путевку у туроператора, чтобы не переплачивать. 
            Отвечаем: большинство туроператоров предоставляют комиссию только агентствам, поэтому приобрести дешевле, скорее всего, не получится. 
            Тем более что большинство операторов не работают напрямую с физическими лицами, для них важно получить сразу большое количество клиентов, через турагенства. 
            А вот за счет этого агентства получают бонусные скидки, а соответственно, и их клиенты, то есть – Вы, тоже!
            <br><br>
            Обращайтесь в турагентство «LuxTravel»!
        </p>

    </div>
    <div id = "socialNetworks">
        <?php 
        $socialNetworks = array( 
            array( 
                "icon" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/600px-Instagram_icon.png",
                "url" => "https://www.instagram.com/?hl=ru",
                ),
            array( 
                "icon" => "https://fiesta-prazdnik.com/wp-content/uploads/2013/02/Apps-Facebook-icon.png",
                "url" => "https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwi9voqAsqzsAhXFAKIDHTWgDoAYABAAGgJsZQ&ae=2&ohost=www.google.com&cid=CAESQOD2IF-nGH27a6TIZSIiCfkEIZ62x4foHXzLg9WvJCDzJtrgfmjdhlJcad_na0uu_NSLKU28dFTyH6idiEoqqsw&sig=AOD64_1nESDtupitV1J2jWnQOq5wOEq3Mw&q&adurl&ved=2ahUKEwi4w4KAsqzsAhVllosKHYlSByMQ0Qx6BAgqEAE",
                ),
            array( 
                    "icon" => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/WhatsApp_logo-color-vertical.svg/600px-WhatsApp_logo-color-vertical.svg.png",
                    "url" => "https://www.whatsapp.com/?lang=ru",
            ),
            array( 
                "icon" => "https://cdn.worldvectorlogo.com/logos/vk-1.svg",
                "url" => "https://vk.com/",
                ),
            );
        for($i = 0; $i< count($socialNetworks); $i++) {?>
            <a href="<?= $socialNetworks[$i]["url"]?>" target="blank"><img id = "SN<?=$i?>" class = "socialNetwork" src=<?= $socialNetworks[$i]["icon"]?>></a>
        <?php }?>
    </div>
   
</body>
</html>