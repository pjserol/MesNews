<?php

require 'Modele/modele.php';

try {
    // On appel la fonction getNews pour stocker la liste des news
    $news = getNews();
    require 'Vue/listeNews.php';
} // Dans le cas, où la fonction retourne une erreur, on affiche le message d'erreur
catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'Vue/erreur.php';
}