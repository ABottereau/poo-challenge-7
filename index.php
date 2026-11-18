<?php
include_once 'Personne.php';

$a = new Personne('Bottereau', 'Antoine', '5 rue du clocher 75000 Paris', '08-04-1994');

echo $a->getInfos();

$a->setAdresse('5 rue des invalides 54268 Limoges');

echo $a->getInfos();
echo 'La personne a ' . $a->getAge() . ' ans.';