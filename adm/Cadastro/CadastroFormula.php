<?php
  $Codigo = $_POST['Cod'];
  $Nome = $_POST['Nome'];

  if(! empty($Codigo))
  { $idConexao = mysqli_connect('localhost', 'id22074777_apolo23', 'Apolo#23');
    
  if($idConexao){
     mysqli_select_db($idConexao,'id22074777_apolo23');
    
       $Comando = "Insert into formulas(CodFormula, Nome) ".
                  "Values('$Codigo', '$Nome')";
       $Resultado = mysqli_query($idConexao, $Comando);
    
       mysqli_close($idConexao);
       header('Location: CadFormula.html');
    }
    else
    { Echo 'Erro na conexão com o servidor do banco.';
    }     
  }
  else
  { include('CadFormula.html');
    echo "<script>alert('Por favor informe a Código primeiro.');</script>";
  }
?>