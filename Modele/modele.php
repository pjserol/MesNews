<?php  // partie Modèle du blog

function getBDD()
{
    $bdd = new PDO('mysql:host=localhost;dbname=mesnews', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->query('set names utf8');
    return $bdd;
}

function getNews()
{
    $bdd = getBDD();
    $news = $bdd->query('select * from T_NEWS N JOIN T_CATEGORIE C ON N.CAT_ID=C.CAT_ID order by NEWS_ID desc');
    return $news;
}

function getNew($id)
{
    $bdd = getBDD();
    $resultat = $bdd->query('select * from T_NEWS N JOIN T_CATEGORIE C ON N.CAT_ID=C.CAT_ID order by NEWS_ID desc where NEWS_ID =' . $id);
    $new = $resultat->fetch();
    return $new;
}