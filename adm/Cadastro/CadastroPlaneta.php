<?php
  $Codigo = $_POST['Cod'];
  $Nome = $_POST['Nome'];
  $Massa = $_POST['Massa'];

  if(! empty($Codigo))
  { $idConexao = mysqli_connect('localhost', 'id22074777_apolo23', 'Apolo#23');
    
  if($idConexao){
     mysqli_select_db($idConexao,'id22074777_apolo23');
    
       $Comando = "Insert into planetas(CodPlaneta, Nome, Massa) ".
                  "Values('$Codigo', '$Nome', '$Massa')";
       $Resultado = mysqli_query($idConexao, $Comando);
    
       mysqli_close($idConexao);
       header('Location: CadPlaneta.html');
    }
    else
    { Echo 'Erro na conexão com o servidor do banco.';
    }     
  }
  else
  { include('CadPlaneta.html');
    echo "<script>alert('Por favor informe a Código primeiro.');</script>";
  }
?>