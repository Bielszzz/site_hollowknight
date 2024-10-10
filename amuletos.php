<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hollow Knight | Amuletos</title>
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
            background-size: cover;
        
        }
    </style>
</head>
<body>
    <header>
        <img src="itensamuhn.png" alt="logo itens" style="width: 400px; height: 164; ">
        <nav>
            <ul>
                <li><a class="glow" style="font-size: 32px;" href="index.html">Sobre Hollow Knight</a></li>
                <li><a class="glow" style="font-size: 32px; margin-inline: 25px;" href="itens.php">Itens do Jogo</a></li>
                <li><a class="glow" style="font-size: 32px;" href="alunos.html">Nomes dos Alunos</a></li>
            </ul>
        </nav>
    </header>
    <main>

        </section>

        <section>
        <img src="top1.png" style="display: block; margin: 0 auto;">
            <div id="itens-container" style = "margin-left: 200px; margin-right: 200px;">
            
    <?php

    $data = '{"item": '.

    '[
        {
          "name": "Bússola Caprichosa",
          "description": "Sussurra sua localização ao portador sempre que o mapa estiver aberto, permitindo que os aventureiros identifiquem sua localização atual.",
          "image": "1.jpg"
        },'.
        
        '{
          "name": "Enxame de Colecionadores",
          "description": "um enxame seguirá o portador e coletará quaisquer Geo deixado no chão.",
          "image": "2.jpg"
        },'.

        '{
          "name": "Apanhador de Almas", 
          "description": "Aumenta a quantidade de ALMA recebida quando um oponente é atingido com o ferrão.",
          "image": "3.jpg"
        },'.
        
        '{
            "name": "Carapaça Robusta", 
            "description": "Aumenta a resistência. Ao se recuperar de danos, o portador permanecerá invulnerável por mais tempo..",
            "image": "4.jpg"
          },'.
          
        '{
            "name": "Pedra do Xamã", 
            "description": "Aumenta o poder das magias, causando mais dano aos oponentes.",
            "image": "5.jpg"
          },'.
          
        '{
            "name": "Devorador de Almas", 
            "description": "Aumenta consideravelmente a quantidade de alma recebida quando um oponente é atingido com o ferrão.",
            "image": "6.jpg"
          },'.
          
        '{
            "name": "Mestre da Esquiva", 
            "description": "O portador será capaz de esquivar mais frequentemente.",
            "image": "7.jpg"
          },'.
          
        '{
            "name": "Mestre da Corrida", 
            "description": "Aumenta a velocidade do portador, permitindo que ele evite perigo ou supere rivais.",
            "image": "8.jpg"
          },'.


        '{
          "name": "Canção das Larvas", 
          "description": "Recebe alma sempre que dano for recebido.",
          "image": "9.jpg"
        },'.

        '{
          "name": "Elegia da Larvamosca", 
          "description": "Quando o portador está com a vida cheia, ele lançará feixes de energia branca através de seu ferrão.",
          "image": "10.jpg"
        }'.
    

    ']}'; 

    $jsonobj = json_decode($data);
    $item = $jsonobj->item;


    foreach ( $item as $e )
        {
                
                echo '<div class="item">'; 
                echo '<img src="' . $e->image . '">';
                echo '<h3>' . $e->name . '</h3>';
                echo '<p>' . $e->description . '</p>';
                echo '</div>';
        } 
    ?>
            </div>
            <img src="top2.png" style="display: block; margin: 0 auto;">
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Fatec Games </p>
    </footer>
    
</body>
</html>