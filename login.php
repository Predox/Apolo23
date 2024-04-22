<?php
$nome = $_POST['user'];
$senha = $_POST['senha'];

$idConexao = mysqli_connect('localhost', 'id22074777_apolo23', 'Apolo#23');
  if($idConexao){
     mysqli_select_db($idConexao,'id22074777_apolo23');
     mysqli_query($idConexao,"SET NAMES 'utf8'");
     mysqli_query($idConexao,'SET character_set_connection=utf8');
     mysqli_query($idConexao,'SET character_set_client=utf8');
     mysqli_query($idConexao,'SET character_set_results=utf8');
     $Comando2 = "SELECT * FROM administrador WHERE NomeADM = '$nome' AND Senha = '$senha'";
     $Resultado2 = mysqli_query($idConexao,$Comando2);
     $quantidade2 = $Resultado2->num_rows;
     if($quantidade2 == 1){
         header("location: adm.html");
         mysqli_close($idConexao); 
     }
     $Comando = "SELECT * FROM usuario WHERE NomeUsuario = '$nome' AND senha = '$senha'";
     $Resultado = mysqli_query($idConexao,$Comando);
     $quantidade = $Resultado->num_rows;
     if($quantidade == 1){
         header("location: PaginaInicial.html");
     }else{
         header("location: indexErro.html");
     }
     mysqli_close($idConexao);  
  }else{ 
    echo 'Erro na conexão com o servidor do banco.';
  }
      

?>