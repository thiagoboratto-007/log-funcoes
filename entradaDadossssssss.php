<?php


require_once "bibliotecaFuncoes.php";

use function conversao\dolarParaReal;
use function conversao\euroParaReal; 
use function conversao\pesoParaReal ;
use function conversao\libraParaReal;
use function conversao\ieneParaReal;

$opcaoPrincipal = "";
$opcaoConversao = "";

while ($opcaoPrincipal != 4){
    echo "menu
   escolha entre as opçoes abaixo: 
   1 - conversao (dolar)
   4 -sair\n"; 
   $opcaoPrincipal = readline(">>> ");
   switch($opcaoPrincipal){
    
   case 1:
        while($opcaoConversao != 6 ){
            echo "menu principal
            1 - dolar para real
            6 - sair \n";
        $opcaoConversao = readline(">>> ");
        switch($opcaoConversao){

        
        case 1:

            $valor = readline("digite o valor em dolar");
        $cotacao = readline("digite o valor da cotação atual do dolar: ");
        echo "valor em real(R$): ", dolarParaReal($valor,$cotacao);

        break;
            
        case 6:
            echo "saindo...\n\n";
            break;
        }
        }
        
        
        
        break;
        
        case 4:
            echo "saindo...\n\n";
            
    break;
            echo "opcao invalida!\n\n ";
            break;
            default;
            }
    
}















    
 




