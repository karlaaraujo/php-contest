<?php

function defineCategoriaCompetidor (string $nome, string $idade) : ?string {
    //se validaNome e validaIdade retornarem true
    if (validaNome($nome) && validaIdade($idade)){

        removerMensagemErro();

        if ($idade >= 6 && $idade<=12){
            setarMensagemSucesso("O participante ".$nome." compete na categoria Infantil");    
            return null;
        }
        else if ($idade >= 13 && $idade<=18){
            setarMensagemSucesso("O participante ".$nome." compete na categoria Adolescente");    
            return null;
        }
        else {
            setarMensagemSucesso("O participante ".$nome." compete na categoria Adulto");    
            return null;
        }
    } 
    else {
        removerMensagemSucesso();
        return retornaMensagemErro();
    }
}