<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercise 1</h1>
    <?php 
        $x = 5;
        $y = 1;
        $x++;
        $x+=1;
        $x = $x + 1;
        $x = $x + $y;
        print($x);
    ?>
    <h1>Exercise 2</h1>
    <form>
        <?php  for($i =0; $i< 10; $i++) {?>
        <input type = "number" name = "<?= $i?>" value = <?= isset($_GET[$i]) ? $_GET[$i] : 0?>><br>
        <?php } ?>
        <input type = "submit" value = "GetMax">
    </form>
    <?php 
        $array = array(0,0,0,0,0,0,0,0,0,0);
        for($i =0; $i< 10; $i++) {
            $array[$i] = isset($_GET[$i]) ? $_GET[$i] : 0;
        }
        $max = (int)$array[0];
        for($i = 0; $i < min(10, count($array)); $i++) {
            $max=max($max, (int)$array[$i]);
        }
        print("MAX $max");
    ?>
    <h1>Exercise 3</h1>
    <?php 
        $first = 0;
        $second = 1;
        while($first < 32767) {
            $prev = $first;
            $first = $first + $second;
            $second = $prev;
            print("$first\n");
        }
    ?>
    <br><br>
    <?php 
        $first = 0;
        $second = 1;
        for($i == 0; $i < INF; $i ++) {
            if ($first >= 32767) {
                break;
            }
            $prev = $first;
            $first = $first + $second;
            $second = $prev;
            print("$first\n");
        }
    ?>
    <h1>Exercise 4</h1>
    <form>
    <input type = "text" name = "expression" pattern = "[0-9]+[+-/%*][0-9]+">
    <input type = "submit" value = "Calculate">
    </form>
    <br>
    <?php 
        if (isset($_GET["expression"])) {
            $expression  = $_GET["expression"];
            
            $replaceString = preg_replace("/[%*+-\/]/", "*", $expression);
            $splitString = explode("*", $replaceString);
            $first = $splitString[0];
            $second = $splitString[1];
            $result = "ERROR";
            if (strstr($expression, "+")) {
                if (32767 > $first + $second) {
                  $result = $first + $second;
                }
            } else if (strstr($expression, "-")) {
                if (32767 < $first - $second) {
                    $result = $first - $second;
                }
            } else if (strstr($expression, "*")) {
                if (32767 > $first * $second) {
                    $result = $first * $second;
                }
            } else if (strstr($expression, "/")) {
                if ($second != 0) {
                    $result = $first / $second;
                }
            } else if (strstr($expression, "%")) {
                if ($second != 0) {
                    $result = $first % $second;
                }
            }
            print("$expression = $result");
        }
    ?>
</body>
</html>