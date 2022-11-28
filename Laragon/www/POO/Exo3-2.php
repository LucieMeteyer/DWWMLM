<?php ob_start() ?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Ville</th>
      <th scope="col">Numero</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>METEYER</td>
      <td>Lucie</td>
      <td>Résidence Orléans, Bat B, Apt 3, Allée de Fréjus</td>
      <td>St-Pol sur mer</td>
      <td>06-41-49-56-08</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>PALM</td>
      <td>Damien</td>
      <td>873 Boulevard Georges Pompidou</td>
      <td>Bray-Dunes</td>
      <td>06-37-02-06-30</td>
    </tr>
  
  </tbody>
</table>


<?php


?>

<?php
$content = ob_get_clean();
$titre = "Exercice 3-2";
require "template.php"
?>