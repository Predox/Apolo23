<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/PaginaInicial.css">
    <link rel="shortcut icon" href="midia/LogoW.png" type="image/x-icon">
    <title>Formulas</title>
    <style>
        #Formula{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: auto;
            padding: 20px 0 20px 0;
        }
        
        .result{
            font-family: 'Montserrat', sans-serif;
            font-size: 1em;
            color: aliceblue;
        }
        
        #GU{
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        #GU input{
            margin: 0 0 30px 0;
            border-radius: 10px;
            border: 0 solid;
            padding: 0 0 0 10px;
            border-style: none;
            width: 300px;
            height: 20px;
            padding: 7px;
        }
        
        #GU input[type="submit"]{
            height: 45px;
            margin-top: 30px; 
            background: rgba(32, 35, 38, 0);
            border: 2px solid var(--cor);
            color: var(--cor);
            font-family: 'Josefin Sans', sans-serif;
            font-size: 26px;
            transition: 0.5s; 
        }
        
        #GU input[type="submit"]:hover{
            background-color: var(--cor);
            color: var(--cor5);
            box-shadow: 0 5px 15px rgba(255,255,255,0.5);
            transition: 0.5s;
        }
        
        #GU input:hover{
            box-shadow: 0 0 0 0;
            outline: 0;
            scale: 1.05;
            box-shadow: 0 5px 15px rgba(255,255,255,0.5);
            transition: 0.8s;
        }
        
        #GU input:focus{
            box-shadow: 0 0 0 0;
            outline: 0;
            scale: 1.05;
            box-shadow: 0 5px 15px rgba(255,255,255,0.5);
            transition: 0.8s;
        }
        
        table {
            border-collapse: collapse;
            width: 50vw;
            padding: 20px;
        }

        table, th, td {
            text-align: center;
            border: 1px solid #fff;
            color: #fff;
            font-family: 'Montserrat', sans-serif;
        }
        
        th, td {
            height: 60px;
        }
        
        #explicacao-gravitacao {
            font-family: 'Montserrat', sans-serif;
            padding: 20px;
            width: 70%;
            color: aliceblue;
        }

        #explicacao-gravitacao h2 {
            margin: 100px 0 40px 0;
            text-align: center;
            font-size: 1.5em;
        }

        #explicacao-gravitacao p {
            font-size: 1.2em;
            line-height: 1.8;
            margin: 20px 0 0 0;
            
        }
    </style>
</head>
<body>
    <div id="header-elem">
        <a href="PaginaInicial.html">
            <img src="midia/LogoW.png" alt="Logo" width="35px">
        </a>
        <div id="header-elem-dir">
            <a href="PaginaInicial.html">
                <img src="midia/mundo.svg" alt="Planetas" width="35px">
            </a>
            <a href="fisica.html">
                <img src="midia/Fisica.svg" alt="fisica" width="35px">
            </a>
            <a href="javascript:window.location.replace('index.html')">
                <img src="midia/LogOut.svg" alt="Sair" width="35px">
            </a>
        </div>
    </div>
    
    <div id="sub-titulo">
        <h2>Fórmulas</h2>
    </div>
    <div id="Formula">
                <h2>Lei da Gravitação Universal</h2>
        <form action="gravitacao.php" method="post">
            <div id="GU">
                <input type="text" name='Massa1' placeholder="Massa1 [Kg]">
                <input type="text" name='Massa2' placeholder="Massa2 [Kg]">
                <input type="text" name='Distancia' placeholder="Distância [M] (Entre os Centros)">
                <?php
                    if(isset($_POST['Massa1']) && isset($_POST['Massa2']) && isset($_POST['Distancia'])) {
                        $massa1 = $_POST['Massa1'];
                        $massa2 = $_POST['Massa2'];
                        $distancia = $_POST['Distancia'];
                        $gravidade = 6.6743*pow(10, -11);
                
                        if($distancia != 0) {
                            $Forca = (($gravidade)*$massa1*$massa2)/pow($distancia, 2);
                            echo "<p class='result'>A força gravitacional é: " . $Forca . "</p>";
                        } else {
                            echo "<p class='result'>A distância não pode ser zero.</p>";
                        }
                    } else {
                        echo "<p class='result'>Por favor, forneça valores para Massa1, Massa2 e Distancia.</p>";
                    }
                ?>
                <input type="submit" value="Calcular">
                
            </div>
        </form>
                <table border="1">
                   <thead>
                   <tr>
                       <th>N°</th>
                       <th>Imagem</th>
                       <th>Planeta</th>
                       <th>Massa</th>
                   </tr>
                   </thead>
                   <tbody>
                   <tr>
                       <td>1</td>
                       <td><img src="midia/Planetas/mercurio.png" width='40px'></img></td>
                       <td>Mercúrio</td>
                       <td>3.30^23</td>
                   </tr>
                   <tr>
                       <td>3</td>
                       <td><img src="midia/Planetas/terra.png" width='40px'></img></td>
                       <td>Terra</td>
                       <td>5.97^24</td>
                   </tr>
                   <tr>
                       <td>4</td>
                       <td><img src="midia/Planetas/marte.png" width='40px'></img></td>
                       <td>Marte</td>
                       <td>6.42^23</td>
                   </tr>
                   <tr>
                       <td>5</td>
                       <td><img src="midia/Planetas/jupiter.png" width='40px'></img></td>
                       <td>Júpiter</td>
                       <td>1.90^27</td>
                   </tr>
                   <tr>
                       <td>6</td>
                       <td><img src="midia/Planetas/saturno.png" width='40px'></img></td>
                       <td>Saturno</td>
                       <td>5.69^26</td>
                   </tr>
                   <tr>
                       <td>7</td>
                       <td><img src="midia/Planetas/urano.png" width='40px'></img></td>
                       <td>Urano</td>
                       <td>8.7^25</td>
                   </tr>
                   <tr>
                       <td>8</td>
                       <td><img src="midia/Planetas/netuno.png" width='40px'></img></td>
                       <td>Netuno</td>
                       <td>1.03^26</td>
                   </tr>
                   </tbody>
                </table>
                
        <div id="explicacao-gravitacao">
            <h2>Entendendo a Lei da Gravitação Universal</h2>
            <p>A Lei da Gravitação Universal, proposta por Sir Isaac Newton, descreve a força de atração entre duas massas de objetos. Essa força é diretamente proporcional ao produto das massas e inversamente proporcional ao quadrado da distância entre os centros das massas.</p>

            <p>Em termos simples, a fórmula matemática para calcular a força gravitacional (F) é:</p>
            <p class="result">F = G * (m1 * m2) / d^2</p>

            <strong><p>Onde:</p></strong>
            <ul>
                <li><strong>F</strong> é a força gravitacional entre as massas;</li>
                <li><strong>G</strong> é a constante gravitacional;</li>
                <li><strong>m1 e m2</strong> são as massas dos objetos;</li>
                <li><strong>d</strong> é a distância entre os centros das massas.</li>
            </ul>

            <p>A Lei da Gravitação Universal tem implicações significativas em nosso entendimento do movimento dos planetas ao redor do Sol, bem como na dinâmica de sistemas estelares e galáxias. Por exemplo, é essa força que mantém a Lua orbitando a Terra e a Terra orbitando o Sol.</p>
            
            <p> Além disso, a Lei da Gravitação Universal foi uma contribuição crucial para a unificação das leis da física, pois demonstrou que a mesma força que faz uma maçã cair de uma árvore é responsável pela órbita dos planetas ao redor do Sol. Antes da formulação de Newton, as leis que governavam o movimento na Terra e no céu eram tratadas separadamente.</p>
            
            <p>Essa lei revolucionou a compreensão da natureza e estabeleceu as bases para muitos desenvolvimentos subsequentes na física. Ela permanece como um pilar essencial em nosso entendimento do cosmos e influenciou diretamente teorias posteriores, como a Teoria da Relatividade de Albert Einstein, que fornece uma descrição mais completa do comportamento gravitacional em escalas cósmicas extremas. Em suma, a Lei da Gravitação Universal é uma pedra angular na compreensão da interação entre massas no vasto e complexo panorama do universo.</p>
        </div>
    </div>
</body>
</html>