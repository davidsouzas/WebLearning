<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Aprendendo HTML CSS e JS</title>	
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<script language="javascript" src="_javascript/funcoes.js"></script>
<body>
<div id="interface">
	<header id= "cabecalho">
		<hgroup>
			<img id="logoprincipal" src="imagens/logo.jpg"/>
			<h1>DollarAllWin</h1>
			<h2>Aprendendo HTML, CSS e JS</h2>
		</hgroup>
		<img id="icone" src="imagens/back1.png"/>
		<nav id="menu">
			<ul>
			<li onmouseover="mudaFoto('imagens/home.png')" onmouseout="mudaFoto('imagens/back1.png')"><a href="index.html">HOME</a></li>
			<li onmouseover="mudaFoto('imagens/fotos.png')" onmouseout="mudaFoto('imagens/back1.png')"><a href="fotos.html">FOTOS</a></li>
			<li onmouseover="mudaFoto('imagens/multimidia.png')" onmouseout="mudaFoto('imagens/back1.png')"><a href="videos.html">VIDEOS</a></li>	
			<li onmouseover="mudaFoto('imagens/contato.png')" onmouseout="mudaFoto('imagens/back1.png')"><a href="contato.html">CONTATO</a></li>
			</ul>
		</nav>
	</header>
<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "cadastroapp";
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$nome=$_POST['nome'];
	$pais=$_POST['pais'];
	$estado=$_POST['estado'];
	$cidade=$_POST['cidade'];
	$email=$_POST['email'];
	$mensagem=$_POST['mensagem'];
	$msg_usuario =("INSERT INTO contato(nome, pais, estado, cidade, email, mensagem )VALUES('$nome', '$pais', '$estado', '$cidade', '$email', '$mensagem')");
	$resultado_msg_usuario = mysqli_query($conn, $msg_usuario);

?>

<article id="paginas">
	<h2>Sucesso</h2>
	<h1>Sua Mensagem Foi Enviada!</h1>
	</article>
	</div>
</body>
</html>