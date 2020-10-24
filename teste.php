<?php
//1 0
//2 $
//3 1


//ini_set('display_errors', 1);

$t = 3;
$a = [1, 2, 3];
$b = [0,'$',1];
for($i = 0; $i < $t; $i++) {
    try {
      if(!is_numeric($a[$i])) {
        throw new Exception("Valor não pode ser convertido para inteiro: '{$a[$i]}'");
      } elseif(!is_numeric($b[$i])) {
        throw new Exception("Valor não pode ser convertido para inteiro: '{$b[$i]}'");
      } else {
        echo 'Resultado da Divisão: ' . intdiv($a[$i],$b[$i]) . '<br>' ;
      }
    } catch(DivisionByZeroError $e) {
        echo 'Erro: Divisão por zero não permitida' . '<br>' ;
    } catch(Exception $e) {
        echo 'Erro: ' . $e->getMessage() . '<br>';
    } finally {
      echo '--------------------------------------------------------------- <br>';
    }    
}