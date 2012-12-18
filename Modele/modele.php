<?php  // partie Modèle du blog

/*
 * Connexion à la base de donnée
 */
function getBDD()
{
    $bdd = new PDO('mysql:host=localhost;dbname=mesnews', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->query('set names utf8');
    return $bdd;
}

/*
 * Fonction qui retourne la liste des news
 */
function getNews()
{
    $bdd = getBDD();
    $news = $bdd->query('select * from T_NEWS N JOIN T_CATEGORIE C ON N.CAT_ID=C.CAT_ID order by NEWS_ID desc');
    return $news;
}

/*
 * Fonction qui retourne les informations concernant une news
 * 1 Paramètre : identifiant de la news
 */
function getNew($id)
{
    $bdd = getBDD();
    $resultat = $bdd->query('select * from T_NEWS N JOIN T_CATEGORIE C ON N.CAT_ID=C.CAT_ID order by NEWS_ID desc where NEWS_ID =' . $id);
    $new = $resultat->fetch();
    return $new;
}