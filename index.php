<?php 

require_once("config.php"); 

//carrega um usuario
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("Ed");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "");
//echo $usuario;

//$sql = new Sql();
//$usuarios=$sql->select("SELECT *  FROM tbusuarios");
//echo json_encode($usuarios);

//Criando um novo usuario
//$aluno = new Usuario("Aluno","@lu0");
//$aluno->insert();
//echo $aluno;

//Update um usuario
//$usuario = new Usuario();
//$usuario->loadById(10);
//$usuario->update("professor", "!@#$%$#");
//echo $usuario;

//DELETE
$usuario = new Usuario();
$usuario->loadById(19);
$usuario->delete();
echo $usuario;
?>

