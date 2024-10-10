<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hollow Knight | Itens</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="icon.ico"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    
    <style>
        body {
            background-image: url('background.png'); 
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            height: 100vh;
        }
    </style>
</head>
<body>
    <header>
        <img src="itenshn.png" alt="logo itens" style="width: 400px; height: 164; ">
        <nav>
            <ul>
                <li><a class="glow" style="font-size: 32px;" href="index.html">Sobre Hollow Knight</a></li>
                <li><a class="glow" style="font-size: 32px; margin-inline: 25px;" href="itens.php">Itens do Jogo</a></li>
                <li><a class="glow" style="font-size: 32px;" href="alunos.html">Nomes dos Alunos</a></li>
            </ul>
        </nav>
    </header>
    <main>

        <section>
            <img src="top1.png" style="display: block; margin: 0 auto;">

            <div id = "itens-container"> 
                
                <div class="item">
                <img src="pure.jpg" alt="Ferroes" style="width=: 22px; height: 100px">
                <h3> Ferrões </h3>
                <p>Ferrões são as armas utilizadas pelo Cavaleiro.</p>
                </div>

                <div class="item">
                <img src="mask.jpg" alt="Ferroes" style="width=: 100px; height: 100px">
                <h3> Máscara de Vida </h3>
                <p>Máscara de Vida aumenta a vida do Cavaleiro, permitindo que ele suporte mais dano.</p>
                </div>

                <a href="amuletos.php">
                <div class="item">
                <img src="amu.jpg" alt="Ferroes" style="width=: 100px; height: 100px">
                <h3> Amuletos </h3>
                <p>Amuletos são um tipo de Item especial em Hollow Knight que dão vários bônus e habilidades especiais.
                </p>
                </div>
                </a>
            </div>

            <img src="top2.png" style="display: block; margin: 0 auto; margin-bottom: 1px; ">

        </section>

    </main>
    <footer>
        <p>&copy; 2024 Fatec Games </p>
    </footer>
    
</body>
</html>