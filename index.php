<?php 
    session_start();    //inicia a sessão antes de qualquer outro script abaixo
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

    <form action="script.php" method="post">    <!--o action é o responsável por identificar para qual endereço os dados devem ser submetidos para serem processados-->
        
        <?php 
        $mensagemDeErro = isset($_SESSION["mensagem-de-erro"]) ? $_SESSION["mensagem-de-erro"] : "";    //SE $_SESSION tiver um valor na chave "mensagem-de-erro", armazene este valor em $mensagemDeErro. ELSE, armazene nd
        if (!empty($mensagemDeErro)){
            echo $mensagemDeErro;
        }

        $mensagemDeSucesso = isset($_SESSION["mensagem-de-sucesso"]) ? $_SESSION["mensagem-de-sucesso"] : "";    //SE $_SESSION tiver um valor na chave "mensagem-de-erro", armazene este valor em $mensagemDeErro. ELSE, armazene nd
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