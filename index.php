<?php

$Prenom = array ('Hugo');
$Nom = array ('Ratel');
$Adresse = array ('75 Chaussée du Roy');
$CodePostal= array ('76113');
$Ville = array ('Sahurs');
$Email = array ('hugo@gmail.com');
$Telephone = array ('0700000000');
$date = array('1998-07-22');


for ($numero = 0; $numero < 1; $numero++)
{
    echo  '<ul>' . '<li>' .'<b>'.'Prenom :'.'</b>' . ' ' . $Prenom[$numero] .'<li>'.'<b>'.'Nom :'.'</b>' . ' ' .
        $Nom[$numero] .'<li>'.'<b>'.'Adresse :'.'</b>' . ' ' . $Adresse[$numero] .'<li>'.'<b>'.'Code Postale :'.'</b>' . ' ' .
        $CodePostal[$numero] .'<li>'.'<b>'.'Ville :'.'</b>' . ' ' . $Ville[$numero] .'<li>'.'<b>'.'Téléphone :'.'</b>' . ' ' .
        $Telephone[$numero] .'<li>'.'<b>'.'Email :'.'</b>'.' '.$Email[$numero].'<li>'.'<b>'.'Date de Naissance :'.'</b>' . ' ' . $date[$numero] .'<ul/>';
}
?>