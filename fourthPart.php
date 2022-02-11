<?php

function thirtyOne($tekstas){
    echo $tekstas;
}

function thirtyTwo($a, $b){
    if(!is_numeric($a) || !is_numeric($b)){
        echo 'Viena iš reikšmių nėra skaičius';
    }
    else{
        echo "Skaičių $a ir $b suma yra ".$a+$b;
    }
}

function thirtyThree($a, $b){
    if(!is_numeric($a) || !is_numeric($b)){
        echo 'Viena iš reikšmių nėra skaičius';
    }
    else{
        if($a > $b){
            echo "Pirmas skaičius $a yra daugiau už antrąjį $b";
        }
        elseif($a < $b){
            echo "Antras skaičius $b yra daugiau už pirmąjį $a";
        }
        else{
            echo 'Skaičiai yra lygūs';
        }
    }
}

function thirtyFour($metai){
    if(!is_numeric($metai)){
        echo 'Reikšmė nėra skaičius';
    }
    else{
        if($metai < 1000){
            echo 'Reikšmė nėra keturženklis skaičius';
        }
        else{
            if((($metai % 4 == 0) && ($metai % 100 != 0)) || ($metai % 400 == 0)){
                echo "Metai $metai yra keliamieji";
            }
            else{
                echo "Metai $metai nėra keliamieji";
            }
        }
    }
}

function thirtyFive($number){

    if(!is_numeric($number)){
        echo 'Reikšmė nėra skaičius';
    }
    else{
        $finalNumber = '';
        $digits = str_split($number);
        sort($digits);
    
        foreach($digits as $digit){
            $finalNumber .= $digit;
        }
    
        echo "Duotas skaičius $number. Išrikiuoti jo skaitmenys sudaro skaičių $finalNumber";
    }
}

function thirtySix($number){

    if(!is_numeric($number) || !is_int($number)){
        echo 'Reikšmė nėra skaičius arba tai nėra sveikasis skaičius';
    }
    else{
        $count = 0;
        for ($i=2; $i < $number; $i++) { 
            if($number % $i == 0){
                $count++;
            }
        }

        echo "Skaičiaus $number sveikųjų daliklių (išskyrus 1 ir save patį) yra $count";
    }   
}

function thirtySeven($arr){
    if(!is_array($arr)){
        echo 'Funkcijos argumentas nėra masyvas. Įveskite masyvą!';
    }
    else{
        if(count($arr) != 10){
            echo 'Masyvo ilgis turi būti 10';
        }
        else{
            $numberString = '';
            foreach($arr as $value){
                if(!is_numeric($value)){
                    echo 'Masyvo elementai gali būti tik skaičiai';
                }
                else{
                    $numberString .= $value;
                }
            }

            $formattedString = sprintf("(%s) %s-%s",substr($numberString, 0, 3),substr($numberString, 3, 3),substr($numberString, 6));

            var_dump($arr);
            echo "<br>Telefono numeris yra: $formattedString";
        }
    }
}   

function thirtyEight($number){
    if(!is_numeric($number) || $number < 2){
        echo 'Reikšmė nėra skaičius arba reikšmė nėra didesnė už 1';
    }
    else{
        $count=0;
        for ( $i=1; $i <= $number; $i++){  
            if (($number % $i)==0){  
                $count++;  
            }  
        }  

        if ($count == 2){  
            echo "$number yra pirminis skaičius";  
        }
        else{
            echo "$number nėra pirminis skaičius"; 
        }
    }
}

function thirtyNine($arg1, $arg2){

    if(is_numeric($arg1) && is_numeric($arg2)){
        $sum = $arg1 + $arg2;
        echo "Skaičių suma yra $sum";
    }
    elseif(is_array($arg1) && is_array($arg2)){
        $arraySum = count($arg1) + count($arg2);
        echo "Masyvų ilgių suma yra $arraySum";
    }
    else{
        echo 'Neteisingas duomenų tipas arba duomenų tipai nesutampa';
    }

}

function fourty($arg1, $arg2){
    if((is_numeric($arg1) && is_array($arg2)) || (is_array($arg1) && is_numeric($arg2))){
        if(is_array($arg1) && count($arg1)==7){
            if(in_array($arg2, $arg1)){
                echo 'True';
            }
            else{
                echo 'False';
            }
        }
        elseif(is_array($arg2) && count($arg2)==7){
            if(in_array($arg1, $arg2)){
                echo 'True';
            }
            else{
                echo 'False';
            }
        }
        else{
            echo 'Masyvo ilgis turi būti 7';
        }
    }
    else{
        echo 'Vienas iš argumentų nėra nei skaičius nei masyvas (arba abu vienodi)';
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1><?php thirtyOne('31 užduotis');?></h1>
<div>Aukščiau esantis tekstas įterptas su PHP</div>

<h1>32 užduotis</h1>
<div><?php thirtyTwo(rand(1,100), rand(1,100));?></div>

<h1>33 užduotis</h1>
<div><?php thirtyThree(rand(1,100), rand(1,100));?></div>

<h1>34 užduotis</h1>
<div><?php thirtyFour(rand(1,2022));?></div>

<h1>35 užduotis</h1>
<div><?php thirtyFive(rand(1,1000000));?></div>

<h1>36 užduotis</h1>
<div><?php thirtySix(rand(1,1000000));?></div>

<h1>37 užduotis</h1>
<div><?php thirtySeven([0,6,8,8,4,3,8,1,2,7]);?></div>

<h1>38 užduotis</h1>
<div><?php thirtyEight(rand(1,100));?></div>

<h1>39 užduotis</h1>
<div><?php  thirtyNine([5],[5,6]);?></div>

<h1>40 užduotis</h1>
<div><?php  fourty(5,[6,8,7,1,8,7,2]);?></div>

</body>
</html>