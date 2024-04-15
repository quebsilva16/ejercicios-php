<?php
// $hotcakesStr = readline("El tamaño de los hotcakes separado por un espacio");
$hotcakesStr = "3 2 1 4";
// Convierto el string en un array
$hotcakes = explode(" ", $hotcakesStr);
// variable para saber la longitud del array
$numberHotcakes = count($hotcakes);
$contador=0;
// for para recorrer los numeros que necesito organizar
for ($i = 0; $i <= $numberHotcakes; $i++){
    //primero localizo en donde esta el numero correspondiente
    $index = array_search($i+1, $hotcakes);
    //separo en 2 el array para poder reordenar a partir de donde se encuentra el numero que debo ordenar y el restante    
    $hotcakesOrdenar = array_slice($hotcakes, 0, $index+1);
    $hotcakesguardar = array_slice($hotcakes, $index+1);
    //doy vuelta para ordenar
    $hotcakeOrdenado = array_reverse($hotcakesOrdenar);
    //mezclo nuevamente el array
    $hotcakes = array_merge($hotcakeOrdenado, $hotcakesguardar);
    $contador+=1;
    if($i>0){
        $hotcakesOrdenar = array_slice($hotcakes, -$numberHotcakes , -$i);
        $hotcakesguardar = array_slice($hotcakes, -$i);
        $hotcakeOrdenado = array_reverse($hotcakesOrdenar);
        $hotcakes = array_merge($hotcakeOrdenado, $hotcakesguardar);
        $contador+=1;
    }
    else{
        $hotcakes = array_reverse($hotcakes);
        $contador+=1;
    }


}
$hotcakes = array_reverse($hotcakes);
foreach( $hotcakes as $hotcake ) {
    echo($hotcake);
}
echo("\n");
echo($contador);
?>