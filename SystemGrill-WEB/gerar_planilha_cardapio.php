<?php
session_start();
include_once('conexaoBD.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Cardapio</title>

	<head>

	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'cardapio.xls';

		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="5" align="center"><b>Cardapio</b></tr>';
		$html .= '</tr>';

		$html .= '<tr>';
		$html .= '<td align="center"><b>ID</b></td>';
		$html .= '<td align="center"><b>Nome</b></td>';
		$html .= '<td align="center"><b>Categoria</b></td>';
		$html .= '<td align="center"><b>Fornecedor</b></td>';
		$html .= '<td align="center"><b>Validade</b></td>';

		//Selecionar todos os itens da tabela 
		$sql = "SELECT * FROM produto";
		$resultado = $conexao->query($sql);

		while ($row_cardapio = mysqli_fetch_assoc($resultado)) {
			$html .= '<tr>';
			$html .= '<td>' . $row_cardapio["idProduto"] . '</td>';
			$html .= '<td>' . $row_cardapio["descricaoProduto"] . '</td>';
			$html .= '<td>' . $row_cardapio["idCategoria"] . '</td>';
			$html .= '<td>' . $row_cardapio["fornecedor"] . '</td>';
			$html .= '<td>' . $row_cardapio["validade"] . '</td>';
		}
		// Configurações header para forçar o download
		header("Cache-Control: no-cache, must-revalidate");
		header("Pragma: no-cache");
		header("Content-type: application/x-msexcel");
		header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
		header("Content-Description: PHP Generated Data");
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>