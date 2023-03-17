<?php 
include "../controller/UsuarioController.php";

if(!empty($_POST)){
    $usuario = new UsuarioController();
    $usuario->salvar($_POST);
}

//$conn->inserir("usuario", ["nome"=>"Leticia", "telefone"=>"49 992001273"]);


?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form action="UsuarioForm.php" method="POST">
        <label >Nome</label><br>
        <input type="text" name="nome"><br>
        <label >Telefone</label><br>
        <input type="text" name="telefone"><br>

        <input type="submit" value="Salvar"/>
    </form>
    
  </body>
</html>