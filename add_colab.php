<?php
require_once "includes/db.php";

$method = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
if ($method === "POST")
{
	$nome   = $_POST['nome'];
	$idade  = $_POST['idade'];
	$email  = $_POST['email'];
	$filial = $_POST['filial'];

	$stmt = $db->prepare("INSERT INTO colaboradores(nome, idade, email, filial) VALUES(:nome, :idade, :email, :filial)");
	$stmt->bindParam(':nome',  $nome);
	$stmt->bindParam(':idade', $idade);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':filial', $filial);
	$stmt->execute();
	
	header("Location: save_msg.php");
}
?>
