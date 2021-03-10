<?php

//declare (script_type=1);  
//declara uma tipagem forte através da busca do arquivo scrpit_type

//cria função validaNome que recebe $nome como parâmetro e retorna um boolean
function validaNome (string $nome) : bool 
{  
    //se o nome estiver vazio
    if(empty($nome)){   
        //invoca função setarMensagemErro passando a mensagem como parâmetro
        setarMensagemErro("O nome não pode ser vazio");    
        //este return faz com que toda linha de código que vem depois não seja executada
        return false;  
    }
    //strlen retorna a qtd de caracteres da string
    else if (strlen($nome) < 3){    
        setarMensagemErro("O nome deve conter mais de 3 caracteres");    
        return false;
    }
    else if (strlen($nome)> 40){
        setarMensagemErro("O nome não pode ultrapassar 40 caracteres");    
        return false;
    }
    //se nenhum dos casos anteriores forem executados, retorne true
    return true;   
}

function validaIdade (string $idade) : bool 
{
    // se NÃO for uma string numérica
    if(!is_numeric($idade)){  
        setarMensagemErro("A idade precisa ser um número") ;    
        return false;
    }
    return true;
}