<?php 
require "include/connection.php"; //incluindo conexão

$descricao = $_POST['descricao']; //recebendo variável
$tipo = $_POST['tipo'];
$sql_insere_categoria = "INSERT INTO categoria (descricao, tipo) VALUES ('{$descricao}','{$tipo}')";
print_r($sql_insere_categoria); exit;
if($conexao->query($sql_insere_categoria)){
	$msg = 'Registro salvo com sucesso!';
	$tipo_msg = 'success';
} else{
	$msg = 'Não foi possível salvar';
	$tipo_msg = 'danger';
}

header("Location: categorias.php?msg={$msg}&tipo_msg={$tipo_msg}");

?>