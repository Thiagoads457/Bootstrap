<?php
    function exibirData(){
        echo "Hoje é dia ".date("d");
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

 
    
        
    function encontrarTriplo($valor1,$valor2){

        if($valor1 == $valor2) {
            $triple = $valor1 * 3;
            return "O resultado é $triple";
        } else {
            $soma = $valor1 + $valor2;
            return "O resultado é $soma";
        }
    }
