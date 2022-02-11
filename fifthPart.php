<?php

function fourtyOne($arg){
    if(is_string($arg)){
        echo $arg;
    }
    else{
        echo 'Perduodamas argumentas nėra String tipo';
    }
}

function fourtyTwo($arg){
    if(is_string($arg)){
        echo 'Teksto ilgis yra: '.strlen($arg).'. <br>Tekstas - '.$arg;
    }
    else{
        echo 'Perduodamas argumentas nėra String tipo';
    }
}

function fourtyThree($arg){
    if(is_string($arg)){
        if(strlen($arg) % 2 == 0){
            echo "<p style='color:green;'>$arg</p>";
        }
        else{
            echo "<p style='color:blue;'>$arg</p>";
        }
    }
    else{
        echo 'Perduodamas argumentas nėra String tipo';
    }
}

function fourtyFour($arg){
    if(is_string($arg)){
        $textArray = str_split($arg);
        $textArrayModified = '';
        foreach($textArray as $symbol){
            if(ctype_upper($symbol)){
                $symbol = strtolower($symbol);
                $textArrayModified .= $symbol;
            }
            elseif(ctype_lower($symbol)){
                $symbol = strtoupper($symbol);
                $textArrayModified .= $symbol;
            }
            else{
                $textArrayModified .= $symbol;
            }
        }

        echo "Duotas tekstas: $arg <br> Modifikuotas tekstas: $textArrayModified";

    }
    else{
        echo 'Reikšmė nėra String tipo!';
    }
}

function fourtyFive($arg){
    if(is_string($arg)){
        $textArray = str_split($arg);
        $count = 0;
        if(count($textArray) >= 20){
            foreach($textArray as $symbol){
                if($symbol == 'a'){
                    $count++;
                }
            }
            echo "A raidžių duotame tekste yra $count <br> $arg";
        }
        else{
            echo 'Tekstas turi būti ilgesnis nei 20 simbolių';
        }
    }
    else{
        echo 'Reikšmė nėra String tipo!';
    }
}

function fourtySix($arg){
    if(is_string($arg)){
        
        $textArray = str_split($arg);
        $upper = 0;
        $lower = 0;

        foreach($textArray as $symbol){
            if(ctype_upper($symbol)){
                $upper++;
            }
            elseif(ctype_lower($symbol)){
                $lower++;
            }
        }

        echo "Duotas tekstas: $arg <br> Didžiųjų raidžių yra $upper <br> Mažųjų raidžių yra $lower";
    }
    else{
        echo 'Reikšmė nėra String tipo!';
    }
}

function fourtySeven($arg1, $arg2){
    if(is_string($arg1) && is_string($arg2)){
        echo $arg1.'<br>'.$arg2.'<br>';
        if(strlen($arg1) > strlen($arg2)){
            echo 'Pirmasis tekstas yra ilgesnis už antrą';
        }
        elseif(strlen($arg1) < strlen($arg2)){
            echo 'Antrasis tekstas yra ilgesnis už pirmą';
        }
        else{
            echo 'Tekstai yra lygūs';
        }
    }
    else{
        echo 'Reikšmė nėra String tipo!';
    }
}

function fourtyEight($arg1, $arg2){
    if(is_string($arg1) && is_string($arg2)){
        echo $arg1.'<br>'.$arg2.'<br>';
        
        $textArray1 = str_split($arg1);
        $textArray2 = str_split($arg2);
        $upper1 = 0;
        $upper2 = 0;

        foreach($textArray1 as $chars){
            if(ctype_upper($chars)){
                $upper1++;
            }
        }

        foreach($textArray2 as $chars){
            if(ctype_upper($chars)){
                $upper2++;
            }
        }

        if($upper1 > $upper2){
            echo 'Pirmajame tekste didžiųjų raidžių yra daugiau';
        }
        elseif($upper1 < $upper2){
            echo 'Antrajame tekste didžiųjų raidžių yra daugiau';
        }
        else{
            echo 'Abiejuose tekstuose didžiųjų raidžių skaičius vienodas';
        }



    }
    else{
        echo 'Reikšmė nėra String tipo!';
    }
}

function fourtyNine($arg){
    if(is_string($arg)){
        echo "$arg <br><br>";

        $textArray = explode(' ', $arg);
        krsort($textArray);

        $newString = implode(' ', $textArray);
        echo "$newString <br><br>";
    }
    else{
        echo 'Reikšmė nėra String tipo!';
    }
}

function fifty($arg){
    if(is_string($arg)){
        echo "$arg <br><br>";
        $colorIndexes = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
        for ($i=0; $i < strlen($arg); $i++) { 
            $color = '#'.$colorIndexes[rand(0,count($colorIndexes)-1)].$colorIndexes[rand(0,count($colorIndexes)-1)].$colorIndexes[rand(0,count($colorIndexes)-1)].$colorIndexes[rand(0,count($colorIndexes)-1)].$colorIndexes[rand(0,count($colorIndexes)-1)].$colorIndexes[rand(0,count($colorIndexes)-1)];

            echo "<span style='color:".$color.";'>".$arg[$i]."<span>";
        }
    }
    else{
        echo 'Reikšmė nėra String tipo!';
    }
}
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fith part</title>
</head>
<body>

<h1>41 užduotis</h1>
<p><?php fourtyOne('Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia adipisci praesentium rerum ea, aspernatur doloremque sequi iusto a. Possimus dolore aspernatur quasi nisi dolorem itaque incidunt commodi quas nihil qui?')?></p>

<h1>42 užduotis</h1>
<p><?php fourtyTwo('Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia adipisci praesentium rerum ea, aspernatur doloremque sequi iusto a. Possimus dolore aspernatur quasi nisi dolorem itaque incidunt commodi quas nihil qui?')?></p>

<h1>43 užduotis</h1>
<?php fourtyThree('Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia adipisci praesentium rerum ea, aspernatur doloremque sequi iusto a. Possimus dolore aspernatur quasi nisi dolorem itaque incidunt commodi quas nihil qu?')?>

<h1>44 užduotis</h1>
<div><?php fourtyFour('23Tlc mWo 65 BmyY')?></div>

<h1>45 užduotis</h1>
<div><?php fourtyFive('Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia adipisci praesentium rerum ea, aspernatur doloremque sequi iusto a. Possimus dolore aspernatur quasi nisi dolorem itaque incidunt commodi quas nihil qu?')?></div>

<h1>46 užduotis</h1>
<div><?php fourtySix('ABCDEFG qwerty')?></div>

<h1>47 užduotis</h1>
<div><?php fourtySeven('ABCDEFG', 'qwerty')?></div>

<h1>48 užduotis</h1>
<div><?php fourtyEight('hifgOHUHoiHU', 'giuyGYGIYGVYouhguiGg')?></div>

<h1>49 užduotis</h1>
<div><?php fourtyNine('Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia adipisci praesentium rerum ea, aspernatur doloremque sequi iusto a. Possimus dolore aspernatur quasi nisi dolorem itaque incidunt commodi quas nihil qu?')?></div>

<h1>50 užduotis</h1>
<div><?php fifty('Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia adipisci praesentium rerum ea, aspernatur doloremque sequi iusto a. Possimus dolore aspernatur quasi nisi dolorem itaque incidunt commodi quas nihil qu?')?></div>

</body>
</html>