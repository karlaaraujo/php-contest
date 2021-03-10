<?php

//inicia uma sessão http nesse script
session_start();


//cria função setarMensagemErro que recebe $mensagem como parâmetro e não retorna nada
function setarMensagemErro (string $mensagem) : void { 
    //associa a mensagem recebida à chave "mensagem-de-erro" 
    $_SESSION["mensagem-de-erro"]= $mensagem;
}

//função que retorna uma string ou null 
function retornaMensagemErro () : ?string {  
    //se a chave "mensagem-de-erro tiver sido setada com um valor  
    if(isset($_SESSION["mensagem-de-erro"])){
        return $_SESSION["mensagem-de-erro"];
    }
    return null;
}


function setarMensagemSucesso (string $mensagem) : void {  
    $_SESSION["mensagem-de-sucesso"]= $mensagem;
}

function retornaMensagemSucesso () : ?string {    
    if(isset($_SESSION["mensagem-de-sucesso"])){
        return $_SESSION["mensagem-de-sucesso"];
    }
    return null;
}



function removerMensagemErro() : void {
    if(isset($_SESSION["mensagem-de-erro"])){
        unset($_SESSION["mensagem-de-erro"]);
    }
}

function removerMensagemSucesso() : void {
    if(isset($_SESSION["mensagem-de-sucesso"])){
        unset($_SESSION["mensagem-de-sucesso"]);
    }
}


