<?php 

require_once("config.php");

//Carrega um usuario
// $root = new Usuario();

// $root-> loadById(3);

// echo $root;

//Carrega uma lista de usuarios
// $lista = Usuario::getList();

// echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login

// $search = Usuario::search("jo");

// echo json_encode($search);

//Carrega um usuario usando o login e a senha
// $usuario = new Usuario();
// $usuario->login("root","!@#$123");

// echo $usuario;

//Criando um novo usuário
// $aluno = new Usuario("aluno","@aluno");

// $aluno->insert();

// echo $aluno;
//Alterar um usuario

// $usuario = new Usuario();

// $usuario->loadById(30);

// $usuario->update("professor", "!@##$%");

// echo $usuario;

$usuario = new Usuario();

$usuario->loadById(22);

$usuario->delete();

echo $usuario;

 ?>