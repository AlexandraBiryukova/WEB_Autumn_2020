<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $PI = 3.14159;
    ?>
    <h1>Exercise 2 </h1>
    <form>
    <input type = "number" name = "F">
    <input type = "submit" value = "Calculate">
    </form>
    <?php if (isset($_GET["F"])){  ?> 
        <p> C = <?= (5/9) * ($_GET["F"]- 32)?></p>
    <?php }?>

    <h1>Exercise 3 </h1>
    <form>
    <input type = "number" name = "R">
    <input type = "submit" value = "Calculate">
    </form>
    <?php if (isset($_GET["R"])){  ?> 
        <p> D = <?= 2 * $_GET["R"]?> </p>
        <p> C = <?= 2 * $_GET["R"] * $PI?></p>
        <p> S = <?= pow($_GET["R"], 2) * $PI?></p>
    <?php }?>
    <h1>Exercise 5 </h1>
    <form>
    <input type = "number" name = "S">
    <input type = "submit" value = "Calculate">
    </form>
    <?php if (isset($_GET["S"])){  ?> 
        <p> H: <?= (int)($_GET["S"]/3600)?> M: <?=(int)($_GET["S"]%3600/60)?> S: <?= $_GET["S"]%3600%60?></p>
    <?php }?>
    <h1>Exercise 6 </h1>
    <form>
    <label for = "euro"> Cents </label>
    <br>
    <input id = "euro" type = "number" name = "euro" min = 1 max = 100>
    <br>
    <label for = "cost"> Cost </label>
    <br>
    <input id = "cost" type = "number" name = "cost">
    <br>
    <input type = "submit" value = "Calculate">
    </form>
    <?php 
     $array = array(50, 20, 10, 5, 2, 1);
     $result = array(0, 0, 0, 0, 0, 0);
     $value = 0;
     if (isset($_GET["euro"]) && isset($_GET["cost"])){
        $difference = (int)$_GET["euro"]- (int)$_GET["cost"];
        if ($difference > 0) {
            for ($i = 0 ;$i < count($array); $i++) {
                $result[$i] = (int)(($difference - $value)/$array[$i]);
                $value += $result[$i] * $array[$i];
            }
        }
        for($i = 0; $i < count($array); $i++) { ?>
            <p> Number of <?= $array[$i] ?> cent coins : <?= $result[$i] ?> </p>
    <?php }}?>
</body>
</html>