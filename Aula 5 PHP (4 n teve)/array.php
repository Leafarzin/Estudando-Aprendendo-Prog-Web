<!DOCTYPE html>
<html>
   <body>          
      <h3>Array</h3>
      <?php
         $frutas = array("Abacate", "Uva", "Limão");         
         $minhaFruta = $frutas[1];   // Uva         
         $fTam = count($frutas);     // Informa o total de elementos no array         
         echo "<p>Minha fruta = " . $minhaFruta . "</p>";         
         echo "<p>Total de frutas = " . $fTam . "</p>";      
         $text = "<ul>";         
         for ($i = 0; $i < $fTam; $i++) {// For que percorre o array e         
         $text .= "<li>" . $frutas[$i] . "</li>";   // monta o HTML de lista         
         }
         
         $text .= "</ul>";  // finaliza o HTML de lista         
         echo $text;        // Mostra lista de frutas         
      ?>
   </body>
</html>