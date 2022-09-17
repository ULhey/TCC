<?php
session_start();
include_once('conexaoBD.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Usuario</title>

	<head>

	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'usuario.xls';

		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="5" align="center"><b>Usuario</b></tr>';
		$html .= '</tr>';

		$html .= '<tr>';
		$html .= '<td align="center"><b>ID</b></td>';
		$html .= '<td align="center"><b>Nome</b></td>';
		$html .= '<td align="center"><b>Email</b></td>';
		$html .= '<td align="center"><b>CPF</b></td>';
		$html .= '<td align="center"><b>Função</b></td>';

		//Selecionar todos os itens da tabela 
		$sql = "SELECT * FROM usuario";
		$resultado = $conexao->query($sql);

		while ($row_usuario = mysqli_fetch_assoc($resultado)) {
			$html .= '<tr>';
			$html .= '<td>' . $row_usuario["idUsuario"] . '</td>';
			$html .= '<td>' . $row_usuario["nomeUsuario"] . '</td>';
			$html .= '<td>' . $row_usuario["email"] . '</td>';
			$html .= '<td>' . $row_usuario["cpf"] . '</td>';
			$html .= '<td>' . $row_usuario["cargoUsuario"] . '</td>';
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