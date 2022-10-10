<?php
function tabuada($tabuada){
    $cont = 1;
    $resultado = '';
 
    while ($cont <= 10){
         $resultado .= '<tr><td>' . $tabuada . 'x' . $cont . ' = ' . ($tabuada * $cont) . '</td></tr>';
       $cont++;
    }
 
    return $resultado;
 }
 for($i=1;$i<=10;$i++){
    $tabela = '<center><table border="1">';
    $tabela .= "<td>Tabuada de $i</td>";
    $tabela .= tabuada($i);
    $tabela .= "</table></center>";
    echo $tabela;
}
 ?>