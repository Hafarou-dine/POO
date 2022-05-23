<?php
    /* --------------------------------------- IMPORTS --------------------------------------- */
    include './utils/connectBDD.php';
    include './model/model_article.php';
    include './view/view_show_all_articles.php';

    /* --------------------------------------- LOGIQUE --------------------------------------- */
    $new = new Article();
    $all = $new->showAllArticle($bdd);
    foreach($all as $art){
        echo '<div>
            <h3>Titre : '.$art->nom_art.'</h3>
            <p><strong>Contenu : </strong>'.$art->content_art.'</p>
        </div>';
    }
?>

