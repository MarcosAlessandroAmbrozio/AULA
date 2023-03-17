<?php 
include "./BD.class.php";

$conn = new BD();

//$conn->inserir("usuario", ["nome"=>"Leticia", "telefone"=>"49 992001273"]);

$conn->remove("usuario",5);

$resultado = $conn->select("usuario");

foreach($resultado as $item){
  echo $item->id . " - ". $item->nome . " - ".$item->telefone."<br>";
}

//var_dunp($resultado);
?>

<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?= '<h1>Messages</h1>'; ?>
    
  </body>
</html>