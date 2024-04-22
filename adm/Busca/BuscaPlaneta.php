<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca por Planetas</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit&family=Poppins:wght@300&display=swap');
        @font-face{
            font-family: 'Milk';
            src: url('/midia/Fonts/LEMONMILK-MediumItalic.otf') format(opentype);
        }
        
        *{
            margin: 0;
            padding: 0;
        }    
        
        body{
            background: #000;
            overflow-x: hidden;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        p{
            font-family: 'Poppins';
            color: aliceblue;
            font-size: 1em;
        }

        h1{
            font-family: 'Milk';
            color: aliceblue;
            margin-bottom: 50px;
            font-size: 3em;
        }

        .div{
            border-radius: 30px;
            background: rgba(255, 255, 255, 0.115);
            width: 400px;
            height: auto;
            padding: 50px 0 50px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            transition: .5s;
        }

        .div:hover{
            scale: 1.01;
            transition: .5s;
        }

        input{
            font-family: 'Poppins';
            border-radius: 10px;
            border-style: none;
            height: 30px;
            margin-bottom: 20px;
            width: 60%;
            padding-left: 10px;
            transition: .5s;
        }
        input[type='submit']{
            font-size: 16px;
            width: 60%;
            height: 40px;
        }
        input[type='submit']:hover{
            box-shadow: 0 0 0 0;
            outline: 0;
            scale: 1.05;
            box-shadow: 0 5px 15px rgba(255,255,255,0.5);
            transition: 0.5s;
        }

        video{
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            filter: opacity(50%);
            object-fit: cover;
        }

        @media (max-width: 600px) {
            .div{
                scale: 0.8; 
                transition: .5s;
            } 
        }

    </style>
</head>
<body>
    <style>
        #voltar{
            position: absolute;
            top: 30px;
            left: 10px;
            filter: invert();
        }
    </style>
    <a href="/adm.html" id="voltar">
        <img src="seta-esquerda.png" alt="Voltar" width="70px">
    </a>
    <form action="BuscaPlaneta.php" method="post">
        <div class="div">
            <h1>Planetas</h1>
            <input type="text" name="Nome" placeholder="Nome">
            <input type="submit" value="Buscar">
            <?php
            $idConexao = mysqli_connect('localhost', 'id22074777_apolo23', 'Apolo#23');
            
            if ($idConexao) {
                mysqli_select_db($idConexao, 'id22074777_apolo23');
                mysqli_query($idConexao, "SET NAMES 'utf8'");
                mysqli_query($idConexao, 'SET character_set_connection=utf8');
                mysqli_query($idConexao, 'SET character_set_client=utf8');
                mysqli_query($idConexao, 'SET character_set_results=utf8');
            
                if (isset($_POST['Nome'])) {
                    $Nome = $_POST['Nome'];
                    $Comando = "SELECT * FROM planetas WHERE Nome LIKE '%$Nome%'";
                    $Resultado = mysqli_query($idConexao, $Comando);
            
                    if ($Resultado->num_rows == 0) {
                        echo '<p>Informação não encontrada.</p>';
                    } else {
                        while ($Busca = mysqli_fetch_array($Resultado)) {
                            echo "<p>".$Busca['Nome'] . ' - ' . $Busca['Massa'] . '</p><br>';
                        }
                    }
                } else {
                    echo '<p>Nome não definido.</p>';
                }
            
                mysqli_close($idConexao);
                } else {
                    echo 'Erro na conexão com o servidor do banco.';
                }
            ?>
        </div>
        
    </form>
    <video autoplay muted loop="true" src="/midia/FundoLogin.mp4"></video>
</body>
</html>