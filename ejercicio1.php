<?php
$oracion = strtolower(readline("Ingrese una oración "));
$teclas =["p","qaz","wsx","edc","rfv","tgb","yhn","ujm","ik","ol"];
$oracion = str_split($oracion);
$resultado = 0;
foreach ($oracion as $word){
    $pack = array_filter($teclas, function($tecla)use($word){
        return strpos($tecla, $word) !== false;
    });
    $val = array_search(array_values($pack)[0], $teclas);
    $resultado += $val;
};
echo($resultado);
?>