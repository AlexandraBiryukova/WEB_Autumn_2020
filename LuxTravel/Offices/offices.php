<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    $timestamp = date("YmdHis"); ?>
    <link rel="stylesheet" href="offices.css?v=<?=$timestamp?>">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Oswald&display=swap" rel="stylesheet">

    <title>Офисы</title>
</head>
<body>
    <div id = "header">
        <h1> LUX TRAVEL</h1>
        <h5>ОФИСЫ</h5>
    </div>
    <div id = "table">
        <table>
            <tr>
                <th>ГОРОД</th>
                <th>АДРЕС</th>
                <th>ТЕЛЕФОН</th>
                <th>ГРАФИК РАБОТЫ</th>
            </tr>

            <tr>
                <td  class = "city" rowspan="3">Алматы</td>
                <td>Аль-Фараби проспект, 7 к5а​1 этаж; 101 офис Бостандыкский район, Алматы, 050059/A15E3B3</td>
                <td>+7 701 234 23 31</td>
                <td rowspan="3"> 9:00 - 16:00 </td>
            </tr>
            <tr>
                <td>Аль-Фараби проспект, 23 к5а​1 этаж; Алматы, 050059/A15E3B3</td>
                <td>+7 701 234 23 32</td>  
            </tr>
            <tr>
                <td>Аль-Фараби проспект 101 офис Бостандыкский район, Алматы, 050059/A15E3B3</td>
                <td>+7 701 234 23 33</td>
            </tr>

            <tr>
                <td class = "city" rowspan="2">Нур-Султан</td>
                <td>пр. Богенбай батыра, 46, 7 к5а​1 этаж; Нур-Султан, 050059/A15E3B3</td>
                <td>+7 701 567 56 54</td>
                <td rowspan="2"> 9:00 - 18:00 </td>
            </tr>
            <tr>
                <td>пр. Богенбай батыра, 46, 435 к5а​1 этаж; Нур-Султан, 050059/A15E3B3</td>
                <td>+7 701 567 56 56</td>
            </tr>
            <tr>
                <td class = "city" rowspan="2">Талдыкорган</td>
                <td>пр. Достык, 123, 9 к5а​1 этаж; Талдыкорган, 050059/A15E3B3</td>
                <td>+7 701 876 77 77</td>
                <td rowspan="2"> 10:00 - 20:00 </td>
            </tr>
        </table>
    </div>
   
</body>
</html>