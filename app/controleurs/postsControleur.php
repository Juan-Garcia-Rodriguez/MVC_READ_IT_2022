<?php

function indexAction(PDO $connexion)
{
    // Je demande les posts qu modèles et je les mets dans $posts 
    include_once '../app/modeles/postsModel.php';
    $posts = findAll($connexion);

    // Je charge la vue index dans $content
    GLOBAL $content;
    ob_start();
    include '../app/vues/posts/index.php';
    $content = ob_get_clean();
}


function showAction(PDO $connexion, int $id){
    // Je mets dans $post les infos que je demande au modèle
    include_once '../app/modeles/postsModel.php';
    $post = findOneById($connexion, $id);

    // Je charge la vue index dans $content
    GLOBAL $content;
    ob_start();
    include '../app/vues/posts/show.php';
    $content = ob_get_clean();
}