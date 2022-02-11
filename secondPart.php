<?php

function eleven(){
    $sum = 0;
    while(!($sum >= 150)){
        $randNum = rand(1,10);
        $sum += $randNum;
        echo $randNum.' ';
    }
    echo "<br>Atsitiktiniu skaiciu galutine suma $sum";
}

function twelve(){
    $sum = 0;
    $count = 0;
    while(!($sum >= 120)){
        $randNum = rand(1,10);
        $sum += $randNum;
        $count++;

        echo $randNum.' ';
    }
    echo "<br>Atsitiktiniu skaiciu galutine suma $sum <br>";
    echo "Is viso sugeneruota skaiciu - $count";
}

function thirteen(){
    $sum = 0;
    $max = 0;
    $min = 16;
    while(!($sum >= 175)){
        $randNum = rand(1,15);
        $sum += $randNum;
        echo $randNum.' ';

        //didziausias skaicius
        if ($randNum > $max) {
            $max = $randNum;
        }
        // //maziausias skaicius
        if ($randNum < $min) {
            $min = $randNum;
        }
    }
    echo "<br>Atsitiktiniu skaiciu galutine suma $sum <br>";
    echo "Didziausias skaicius yra $max, o maziausias  - $min";
}

function fourteen(){
    $sum = 0;
    $count = 0;
    while(!($sum >= 200)){
        $randNum = rand(1,15);
        $sum += $randNum;
        $count++;
        echo $randNum.' ';
    }
    
    $avg = $sum/$count;

    echo "<br>Atsitiktiniu skaiciu galutine suma $sum <br>";
    echo "Is viso sugeneruota skaiciu buvo $count, o bendras skaiciu vidurkis yra $avg";
}

function fifteen(){
    $numbers = array();
    for ($i=0; $i < 100; $i++) { 
        array_push($numbers, $i+1);
    }
    var_dump($numbers);
}

function sixteen(){
    $numbers = array();
    for ($i=0; $i < 100; $i++) { 
        array_push($numbers, rand(10,25));
    }
    var_dump($numbers);
}

function seventeen(){
    $numbers = array();
    for ($i=0; $i < rand(40,60); $i++) { 
        array_push($numbers, $i+1);
    }
    var_dump($numbers);
}

function eighteen(){
    $numbers = array();
    for ($i=0; $i < rand(80,120); $i++) { 
        array_push($numbers, rand(5,47));
    }
    var_dump($numbers);
}

function nineteen(){
    $lettersArray = array();
    $letters = ['D','E','F','G','H'];
    for ($i=0; $i < 100; $i++) { 
        array_push($lettersArray, $letters[array_rand($letters)]);
    }
    var_dump($lettersArray);
}

function twenty(){
    $lettersArray = array();
    $letters = ['M','N','O','P'];

    $m = 0;
    $n = 0;
    $o = 0;
    $p = 0;

    for ($i=0; $i < 100; $i++) { 
        array_push($lettersArray, $letters[array_rand($letters)]);
    }

    var_dump($lettersArray);
    echo '<br>';

    foreach($lettersArray as $letter){
        if($letter == 'M'){
            $m++;
        }
        elseif($letter == 'N'){
            $n++;
        }
        elseif($letter == 'O'){
            $o++;
        }
        elseif($letter == 'P'){
            $p++;
        }
    }

    echo "<br> M raidziu - $m, N raidziu - $n, O raidziu - $o, P raidziu - $p<br>";

    if($m > $n && $m > $o && $m > $p){
        echo "Daugiausia kartų sugeneruota buvo M raidė. Sugeneruota - $m";
    }
    elseif($n > $m && $n > $o && $n > $p){
        echo "Daugiausia kartų sugeneruota buvo N raidė. Sugeneruota - $n";
    }
    elseif($o > $m && $o > $n && $o > $p){
        echo "Daugiausia kartų sugeneruota buvo O raidė. Sugeneruota - $o";
    }
    elseif($p > $m && $p > $n && $p > $o){
        echo "Daugiausia kartų sugeneruota buvo P raidė. Sugeneruota - $p";
    }

}

function bonus(){
    $lettersArray = array();
    $letters = ['M','N','O','P'];

    for ($i=0; $i < 100; $i++) { 
        array_push($lettersArray, $letters[array_rand($letters)]);
    }

    var_dump($lettersArray);
    echo '<br>';

    $lettersCount = array_count_values($lettersArray);
    $mostFrequent = array_search(max($lettersCount), $lettersCount);
    echo '<br> M raidziu - '.$lettersCount['M'].', N raidziu -'.$lettersCount['N'].', O raidziu -'.$lettersCount['O'].', P raidziu - '.$lettersCount['P'].'<br>';
    echo 'Daugiausia kartų sugeneruota buvo '.$mostFrequent.' raidė. Sugeneruota - '.max($lettersCount);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Part</title>
</head>
<body>

<h1>11 užduotis</h1>
<div><?php echo eleven();?></div>

<h1>12 užduotis</h1>
<div><?php echo twelve();?></div>

<h1>13 užduotis</h1>
<div><?php echo thirteen();?></div>

<h1>14 užduotis</h1>
<div><?php echo fourteen();?></div>

<h1>15 užduotis</h1>
<div><?php echo fifteen();?></div>

<h1>16 užduotis</h1>
<div><?php echo sixteen();?></div>

<h1>17 užduotis</h1>
<div><?php echo seventeen();?></div>

<h1>18 užduotis</h1>
<div><?php echo eighteen();?></div>

<h1>19 užduotis</h1>
<div><?php echo nineteen();?></div>

<h1>20 užduotis</h1>
<div><?php echo twenty();?></div>

<h1>20 užduotis - greitesnis būdas</h1>
<div><?php echo bonus();?></div>


</body>
</html>