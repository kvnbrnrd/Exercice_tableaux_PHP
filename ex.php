<?php
// Début Niveau 1
 
echo "Niveau 1".'</p>';
	$ligne1 ['nom'] = 'coucou72'; 
	$ligne1 ['valeur'] = '10';

	$ligne2 ['nom'] = 'vie_oiseau'; 
	$ligne2 ['valeur'] = '15';

	$ligne3 ['nom'] = 'test_value50'; 
	$ligne3 ['valeur'] = '25';

	$ligne4 ['nom'] = 'bonjour'; 
	$ligne4 ['valeur'] = '20';

	$ligne5 ['nom'] = 'arbitraire'; 
	$ligne5 ['valeur'] = '5';


	echo "La valeur de ". $ligne1 ['nom'] . " est de " . $ligne1 ['valeur'] .'</br>';
	echo "La valeur de ". $ligne2 ['nom'] . " est de " . $ligne2 ['valeur'] .'</br>';
	echo "La valeur de ". $ligne3 ['nom'] . " est de " . $ligne3 ['valeur'] .'</br>';
	echo "La valeur de ". $ligne4 ['nom'] . " est de " . $ligne4 ['valeur'] .'</br>';
	echo "La valeur de ". $ligne5 ['nom'] . " est de " . $ligne5 ['valeur'] .'</p>';

// Fin Niveau 1

// Début Niveau 2

echo "Niveau 2".'</p>';

$tableau[0] ['nom'] = 'coucou72'; 
$tableau[0] ['valeur'] = '10';

$tableau[1] ['nom'] = 'vie_oiseau'; 
$tableau[1] ['valeur'] = '15';

$tableau[2] ['nom'] = 'test_value50'; 

$sous_tableau[0] ['nom'] = 'in tab';
$sous_tableau[0] ['valeur'] = 'in tab';

$sous_tableau[1] ['nom'] = 'in_tab1';
$sous_tableau[1] ['valeur'] = 'dans tableau 1';

$tableau[3] ['nom'] = 'bonjour'; 
$tableau[3] ['valeur'] = '20';

$tableau[4] ['nom'] = 'arbitraire'; 
$tableau[4] ['valeur'] = '5';



echo "La valeur de ". $tableau[0] ['nom'] . " est de " . $tableau[0] ['valeur'] .'</br>';
echo "La valeur de ". $tableau[1] ['nom'] . " est de " . $tableau[1] ['valeur'] .'</p>';

echo "Le sous-tableau ". $tableau[2] ['nom'] . " contient : " . '</br>'.
"L'élément ". $sous_tableau[0] ['nom'] . " qui est " . $sous_tableau[0] ['valeur'] .'</br>' .
"L'élément ". $sous_tableau[1] ['nom'] . " qui est " . $sous_tableau[1] ['valeur'] .'</p>' ;

echo "La valeur de ". $tableau[3] ['nom'] . " est de " . $tableau[3] ['valeur'] .'</br>';
echo "La valeur de ". $tableau[4] ['nom'] . " est de " . $tableau[4] ['valeur'] .'</p>';

// Fin Niveau 2

// Début Niveau 3

echo "Niveau 3".'</p>';

$arr = [
	"coucou72" => 10,
	"vie_oiseau" => 15,
	"test_value50" => 25,
	"bonjour" => 20,
	"arbitraire" => 5,
];

$tableau = array_values($arr);
$name = array_keys($arr);



echo "Boucle for :</p>";
for ($i = 0; $i < 5; $i++)
{
echo "La valeur de " . $name[$i] . " " . " est : " . $tableau[$i] . '</br>';
}

// Fin Niveau 3

// Début Niveau 4

echo "</p>Niveau 4".'</p>';

$arr = [
	"coucou72" => 10,
	"vie_oiseau" => 15,
	"test_value50" => 25,
	"bonjour" => 20,
	"arbitraire" => 5,
];


// Fin Niveau 4

// Début Niveau 5

echo "Niveau 5".'</p>';

$arr = [
	"coucou72" => 10,
	"vie_oiseau" => 15,
	"test_value50" => 25,
	"bonjour" => 20,
	"arbitraire" => 5,
];


// Fin Niveau 5


?>