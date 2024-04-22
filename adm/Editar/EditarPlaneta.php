<?php
  $Codigo = $_POST['Cod'];
  $Nome = $_POST['Nome'];
  $Massa = $_POST['Massa'];

  if(! empty($Codigo))
  { $idConexao = mysqli_connect('localhost', 'id22074777_apolo23', 'Apolo#23');
    
  if($idConexao){
     mysqli_select_db($idConexao,'id22074777_apolo23');
    
       $Comando = "UPDATE `planetas` SET `Nome`='$Nome',`Massa`='$Massa' WHERE `CodPlaneta`='$Codigo'";
       $Resultado = mysqli_query($idConexao, $Comando);
    
       mysqli_close($idConexao);
       header('Location: EditarPlaneta.html');
    }
    else
    { Echo 'Erro na conexão com o servidor do banco.';
    }     
  }
  else
  { 
    include('EditarPlaneta.html');
    echo "<script>alert('Por favor informe a Código primeiro.');</script>";
  }
?>