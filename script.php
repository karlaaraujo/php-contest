<?php 

include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategorizacao.php";

//método post recupera os dados de uma tag html com um name='nome'
$nome = $_POST['nome'];     
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

//manipula o header da requisição no campo location para redirecionar para o index.php
header('location: index.php');