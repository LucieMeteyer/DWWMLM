<?php ob_start()?>


<?php
$content = ob_get_clean();
$titre = "La cuisine de Calcifer";
require "template.php";
