<?php 

require_once("config.php"); 

$root=new Usuario();
$root->loadById(2);
echo $root;







//$sql = new Sql();

//$usuarios=$sql->select("SELECT *  FROM tbusuarios");

//echo json_encode($usuarios);

 ?>

