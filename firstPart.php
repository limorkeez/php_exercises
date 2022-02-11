<?php

function pirma(){
    for ($i=0; $i < 4; $i++) { 
        echo rand(0,100).' ';
    }
}

function antra(){
    for ($i=0; $i < 4; $i++) { 
        $randNum = rand(0,100);
        echo $randNum.' ';
        if ($randNum % 2 != 0) {
            echo 'Skaičius nelyginis. Didinam dvigubai - '.($randNum*2);
        }
        echo '<br>';
    }
}

function trecia(){
    $week = ['Pirmadienis', 'Antradienis', 'Trečiadienis', 'Ketvirtadienis', 'Penktadienis', 'Šeštadienis', 'Sekmadienis'];
    $randomNumber = rand(1,7);
    echo 'Atsitiktinis skaičius '.$randomNumber.'. Atitinkama savaitės diena yra '.$week[$randomNumber-1];

}

function ketvirta(){
    $week = ['Pirmadienis', 'Antradienis', 'Trečiadienis', 'Ketvirtadienis', 'Penktadienis', 'Šeštadienis', 'Sekmadienis'];
    
    $randomNumber = rand(1,7);
    $day = $randomNumber-1;

    echo "Atsitiktinis skaičius $randomNumber <br>";
    
    if (($day) == 6 || ($day) == 7) {
        echo 'Šiandien yra '.$week[$day].' - savaitgalis';
    }
    else{
        echo 'Šiandien yra '.$week[$day].' - darbo diena';
    }
}

function penkta(){
    for ($i=0; $i < 4; $i++) { 
        $randomNum = rand(1,100);
        if ($randomNum % 3 == 0) {
            echo "<span style='color: green;'>$randomNum</span><br>";
        }
        elseif ($randomNum % 3 == 1) {
            echo "<span style='color: gold;'>$randomNum</span><br>";
        }
        elseif ($randomNum % 3 == 2) {
            echo "<span style='color: red;'>$randomNum</span><br>";
        }
        else{
            echo "<span>$randomNum</span><br>";
        }
    }
}

function sesta(){
    for ($i=0; $i <= 100; $i++) { 
        echo $i.'<br>';
    }
}

function septinta(){
    for ($i=2; $i <= 200; $i += 2) { 
        echo $i.'<br>';
    }
}

function astunta(){
    for ($i=2; $i <= 200; $i += 2) { 
        if ($i % 6 == 0) {
            echo "<span style='color:blue;'>$i</span><br>";
        }else{
            echo "<span>$i</span><br>";
        }
    }
}

function devinta(){
    $randomNumber = rand(1,50);
    while($randomNumber % 5 == 0){
        echo $randomNumber.' ';
        $randomNumber = rand(1,50);
    }
    echo $randomNumber;
}

function desimta(){
    $randomNumber = rand(1,100);
    while(($randomNumber % 5 == 0) || ($randomNumber % 11 == 0)){
        echo $randomNumber.' ';
        $randomNumber = rand(1,100);
    }
    echo $randomNumber;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Part</title>
</head>
<body>

<h1>1 užduotis</h1>
<div><?php echo pirma();?></div>

<h1>2 užduotis</h1>
<div><?php echo antra();?></div>

<h1>3 užduotis</h1>
<div><?php echo trecia();?></div>

<h1>4 užduotis</h1>
<div><?php echo ketvirta();?></div>

<h1>5 užduotis</h1>
<div><?php echo penkta();?></div>

<h1>6 užduotis</h1>
<div><?php echo sesta();?></div>

<h1>7 užduotis</h1>
<div><?php echo septinta();?></div>

<h1>8 užduotis</h1>
<div><?php echo astunta();?></div>

<h1>9 užduotis</h1>
<div><?php echo devinta();?></div>

<h1>10 užduotis</h1>
<div><?php echo desimta();?></div>


</body>
</html>