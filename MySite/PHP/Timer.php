<?php
$a = date('H');
if ($a>10 && $a<22){
    echo '<link rel="stylesheet" href="../Styles/Styles_Day" type="text/css" media="screen">';
}elseif ($a>22){
    echo '<link rel="stylesheet" href="../Styles/Styles_Night" type="text/css" media="screen">';
}
