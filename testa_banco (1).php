<?php

    $localhost = ("localhost"); //Host MySQL
	$root = ("root"); //Usu�rio
	$pass = (""); // Senha do acesso ao banco
    $banco = ("denan241_designBarueri"); // Nome do banco

	//Conex�o com o banco de dados

	$_con = @mysql_connect($localhost,$root,$pass);

	if($_con===false)
	{
	echo "N�o foi poss&iacute;vel conectar ao MySQL" . mysql_error();
	exit;
	}

	// 1 verdade - 0  falso
	if (mysql_select_db($banco,$_con)==0)
	{
	echo "N�o foi poss&iacute;vel conectar ao banco de dados <br>" . mysql_error();
	exit;
	}
	echo "Conex&atilde;o Estabelecida";
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
?>