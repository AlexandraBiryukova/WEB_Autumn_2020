<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $F = 65;
        $R = 5;
        $PI = 3.14159;

        $x1 = 2;
        $y1 = 3;
        $x2 = 4;
        $y2 = 5;

        $S = 7264;

        $euro = 100;
        $cost = 65;

        $difference = $euro - $cost;
        $array = array(50, 20, 10, 5, 2, 1);
        $result = array(0, 0, 0, 0, 0, 0);
        $value = 0;
        if ($difference > 0) {
            for ($i = 0 ;$i < count($array); $i++) {
             $result[$i] = (int)(($difference - $value)/$array[$i]);
                $value += $result[$i] * $array[$i];
            }
        }
    ?>
    <h1>Exercise 1 </h1>
    <p> 1. x = <?= 7 + 3*6/2 -1?></p>
    <p> 2. x = <?= 3 * 9 *(3+(4*5/3))?></p>
    <p> 3. x = <?= (12.0 + 2/5 * 10.0)?></p>
    <p> 4. x = <?= (2/5 + 10.0*3 - 2.5)?></p>

    <h1>Exercise 2 </h1>
    <p> C = <?= (5/9) * ($F - 32)?></p>

    <h1>Exercise 3 </h1>
    <p> D = <?= 2 * $R ?> </p>
    <p> C = <?= 2 * $R * $PI ?></p>
    <p> S = <?= pow($R, 2) * $PI ?></p>

    <h1>Exercise 4 </h1>
    <p> <?= sqrt(pow($x2 - $x1, 2) + pow($y2-$y1, 2))?></p>

    <h1>Exercise 5 </h1>
    <p> H: <?= (int)($S/3600)?> M: <?=(int)($S%3600/60)?> S: <?= $S%3600%60?></p>

    <h1>Exercise 6 </h1>
    <?php for($i = 0; $i < count($array); $i++) { ?>
        <p> Number of <?= $array[$i] ?> cent coins : <?= $result[$i] ?> </p>
    <?php }?>
</body>
</html>