<?php

require 'Modele/modele.php';

try {
    $news = getNews();
    //$lienNews = "newsAccueil.php?id=";  // utilisé pour créer le lien vers un billet
    require 'Vue/listeNews.php';
}
catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'Vue/erreur.php';
}