<?php

namespace matematica;
function somar ($a,$b,$c){
    return $a + $b + $c;
    }

function subtrair ($a,$b){
    return $a - $b;
}


namespace texto;{
    function concatenar($nome, $sobrenome){
    return $nome ; " " ; $sobrenome; 
    }
echo "menor de idade!";
}
namespace logica;{
    function verificaexercito($idade){
        if ($idade >= 18){
    
    
    
        return "maior de idade!";
        }
    
}
  function exercito ($sexo, $idade){

  if ($idade == 18 && $sexo = "Masculino"){
  return "voce esta apto para servir no exercito";

    }
    else {
     return "voce nao esta apto para servir o exercito";

    }

  }  

}
?>