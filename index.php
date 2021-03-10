<?php 

//inclui servicoMensagemSessao que declara o session_start para que a sessao seja iniciada
include 'servicos/servicoMensagemSessao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Formulário de Inscrição</title>

</head>
<body>

    <p>Formulário para inscrição de competidores</p>

    <!--o action é o responsável por identificar para qual endereço os dados devem ser submetidos para serem processados-->
    <form action="script.php" method="post">    
        
        <?php 

        //armazena o retorno da função em $mensagemDeErro
        $mensagemDeErro = retornaMensagemErro();
        $mensagemDeSucesso = retornaMensagemSucesso();
        
        if (!empty($mensagemDeErro)){
            echo $mensagemDeErro;
        }

        if (!empty($mensagemDeSucesso)){
            echo $mensagemDeSucesso;
        }

        ?>

        <p>Nome: <input type="text" name="nome"> </p>
        <p>Idade: <input type="text" name="idade"> </p>

        <button type="submit">Enviar</button>
       
    </form>
</body>
</html>