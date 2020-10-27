<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab7</title>
</head>
<body>
<h1> Exercise 1 </h1>
<?php 
function exercise_1($x, $number) 
{ 
 switch ($number) {
    case 1:
        if ($x >= 5) {
            return 5*pow($x, 2)+6;
        } else if ($x > -2 && $x < 5) {
            return pow($x, 3) + 7;
        }
    break;
    case 2:
        if ($x >= 0) {
            return 5*$x;
        } else if ($x > -3 && $x < 0) {
            return pow($x, 4)*3 + 9;
        }
    break;
    case 3:
        if ($x >= 2.5) {
            return 3*pow($x, 3)+5;
        } else if ($x >= 1.5 && $x < 2.5) {
            return pow($x, 3) + $x;
        } else if ($x < 1.5) {
            return $x;
        }
    break;
    case 4:
        if ($x >= 1.22) {
            return 5*pow($x, 3)+1.7;
        } else if ($x < 1.22) {
            return $x;
        }
    break;
    case 5:
        if ($x >= 2) {
            return 3*pow($x, 4)+7;
        } else if ($x > 0 && $x < 2) {
            return pow($x, 3);
        } else if ($x > 5 && $x <=9) {
            return $x;
        }
    break;
    case 6:
        if ($x >= 2.5) {
            return 3*pow($x, 3)+5;
        } else if ($x >= 1.5 && $x < 2.5) {
            return pow($x, 3);
        } else if ( $x < 1.5) {
            return $x;
        }
    break;
 }

} 
function exercise_2($x, $number, $exNumber)
{ 
    switch ($exNumber) {
        case 1:
            $sum = 0;
            for($i = 1; $i <= $number;$i++) {
                $sum += pow($x, $i)/2;
            }
            return $sum;
        break;
        case 2:
            $multiplication = 1;
            for($i = 1; $i <= $number;$i++) {
                $multiplication *= 1 + ($i*$x)/3;
            }
            return $multiplication;
        break;
    }
}
function exercise_3($exNumber) {
    switch ($exNumber) {
        case 1:
            $numbers = rand_array(10);
            return sum_of_pos($numbers);
        break;
        case 2:
            $numbers = rand_array(20);
            $result = max_min($numbers);
            return "MAX: $result[0] ($result[1]) MIN: $result[2] ($result[3])";
        break;
        case 3:
            $numbers = rand_array(15);
            $min = $numbers[1];
            for ($i = 1; $i < count($numbers); $i+=2) {
                if ($numbers[$i] < $min ) {
                    $min = $numbers[$i];
                }
            }
            return $min;
        break;
        case 4:
            $numbers = rand_array(30);
            $sum = 0;
            $result = max_min($numbers);
            return sum_of_between($numbers, $result[3], $result[1]);
        break;
        case 5:
            $numbers = rand_array(15);
            if (in_array(5, $numbers)) {
                return sum_of_pos($numbers);
            }
            return "NONE";
        break;
        case 6:
            $numbers = rand_array(12);
            $sum = 0;
            for ($i = 0; $i < count($numbers); $i++) {
                if ($numbers[$i] < 0 ) {
                    $sum += $numbers[$i];
                }
            }
            return $sum;
        break;
        case 7:
            $numbers = rand_array(20);
            $result = max_min($numbers);
            return "$result[0] ($result[1])";
        break;
        case 8:
            $numbers = rand_array(18);
            $min = $numbers[1];
            for ($i = 1; $i < count($numbers); $i+=2) {
                if ($numbers[$i] < $min ) {
                    $min = $numbers[$i];
                }
            }
            return $min;
        break;
        case 9:
            $numbers = rand_array(7);
            $sum = 0;
            $result = max_min($numbers);
            for ($i = max($result[3] - 1, 0); $i < $result[1] - 1; $i++) {
                if ($numbers[$i] > 0) {
                    $sum += $numbers[$i];
                }
            }
            return $sum;
        break;
        case 10:
            $numbers = rand_array(14);
            if (in_array(7, $numbers)) {
                return sum_of_pos($numbers);
            }
            return "NONE";
        break;
        case 11:
            $numbers = rand_array(20);
            $result = max_min($numbers);
            return "MAX: $result[0] ($result[1]) MIN: $result[2] ($result[3])";
        break;
        case 12:
            $numbers = rand_array(15);
            $max = $numbers[1];
            for ($i = 1; $i < count($numbers); $i+=2) {
                if ($numbers[$i] > $max ) {
                    $max = $numbers[$i];
                }
            }
            return $max;
        break;
    }
}

function rand_array($number) {
    $numbers = array(); 
    for($i = 0; $i < $number;$i++) {
        $numbers[$i] = rand(-100, 100);
        print("$numbers[$i]\n");
    }
    print("<br>");
    return $numbers;
}
function sum_of_pos($numbers) {
    $sum = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] > 0 ) {
            $sum += $numbers[$i];
        }
    }
    return $sum;
}
function max_min($numbers) {
    $min = $numbers[0];
    $minIndex = 0;
    $max = $numbers[0];
    $maxIndex = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] > $max ) {
            $max = $numbers[$i];
            $maxIndex = $i + 1;
        }
        if ($numbers[$i] < $min) {
            $min = $numbers[$i];
            $minIndex = $i + 1;
        }
    }
    return array($max, $maxIndex, $min, $minIndex);
}
function sum_of_between($numbers, $start, $end) {
    $sum = 0;
    for ($i = max(0, $start); $i < $end - 1; $i++) {
        $sum += $numbers[$i];
    }
    return $sum;
}

$x = 5;
for ($i = 1; $i < 7 ; $i++) {
    print("Exercise $i: ");
    print(exercise_1($x, $i));
    ?>
    <br>
<?php } ?> 
<br>
<h1> Exercise 2 </h1>
<?php
for ($i = 1; $i < 3 ; $i++) {
    print("Exercise $i: ");
    print(exercise_2($x, $x, $i));
    ?>
    <br>
<?php }?>
<h1> Exercise 3 </h1>
<?php
for ($i = 1; $i < 12 ; $i++) {
    print("Exercise $i: ");
    print(exercise_3($i));
    ?>
    <br>
<?php }?>
</body>
</html>