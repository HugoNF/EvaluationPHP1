<?php

//Variables
$Prenom = array ('Hugo');
$Nom = array ('Ratel');
$Adresse = array ('75 Chaussée du Roy');
$CodePostal= array ('76113');
$Ville = array ('Sahurs');
$Email = array ('hugo@gmail.com');
$Telephone = array ('0700000000');
$date = array ('1998-07-22');

//Boucle
for ($tableau = 0; $tableau < 1; $tableau++)
{
    echo  '<ul>' . '<li>' .'<b>'.'Prenom :'.'</b>' . ' ' . $Prenom[$tableau] .'<li>'.'<b>'.'Nom :'.'</b>' . ' ' .
        $Nom[$tableau] .'<li>'.'<b>'.'Adresse :'.'</b>' . ' ' . $Adresse[$tableau] .'<li>'.'<b>'.'Code Postale :'.'</b>' . ' ' .
        $CodePostal[$tableau] .'<li>'.'<b>'.'Ville :'.'</b>' . ' ' . $Ville[$tableau] .'<li>'.'<b>'.'Téléphone :'.'</b>' . ' ' .
        $Telephone[$tableau] .'<li>'.'<b>'.'Email :'.'</b>'.' '.$Email[$tableau].'<li>'.'<b>'.'Date de Naissance :'.'</b>' . ' ' . $date[$tableau] .'<ul/>';
}
?>