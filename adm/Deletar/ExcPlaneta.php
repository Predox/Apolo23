<?php
  $Codigo = $_POST['Cod'];

  if(! empty($Codigo))
  { $idConexao = mysqli_connect('localhost', 'id22074777_apolo23', 'Apolo#23');
    
  if($idConexao){
     mysqli_select_db($idConexao,'id22074777_apolo23');
    
       $Comando = "DELETE FROM planetas WHERE CodPlaneta LIKE '$Codigo';";
       $Resultado = mysqli_query($idConexao, $Comando);
    
       mysqli_close($idConexao);
       header('Location: ExcPlaneta.html');
    }
    else
    { Echo 'Erro na conexão com o servidor do banco.';
    }     
  }
?>