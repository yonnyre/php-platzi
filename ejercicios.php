<?php
$arreglo = [

'keyStr1' => 'lado',
0 => 'ledo',

'keyStr2' => 'lido',
1 => 'lodo',
2 => 'ludo'

];

foreach ($arreglo as $element){
    echo "$element, " ;
}
echo "<br /> decirlo al reves lo dudo <br />";
foreach (array_reverse($arreglo) as $element){
    echo "$element, ";
}
echo "<br /> ¡Que trabajo me ha costado! <br />";

$places = [
    'Peru' => [
        'Lima',
        'Tarma',
        'Junin'
    ],
    'Colombia' => [
        'Bogota',
        'Cartagena',
        'Medellin'
    ],
    'Japón' => [
        'Tokio',
        'Nagasaki',
        'Osaka'
    ],
    'Alemania' => [
        'Berlín',
        'Múnich',
        'Bremen'
    ],
    'Tailandia' => [
        'Bangkok',
        'Chiang Mai',
        'Sukhothai '
    ]
];
foreach ($places as $country => $cities){
    echo "$country <br />";
    if(is_array($cities)){
        foreach($cities as $city){
            echo"- $city <br />";
        }
    }

}

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
rsort($valores); // Acomoda el arrego de mayor a menor
echo "<br>";
echo "Los tres valores mas altos son: ";
for ($i=0; $i < 3; $i++) { 
	echo "$valores[$i] ";
}
echo "<br>";
echo "Los tres valores mas bajos son: ";
$tam = count($valores); // Manda el tamaño del arreglo
for ($i=1; $i < 4; $i++) { 
	echo " ".$valores[($tam - $i)];
}

?>