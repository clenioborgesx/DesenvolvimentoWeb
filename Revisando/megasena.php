<?php

$numero_de_X = 60;
$index       = 0;
$matriz      = array();

while($index < $numero_de_X){
    $rand        = mt_rand(1, 60);  
    $qual_numero = $index;

    if(!in_array($rand, $matriz)) 
        {
            $matriz[$index] = $rand;
            $index++;
        }
    }

sort($matriz);
$contador = 0;

while(list($chave, $valor) = ($matriz)){
    echo "<td>
            <center>
                <font size='6' face='verdana, helvetica, arial' color='black'><b>";
                if($valor < 10){ 
                    echo "0" . $valor;
                }else{
                    echo $valor;
                }
                
                    
            echo "</b></font></center></td>";
            $contador = $contador + 1;
            if($contador == 5){
            echo"</tr><tr>";
            }
            if($contador == 10){
            echo"</tr><tr>";
            }
    }
    </tr>
    </tbody>
  </table>
</center>

?>