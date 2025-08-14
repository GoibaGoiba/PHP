<?php
    echo"Esse é o modo do foreach<br>";
    $frutas=["Maçã","Banana","Laranja","Limão",'Morango','Pera'];
    foreach($frutas as $i){
        echo $i."<br>";
    }
    echo"        <br>";
    echo"Esse é o modo do count<br>";
    for($i=0;$i<count($frutas);$i++){
        echo $frutas[$i]."<br>";
    }