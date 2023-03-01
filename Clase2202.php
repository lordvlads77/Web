<?php
$comida = "Soy un taquito de chicharron";
echo "hola <br/>".$comida;

$colores = array(
    "colores",
    "Rojo",
    "verde",
    "azul",
    "naranja",
);

/*count($colores);
$total = count($colores);
foreach($colores as$color)
{

};*/
foreach ($colores as $key => $color) {
    echo($color);
}

?>