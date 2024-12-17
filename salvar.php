<?php
$hostname = "localhost";
$bancodedados = "clientes";
$usuario = "root"; 
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

 echo"Conectado ao Banco De Dados";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $fname = isset($_POST['fname']) ? htmlspecialchars($_POST['nome']) : 'Não informado';
    $lname = isset($_POST['lname']) ? htmlspecialchars($_POST['sobrenome']) : 'Não informado';
    $faGhibli = isset($_POST['faGhibli']) ? htmlspecialchars($_POST['SIM']) : 'Não informado';
    $faGhibli2 = isset($_POST['faGhibli2']) ? htmlspecialchars($_POST['Pouco']) : 'Não informado';
    $Filme1 = isset($_POST['Filme1']) ? htmlspecialchars($_POST['Meu Amigo Totoro']) : 'Não informado';
    $Filme2 = isset($_POST['Filme2']) ? htmlspecialchars($_POST['O Castelo Animado']) : 'Não informado';
    $Filme3 = isset($_POST['Filme3']) ? htmlspecialchars($_POST['Ponyo']) : 'Não informado';
    $Filme4 = isset($_POST['Filme4']) ? htmlspecialchars($_POST['Túmulo dos Vagalumes']) : 'Não informado';
    $Filme5 = isset($_POST['Filme5']) ? htmlspecialchars($_POST['A Viagem de Chihiro']) : 'Não informado';
    $Filme6 = isset($_POST['Filme6']) ? htmlspecialchars($_POST['O Serviço de Entregas da Kiki']) : 'Não informado';
    $Filme7 = isset($_POST['Filme7']) ? htmlspecialchars($_POST['Pricesa Mononoke']) : 'Não informado';
    $Filme8 = isset($_POST['Filme8']) ? htmlspecialchars($_POST['O Reino dos Gatos']) : 'Não informado';
    $Filme9 = isset($_POST['Filme9']) ? htmlspecialchars($_POST['As Mémorias de Marnie']) : 'Não informado';
    $Filme10 = isset($_POST['Filme10']) ? htmlspecialchars($_POST['O Conto da Princesa Kaguya']) : 'Não informado';
    $Gostar = isset($_POST['Gostar']) ? htmlspecialchars($_POST['Não gosto muito']) : 'Não informado';
    $Gostar = isset($_POST['Gostar']) ? htmlspecialchars($_POST['AMO']) : 'Não informado';
    $Select = isset($_POST['Select']) ? htmlspecialchars($_POST['Youtube']) : 'Não informado';
    $Select = isset($_POST['Select']) ? htmlspecialchars($_POST['Tiktok']) : 'Não informado';
    $Select = isset($_POST['Select']) ? htmlspecialchars($_POST['Instagram']) : 'Não informado';
    $Select = isset($_POST['Select']) ? htmlspecialchars($_POST['Amigos']) : 'Não informado';
    $Select = isset($_POST['Select']) ? htmlspecialchars($_POST['Familiares']) : 'Não informado';
    $Select = isset($_POST['Select']) ? htmlspecialchars($_POST['Outro']) : 'Não informado';
    $primeiroFilme = isset($_POST['primeiroFilme']) ? htmlspecialchars($_POST['Digite Aqui']) : 'Não informado';
    $ultimoFilme = isset($_POST['ultimoFilme']) ? htmlspecialchars($_POST['Digite Aqui']) : 'Não informado';
    $personagemFavorito = isset($_POST['personagemFavorito']) ? htmlspecialchars($_POST['Digite Aqui']) : 'Não informado';
    $personagemMenosFavorito = isset($_POST['personagemMenosFavorito']) ? htmlspecialchars($_POST['Digite Aqui']) : 'Não informado';
    $color = isset($_POST['color']) ? htmlspecialchars($_POST['Cor']) : 'Não informado';
    $estacao1 = isset($_POST['estacao1']) ? htmlspecialchars($_POST['Verão']) : 'Não informado';
    $estacao2 = isset($_POST['estacao2']) ? htmlspecialchars($_POST['Inverno']) : 'Não informado';
    $estacao3 = isset($_POST['estacao3']) ? htmlspecialchars($_POST['Outono']) : 'Não informado';
    $estacao4 = isset($_POST['estacao4']) ? htmlspecialchars($_POST['Primavera']) : 'Não informado';
    
    
    // Verifica se 'temas' é um array antes de usar implode()
    $temas = isset($_POST['temas']) && is_array($_POST['temas']) ? implode(', ', $_POST['temas']) : 'Nenhum tema selecionado';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <h1>Informações Recebidas</h1>
    </header>

 ,
    <nav>
        <ul>
            <li><a href="index2.html">Desenvolvedores</a></li>
            <li><a href="index.html">Formulário</a></li>
          
        </ul>
    </nav>

    <div class="container">
        
        <p><strong>nome:</strong> <?php echo $fname; ?></p>
        <p><strong>sobrenome:</strong> <?php echo $lname; ?></p>
        <p><strong>SIM:</strong> <?php echo $faGhibli; ?></p> 
        <p><strong>Pouco:</strong> <?php echo $faGhibli; ?></p>
        <p><strong>Meu Amigo Totoro:</strong> <?php echo $Filme1; ?></p>
        <p><strong>O Castelo Animado:</strong> <?php echo $Filme2; ?></p>
        <p><strong>Ponyo:</strong> <?php echo $Filme3; ?></p>
        <p><strong>Túmulo dos Vagalumes:</strong> <?php echo $Filme4; ?></p>
        <p><strong>A Viagem de Chihiro:</strong> <?php echo $Filme5; ?></p>
        <p><strong>O Serviço de Entregas da Kiki:</strong> <?php echo $Filme6; ?></p>
        <p><strong>Princesa Mononoke:</strong> <?php echo $Filme7; ?></p>
        <p><strong>O Reino dos Gatos:</strong> <?php echo $Filme8; ?></p>
        <p><strong>As Mémorias de Marnie:</strong> <?php echo $Filme9; ?></p>
        <p><strong>O Conto da Princesa Kaguya:</strong> <?php echo $Filme10; ?></p>
        <p><strong>Não Gosto Muito:</strong> <?php echo $Gostar; ?></p>
        <p><strong>AMO:</strong> <?php echo $Gostar; ?></p>
        <p><strong>Youtube:</strong> <?php echo $Section; ?></p>
        <p><strong>Tiktok:</strong> <?php echo $Section; ?></p>
        <p><strong>Instagram:</strong> <?php echo $Section; ?></p>
        <p><strong>Amigos:</strong> <?php echo $Section; ?></p>
        <p><strong>Familiares:</strong> <?php echo $Section; ?></p>
        <p><strong>Outro:</strong> <?php echo $Section; ?></p>
        <p><strong>Digite Aqui:</strong> <?php echo $primeiroFilme; ?></p>
        <p><strong>Digite Aqui:</strong> <?php echo $ultimoFilme; ?></p>
        <p><strong>Digite Aqui:</strong> <?php echo $personagemFavorito; ?></p>
        <p><strong>Digite Aqui:</strong> <?php echo $personagemMenosFavorito; ?></p>
        <p><strong>Cor:</strong> <?php echo $color; ?></p>
        <p><strong>Verão:</strong> <?php echo $estacao1; ?></p>
        <p><strong>Inverno:</strong> <?php echo $estacao2; ?></p>
        <p><strong>Outono:</strong> <?php echo $estacao3; ?></p>
        <p><strong>Primavera:</strong> <?php echo $estacao4; ?></p>

    </div>

    <footer>
    <p>IFRN Santa Cruz</p>
    <p>Disciplina: Autoria Web</p>
    <p>Professor: Marcelo Junior</p>
        
    </footer>
</body>
</html>
