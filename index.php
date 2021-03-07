<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Formulário de Inscrição</title>
</head>
<body>
    <p>Formulário para inscrição de competidores</p>

    <form action="script.php" method="post"> <!--o action é o responsável por identificar para qual endereço os dados devem ser submetidos para serem processados-->

        <p>Nome: <input type="text" name="nome"> </p>
        <p>Idade: <input type="text" name="idade"> </p>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>