<?php

	$nome = $_GET['nome'];
	$data_nascimento = $_GET['data_nascimento'];
	$telefone= $_GET['telefone'];
	$endereco = $_GET['endereco'];
	$email = $_GET['email'];
	$id_aluno = 0;
	include("conecta_aluno.php");
	$sql = "INSERT INTO tb_escola(nome,data_nascimento,telefone,endereco,email)
	VALUES(:parametro1,:parametro2,:parametro3,:parametro4,:parametro5)";
	$stmt = $conexao->prepare($sql);	
	;
	$stmt->bindParam(':parametro1',$nome);
	$stmt->bindParam(':parametro2',$data_nascimento);
	$stmt->bindParam(':parametro3',$telefone);
	$stmt->bindParam(':parametro4',$endereco);
	$stmt->bindParam(':parametro5',$email);
	$rs = $stmt->execute();
	if($rs)
	{
 		echo "<script>alert('Dados Gravados!')</script>";
	}
	else
	{
	echo var_dump($stmt->errorInfo());
	}
  
?>