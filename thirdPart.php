<?php

function twentyOne(){
    $arr = array();

    for ($i=0; $i < 100; $i++) { 
        for ($j=1; $j <= 10; $j++) { 
            $arr[$i][$j] = $j;
        }
    }

    //SPAUSDINAM
    foreach($arr as $innerArray){
        foreach($innerArray as $values){
            echo $values.' ';
        }
        echo '<br>';
    }

}

function twentyTwo(){
    $arr = array();

    for ($i=0; $i < 100; $i++) { 
        for ($j=1; $j <= 10; $j++) { 
            $arr[$i][$j] = rand(1,17);
        }
    }

    //SPAUSDINAM
    foreach($arr as $innerArray){
        foreach($innerArray as $values){
            echo $values.' ';
        }
        echo '<br>';
    }

}

function twentyThree(){
    $arr = array();

    for ($i=0; $i < 100; $i++) { 
        for ($j=1; $j <= rand(5,18); $j++) { 
            $arr[$i][$j] = rand(1,($i+1));
        }
    }

    //SPAUSDINAM
    foreach($arr as $innerArray){
        foreach($innerArray as $values){
            echo $values.' ';
        }
        echo '<br>';
    }

}

function twentyFour(){
    $arr = array();

    for ($i=0; $i < 100; $i++) { 
        for ($j=1; $j <= rand(5,18); $j++) { 
            $arr[$i][$j] = rand(5,30);
        }
    }

    //SPAUSDINAM
    foreach($arr as $innerArray){
        foreach($innerArray as $values){
            echo $values.' ';
        }
        echo '<br>';
    }

}

function twentyFive(){
    $arr = array();
    $maxOfInner = array();

    for ($i=0; $i < 100; $i++) { 
        for ($j=1; $j <= rand(5,18); $j++) { 
            $arr[$i][$j] = rand(5,75);
        }
    }

    foreach($arr as $innerArray){
        array_push($maxOfInner, max($innerArray));
    }

    echo 'Didžiausias skaičius visame didžiajame masyve yra: '.max($maxOfInner);


}

function twentySix(){
    $arr = array();
    $minValueArray = array();

    for ($i=0; $i < 100; $i++) { 
        for ($j=1; $j <= rand(5,18); $j++) { 
            $arr[$i][$j] = rand(5,75);
        }
    }


    foreach($arr as $innerArray){
        array_push($minValueArray, min($innerArray));
    }

    $minCount = 0;
    $minValue = min($minValueArray);

    foreach($minValueArray as $minVal){
        if($minVal == $minValue){
            $minCount++;
        }
    }

    echo 'Mažiausias skaičius visame masyve yra: '.$minValue.'<br>';
    echo 'Šis skaičius masyve sugeneruotas kartų: '.$minCount;


}

function twentySeven(){
    $arr = array();


    for ($i=0; $i < 100; $i++) { 
        for ($j=1; $j <= rand(5,18); $j++) { 
            $arr[$i][$j] = rand(1,17);
        }
        sort($arr[$i]);
    }

    //SPAUSDINAM
    foreach($arr as $innerArray){
        foreach($innerArray as $values){
            echo $values.' ';
        }
        echo '<br>';
    }
}

function twentyEight(){
    $arr = array();

    for ($i=0; $i < 100; $i++) { 
        for ($j=0; $j < 10; $j++) { 
            $arr[$i][$j] = rand(1,17);
        }
    }

    foreach($arr as $innerArray){
        foreach($innerArray as $values){
            echo $values.' ';
        }
        echo '<br>';
    }
    echo '<br>';

    uasort($arr, function($a, $b) {
        return array_sum($a) - array_sum($b);
    });


    foreach($arr as $innerArray){
        foreach($innerArray as $values){
            echo $values.' ';
        }
        echo '<br>';
    }

}

function twentyNine(){
    $firstArray = array();
    $secondArray = array();

    for ($i=0; $i < 100; $i++) { 
        for ($j=0; $j < 10; $j++) { 
            $firstArray[$i][$j] = rand(1,17);
        }
    }

    foreach($firstArray as $innerArray){
        foreach($innerArray as $innerArrayValue){
            array_push($secondArray, $innerArrayValue);
        }
    }

    //SPAUSDINAM
    foreach($secondArray as $value){
        echo $value.' ';
    }
}

function thirty(){

    $firstArray = array();
    $secondArray = array();

    for ($i=0; $i < 100; $i++) { 
        for ($j=0; $j < 10; $j++) { 
            $firstArray[$i][$j] = rand(1,17);
        }
    }

    foreach($firstArray as $innerArray){
        foreach($innerArray as $innerArrayValue){
            array_push($secondArray, $innerArrayValue);
        }
    }


    $avg = array_sum($secondArray)/count($secondArray);
    echo "Skaičių vidurkis yra $avg <br>";

    if(count($secondArray) % 2 == 0){
        $middleValue = ($secondArray[count($secondArray)/2]+$secondArray[count($secondArray)/2+1])/2;
        echo "Vidurinė reikšmė $middleValue <br>";
    }
    else{
        $middleValue = $secondArray[ceil(count($secondArray)/2)];
        echo "Vidurinė reikšmė $middleValue <br>";
    }

    if($middleValue > $avg){
        echo "Vidurinė reikšmė yra didesnė už skaičių vidurkį<br>";
    }
    elseif($middleValue < $avg){
        echo "Vidurinė reikšmė yra mažesnė už skaičių vidurkį<br>";
    }
    else{
        echo "Vidurinė reikšmė yra lygi skaičių vidurkiui<br>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Third Part</title>
</head>
<body>

<h1>21 užduotis</h1>
<div><?php twentyOne();?></div>

<h1>22 užduotis</h1>
<div><?php twentyTwo();?></div>

<h1>23 užduotis</h1>
<div><?php twentyThree();?></div>

<h1>24 užduotis</h1>
<div><?php twentyFour();?></div>

<h1>25 užduotis</h1>
<div><?php twentyFive();?></div>

<h1>26 užduotis</h1>
<div><?php twentySix();?></div>

<h1>27 užduotis</h1>
<div><?php twentySeven();?></div>

<h1>28 užduotis</h1>
<div><?php twentyEight();?></div>

<h1>29 užduotis</h1>
<div><?php twentyNine();?></div>

<h1>30 užduotis</h1>
<div><?php thirty();?></div>


</body>
</html>