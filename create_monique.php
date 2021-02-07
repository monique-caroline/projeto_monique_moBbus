					
<?php
include_once("db.php");

if(!empty($_POST))
{

	$nome = $_POST['fnome'];
	$sobrenome = $_POST['fsobrenome'];
	$email = $_POST['femail'];
	$celular = $_POST['fcelular'];
	$genero = $_POST['fgenero'];
	$datanasc = $_POST['fdatanasc'];
	$senha = $_POST['fsenha'];
	
	
	

	$sql = "INSERT INTO denan241_designBarueri.projeto8 (nome, sobrenome, email, celular, genero, datanasc, senha) 
  VALUES 
  ('${nome}','${sobrenome}','${email}','${celular}','${genero}','${datanasc}','${senha}');";

	
$query = $mysqli->query($sql);
 
if ($query){
		echo "<br>Cadastrado com sucesso!";
	}
	else{
    echo "<br>a query eh: $sql";
		echo "<br>Houve um erro no cadastrado !";
	}

}
?>
