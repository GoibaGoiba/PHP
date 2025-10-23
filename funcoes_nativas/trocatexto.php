<?php
$txt="Me da tres paes quentinhos";
$novo_txt=str_replace('a','i',$txt);
$novo_txt=str_replace('e','i',$novo_txt);
$novo_txt=str_replace('o','i',$novo_txt);
$novo_txt=str_replace('u','i',$novo_txt);
echo $novo_txt;