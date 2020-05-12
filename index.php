<?php

require_once("config.php");

//Carregando um usuário
//$clarice = new Usuario();
//$clarice->loadbyId(2);
//echo $clarice;

//carregando uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);


//carrega uma lisata de usuarios buscando pelo login
//$search = Usuario::search("a"); 
//echo json_encode($search);

//carrega um usuário usando senha e login
//$usuario = new Usuario;
//$usuario->login("Mariana","123456");
//echo $usuario;

/*usando procedimento de inclusão com metodo insert
$aluno = new Usuario("katia", "k@tia");
$aluno->insert();
echo $aluno; */

/*testando o método update
$usuario = new Usuario();
$usuario->loadById(6);
$usuario->update("Manu","minhalinda");
echo $usuario; */

//Testando método delete()
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->delete();
echo $usuario;

?>