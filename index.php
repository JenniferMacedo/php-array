<?php 
     include "header.php"; 
     include "dados.php";
     
     //echo "<pre>"
    // print_r($series);
     //echo "</pre>"
     
?>
<main>
  <h1>Séries em Destaque:</h1>
  <div class="grid">
    <?php
        $i = 0;
        shuffle($series);
         foreach( $series as $series) {

          $i++;
          if ($i > 4 ) break; 

          $id = $series["id"];
          $nome = $series["nome"];
          $imagem = $series["imagem"];

          echo "<div class='coluna'>
            <img src='imagens/{$imagem}'>
            <p><strong>{$nome}</strong></p>
            <p>
                <a href=' serie.php?id={$id}'>
                Detalhes
                </a>
            </p>
          </div>";
            
         }
    ?>
  </div>

</main>
<?php include "footer.php"; ?>
    
