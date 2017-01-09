<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8"/>
			<meta name="viewport" content="width:device-width">
			<title>CADASTRO DE MERCADORIAS</title>
			<link rel="stylesheet" type="text/css" href="css/topo.css" media="all and (min-width:980px)" />
			<link rel="stylesheet" type="text/css" href="CSS/rodape.css" media="all and (min-width:980px)"/>
			<link rel="stylesheet" type="text/css" href="CSS/mobile-topo.css" media="all and (max-width:479px)"/>
			<link rel="stylesheet" type="text/css" href="CSS/mobile-rodape.css" media="all and (max-width:479px)"/>
			<link rel="stylesheet" type="text/css" href="CSS/tablet-topo.css" media="all and (min-width:480px) and (max-width:979px)"/>
			<link rel="stylesheet" type="text/css" href="CSS/tablet-rodape.css" media="all and (min-width:480px) and (max-width:979px)"/>
			<script type="text/javascript" src="javascript.js"></script>
		</head>
		<body>
			<section class="container">
				<section class="conteudo">
					<header class="topo">
						<section class="box-topo">
							<div class=box-logo>
							<a href="cadastro.html" >
								<img src="imagens/images.png" alt="" title="" class="logo" />
							</a>
							</div>
							<div class="contatos"> 
							<div class="info-header">
								<p class="p-header p-espaco"> Faça seu pedido já!</p>
								<ul>
									<li>
										<h2 class="titulo-header">(11)5891-7434</h2>
									</li>
									<li>
										<h2 class="titulo-header">(11)98216-9720</h2>
									</li>
								</ul>
								
							</div >
							<div class="info-header ">
								<p class="p-header p-espaco"> Entrega a domicilio!</p>
								<ul>
									<li>
										<h2 class="titulo-header">Segunda a Sexta</h2>
									</li>
									<li>
										<h2 class="titulo-header">até as 00h</h2>
									</li>
								</ul>
							</div>
							</div>
						</section>
					</header>
					<!--------Conteúdo-------->
					
						<?php
include_once("conexao.php");

$codigo = 		$_POST['codigo'];
$nome = 		$_POST['nome'];
$tipo = 		$_POST['tipo'];
$quantidade = 	$_POST['quantidade'];
$preco = 		$_POST['preco'];
$negocio = 		$_POST['negocio'];
$email = 		$_POST['email'];
$mensagem = 	$_POST['mensagem'];


echo"Código: $codigo";
echo"Nome: $nome ";
echo"Tipo: $tipo";
echo"Quantidae: $quantidade";
echo"Preço: $preco";
echo"Negocio: $negocio";
echo"Email: $email";
echo"Mensagem: $mensagem";

$sql = "insert into formulario values";
$sql .= "('$codigo', '$nome', '$tipo', '$quantidade', '$preco', '$negocio', '$email','$mensagem')";
$resultado = mysqli_query($sql);
echo "Formulário incluido com Sucesso";
mysqli_close($conexao);


?>
					
					<!--------Rodape---------->
					<footer class="rodape">
						<div class="onde">
							<h2>ONDE ESTAMOS</h2>
							<P class="av">Av.Dr.Antonio Bento, 200
							<br>	
							"São Bento-São Paulo/SP"
							<br>
							"CEP:05832-190"
							</P>	
					
						</div>			
				
						<div class="redes">
							<a href="https://www.instagram.com/ramosmadeira/">
								<img class="redes-sociais"src="imagens/Rodape10.png"/>
							</a>
							<a href="https://twitter.com/MadeiraRamos1">
								<img class="redes-sociais"src="imagens/Rodape20.png"/>
							</a>
							<a href="https://www.facebook.com/madeira.ramos.7?fref=ts">
								<img class="redes-sociais"src="imagens/Rodape30.png"/>
							</a>
							
						</div>
					</footer>
				</section>
			</section>
		</body>
	</html>