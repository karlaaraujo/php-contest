<?php 

$nome = $_POST['nome']; //método post recupera os dados de uma tag html com um name='nome'
$idade = $_POST['idade'];


//validação dos dados

if(empty($nome)){ //se o nome estiver vazio
    echo "O nome não pode ser vazio";
    return; //este return faz com que toda linha de código que vem depois não seja executada
}
else if (strlen($nome) < 3){ //strlen retorna a qtd de caracteres da string
    echo "O nome deve conter mais de 3 caracteres";
    return;
}
else if (strlen($nome)> 40){
    echo "O nome não pode ultrapassar 40 caracteres";
    return;
}

if(!is_numeric($idade)){ // se NÃO for uma string numérica
    echo "A idade precisa ser um número";
    return;
}


if ($idade >= 6 && $idade<=12){
    echo "O participante ".$nome." compete na categoria infantil";
}
else if ($idade >= 13 && $idade<=18){
    echo "O participante ".$nome." compete na categoria adolescente";
}
else {
    echo "O participante ".$nome." compete na categoria adulto";
}