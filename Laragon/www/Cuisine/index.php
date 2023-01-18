<?php ob_start() ?>

<div style= " background-color : #FEE9B1; border-radius: 35px ;" class="container fs-5 p-3 ">
    <center>
        <p style = "font-family : 'Eagle Lake', cursive;"> Bienvenue dans La cuisine de Calcifer ! <br>
            La nourriture dans les ghiblis vous ont toujours fait baver ? <br>
            Nous aussi ! <br>
            C’est pour ça qu’on a demandé à Calcifer qui nous a gentiment <br>
            référencé les recettes des plats qui nous font tant envie ! <br>
            (il est gentil hein ?)
        </p>
    </center>

</div>

<?php
$content = ob_get_clean();
$titre = "Cuisine de Calcifer";
require "template.php";
