<html lang="pt-br">

  <head>
    <title>Pokedex</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="icon" type="image/png" href="favicon.png">
    <meta charset="UTF-8">
    <script src="jquery-3.6.0.js"></script>
    <?php
    include("fontes.php");
    ?>

  </head>

  <body>
    <img class="logo" src="logo.png" width="330" height="170">

    <div class="opcoes-pokemon-lista">
      <a href="#Pikachu"><div class="lista-box-1">
        <img class="lista-pokemon-icon" src="pikachu.png" width="40" height="40" alt="Pikachu">
        
        <div class="lista-pokemon-nome-box">
          Pikachu
        </div>
      </div></a>

      <a href="#Squirtle"><div class="lista-box-2">
        <img class="lista-pokemon-icon" src="squirtle.png" width="40" height="40" alt="Squirtle">
        
        <div class="lista-pokemon-nome-box">
          Squirtle
        </div>
      </div></a>

      <a href="#Eevee"><div class="lista-box-3">
        <img class="lista-pokemon-icon" src="eevee.png" width="40" height="40" alt="Eevee">
        
        <div class="lista-pokemon-nome-box">
          Eevee
        </div>
      </div></a>
    </div>

    <div class="card-pokemon-lista">
      <div class="card-box-1">
        <div class="capa-card-1">
          <img class="pokemon-capa" src="pikachu card.png" width="300" height="300">
          <font class="pokemon-id">#01</font>
        </div>

        <font class="pokemon-bio">
          <br><span class="pokemon-tipo">Tipo: Eletrico</span></br>
          <br>Pikachu é um Pokémon do tipo elétrico introduzido na primeira geração. É o Pokémon mais conhecido da história</br>
        </font>
      </div>

      <div class="card-box-2">
        <div class="capa-card-2">
          <img class="pokemon-capa" src="squirtle card.png" width="300" height="300">
          <font class="pokemon-id">#02</font>
        </div>

        <font class="pokemon-bio">
          <br><span class="pokemon-tipo">Tipo: Água</span></br>
          <br>Squirtle é um Pokémon do tipo Água introduzido na Geração 1. É um dos Pokémon iniciais que pode ser escolhidos pelos treinadores que iniciam sua aventura na região de Kanto, junto com Bulbasaur e Charmander.</br>
        </font>
      </div>

      <div class="card-box-3">
        <div class="capa-card-3">
          <img class="pokemon-capa" src="eevee card.png" width="300" height="300">
          <font class="pokemon-id">#03</font>
        </div>

        <font class="pokemon-bio">
          <br><span class="pokemon-tipo">Tipo: Normal</span></br>
          <br>Eevee é conhecido como "Pokémon Evolução", por ter a capacidade de evoluir em diferentes tipos de Pokémon, dizem que sua estrutura genética é irregular, permitindo ter essa habilidade de evolução.</br>
        </font>
      </div>
    </div>

    <!-- jQuery Codigos -->
    <script>
      $(".lista-box-1").click(function(){
        $(".card-box-1").toggle();
      });

      $(".lista-box-2").click(function(){
        $(".card-box-2").toggle();
      });

      $(".lista-box-3").click(function(){
        $(".card-box-3").toggle();
      });

      $(".lista-box-1").click(function(){
        $(".card-box-2").hide();
      });

      $(".lista-box-1").click(function(){
        $(".card-box-3").hide();
      });

      $(".lista-box-2").click(function(){
        $(".card-box-1").hide();
      });

      $(".lista-box-2").click(function(){
        $(".card-box-3").hide();
      });

      $(".lista-box-3").click(function(){
        $(".card-box-1").hide();
      });

      $(".lista-box-3").click(function(){
        $(".card-box-2").hide();
      });
    </script>

    <footer>
      Feito por <a href="http://vitorcunha.rf.gd/">Vitor Cunha</a> com ❤️
    </footer>

  </body>

</html>