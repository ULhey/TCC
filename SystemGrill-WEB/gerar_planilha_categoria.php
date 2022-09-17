<?php
session_start();
include_once('conexaoBD.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Categoria</title>

	<head>

	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'categoria.xls';

		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="2" align="center"><b>Categoria</b></tr>';
		$html .= '</tr>';

		$html .= '<tr>';
		$html .= '<td align="center"><b>ID</b></td>';
		$html .= '<td align="center"><b>Nome</b></td>';

		//Selecionar todos os itens da tabela 
		$sql = "SELECT * FROM categoria";
		$resultado = $conexao->query($sql);

		while ($row_categoria = mysqli_fetch_assoc($resultado)) {
			$html .= '<tr>';
			$html .= '<td>' . $row_categoria["idCategoria"] . '</td>';
			$html .= '<td>' . $row_categoria["nomeCategoria"] . '</td>';
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