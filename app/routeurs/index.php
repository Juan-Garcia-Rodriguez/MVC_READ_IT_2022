<?php

//ROUTE DU DETAIL D'UN POST
// PATERN: ?postID=x
// CTRL: postsController
// ACTION: showAction

if(isset($_GET['postID'])):
    require_once '../app/controleurs/postsControleur.php';
    showAction($connexion, $_GET['postID'] );


//ROUTE PAR DEFAUT
// PATERN: /
// CTRL: postsController
// ACTION: index
else:
    require_once '../app/controleurs/postsControleur.php';
    indexAction($connexion);
endif;


