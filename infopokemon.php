<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
 
</head>
<body>
           
<header>
        <img class="logo" src="tu_logo.png" alt="Logo">
        <h1>Pokédex</h1>
    </header>
    <main>
       
   
        <div class="pokemon-info">
        <div class="pokemon-image">
            <img src="001.png" alt="Nombre del Pokémon">
        </div>
        <div class="pokemon-details">
            <h2>Bulbasaur</h2>
            <p>Bulbasaur es un Pokémon cuadrúpedo de color verde y manchas más oscuras de formas geométricas. Su cabeza representa cerca de un tercio de su cuerpo. En su frente se ubican tres manchas que pueden cambiar dependiendo del ejemplar. Tiene orejas pequeñas y puntiagudas. Sus ojos son grandes y de color rojo. Las patas son cortas con tres garras cada una. Este Pokémon tiene plantado un bulbo en el lomo desde que nace. Esta semilla crece y se desarrolla a lo largo del ciclo de vida de Bulbasaur a medida que suceden sus evoluciones. El bulbo absorbe y almacena la energía solar que Bulbasaur necesita para crecer. Dicen que cuanta más luz consuma la semilla, más olor producirá cuando se abra. Por otro lado, gracias a los nutrientes que el bulbo almacena, puede pasar varios días sin comer. El bulbo de Bulbasaur le ayuda a defenderse de los enemigos y desde él puede disparar ataques tales como rayo solar y drenadoras entre otros. No es muy raro encontrarlo en jardines y zonas cercanas a fuentes de agua. También suele encontrarse en zonas boscosas profundas. Se los puede atraer con el aroma de las flores. Bulbasaur es omnívoro, aunque si no encuentra comida, su bulbo absorbe la energía del sol para hacer la fotosíntesis y le permite pasar días sin comer. Dicen que en las mañanas su bulbo se abre y atrapa al primer Pokémon que caiga por su irresistible olor.</p>
        </div>
    </div>
    </main>
</body>
<style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            margin: 0;
        }

        main{
            width: 80%;
            margin: 0 auto;
        }

        header {
            background-color: #f44336;
            color: white;
            padding: 20px 0;
        }

        h1 {
            font-size: 36px;
            margin: 0;
        }

        .pokemon-info {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .pokemon-image {
            flex: 1;
            max-width: 300px;
            margin-right: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .pokemon-details {
            flex: 2;
            text-align: left;
        }

        h2 {
            font-size: 24px;
            margin-top: 20px;
        }

        p {
            font-size: 16px;
        }
    </style>
</html>