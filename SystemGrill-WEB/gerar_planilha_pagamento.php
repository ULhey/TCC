<?php
session_start();
include_once('conexaoBD.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Pagamento</title>

	<head>

	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'pagamento.xls';

		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="6" align="center"><b>Pagamento</b></tr>';
		$html .= '</tr>';

		$html .= '<tr>';
		$html .= '<td align="center"><b>Pedido</b></td>';
		$html .= '<td align="center"><b>Produto</b></td>';
		$html .= '<td align="center"><b>Quantidade</b></td>';
		$html .= '<td align="center"><b>Valor Total</b></td>';
		$html .= '<td align="center"><b>Metodo Pagamento</b></td>';
		$html .= '<td align="center"><b>Data do Pagamento</b></td>';

		//Selecionar todos os itens da tabela 
		$sql = "SELECT * FROM itempedido";
		$resultado = $conexao->query($sql);

		while ($row_pagamento = mysqli_fetch_assoc($resultado)) {
			$html .= '<tr>';
			$html .= '<td>' . $row_pagamento["idPedido"] . '</td>';
			$html .= '<td>' . $row_pagamento["idProduto"] . '</td>';
			$html .= '<td>' . $row_pagamento["qtdProduto"] . '</td>';
			$html .= '<td>' . $row_pagamento["valor_total"] . '</td>';
			$html .= '<td>' . $row_pagamento["metodo_pagamento"] . '</td>';
			$html .= '<td>' . $row_pagamento["data_pagamento"] . '</td>';
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