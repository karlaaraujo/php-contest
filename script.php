<?php 

session_start();    //inicia uma sessão http nesse script

$nome = $_POST['nome'];     //método post recupera os dados de uma tag html com um name='nome'
$idade = $_POST['idade'];


//-------validação dos dados----------

if(empty($nome)){   //se o nome estiver vazio
    $_SESSION["mensagem-de-erro"] = "O nome não pode ser vazio";    //inicia o array associativo $_SESSION e associa a chave "mensagem-de-erro" ao valor "o nome n pode ser vazio"
    header("location: index.php");  //manipula o header da requisição no campo location para redirecionar para o index.php
    return;     //este return faz com que toda linha de código que vem depois não seja executada
}
else if (strlen($nome) < 3){    //strlen retorna a qtd de caracteres da string
    $_SESSION["mensagem-de-erro"] = "O nome deve conter mais de 3 caracteres";    
    header("location: index.php");
    return;
}
else if (strlen($nome)> 40){
    $_SESSION["mensagem-de-erro"] = "O nome não pode ultrapassar 40 caracteres";    
    header("location: index.php");
    return;
}

else if(!is_numeric($idade)){    // se NÃO for uma string numérica
    $_SESSION["mensagem-de-erro"] = "A idade precisa ser um número";    //inicia o array associativo $_SESSION e associa a chave "mensagem-de-erro" ao valor "o nome n pode ser vazio"
    header("location: index.php");
    return;
}

//--------diz categoria da idade---------

if ($idade >= 6 && $idade<=12){
    $_SESSION["mensagem-de-sucesso"] = "O participante ".$nome." compete na categoria infantil";    
    header("location: index.php");
}
else if ($idade >= 13 && $idade<=18){
    $_SESSION["mensagem-de-sucesso"] = "O participante ".$nome." compete na categoria adolescente";    
    header("location: index.php");
}
else {
    $_SESSION["mensagem-de-sucesso"] = "O participante ".$nome." compete na categoria adulto";    
    header("location: index.php");;
}

