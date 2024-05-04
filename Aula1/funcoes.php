<?php
    function exibirData(){
        echo "Hoje é dia ".date("d");
    } 

    function somar($n1, $n2){
        return $n1 + $n2;
    
   }

   function subtrair($n1, $n2){
    return $n1 - $n2;
   }

   function multiplicar($n1, $n2){
    return $n1 * $n2;
   }

   function dividir($n1, $n2){
    return $n1 / $n2;
   }

   function positivoNegativo($valor){
        if ($valor > 0){
            return "Valor positivo!";
        }elseif($valor < 0){
            return "Valor Negativo!";

        }else{
            return "Igual a Zero!";

        }
    }

    function encontrarMenor($valores) {
        $menorValor = $valores[0];
        $posicao = 0;
    
        for ($i = 1; $i < count($valores); $i++) {
            if ($valores[$i] < $menorValor) {
                $menorValor = $valores[$i];
                $posicao = $i;
            }
        }
    
        return array('valor' => $menorValor, 'posicao' => $posicao);
    }
        
       
    

    
    
    
   
?>
