<?php 
	require "include/connection.php";
	$id = $_GET['id'];
	$sql_delete_product = "DELETE FROM produto WHERE id = {$id}";

	if($conexao->query($sql_delete_product)) {
	$msg = 'Excluído com sucesso!';
	$tipo_msg = 'success';
} else{
	$msg = 'Não foi possível excluir';
	$tipo_msg = 'danger';
};
	header("Location: produtos.php?msg={$msg}&tipo_msg={$tipo_msg}");

/*try {
		$conexao->query($sql_delete_product);
		$msg = 'Excluído com sucesso!';
		$tipo_msg = 'success';
		header("Location: produtos.php?msg={$msg}&tipo_msg={$tipo_msg}");

} catch (Exception $e) {
	$msg = "Não foi possível excluir! Erro: {$e->getMessage()}";
	$tipo_msg = 'danger';
	header("Location: produtos.php?msg={$msg}&tipo_msg={$tipo_msg}");
}*/

?>