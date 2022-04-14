<?php
$prenom = array(
	'Mouslim',
	'Rayan',
	'Arslan',
	'Ilies'
);
$strings = array(
    'va bien rentrer chez lui',
    'feras un détour au Chicken Spot',
    'iras faire un baby avant de se rendre chez lui',
    'iras voir les deux fréres des tarterets',
    'auras perdu sa navigo'
);
$transport = array(
	'en bus',
	'en moto',
	'en velo',
	'a pied',
	'a cheval',
);
shuffle($prenom);
shuffle($strings);
shuffle($transport);
echo "Ce soir ".reset($prenom). " " .reset($strings). " et il rentrera de la WAC ".reset($transport). PHP_EOL;
