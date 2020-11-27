<?php
require_once "Article.php";
$html ="";
/*$len = sizeof($articles);
for ($i = 0; $i < $len ; $i++) {
    $html .= "<h3>" . $articles[$i]["titre"] ." </h3>"; //<  ou $html = $html.html  
    $html .= "<img src=\"" . $articles[$i]["image"] . "\"\" alt=\"illustration article\">";
    $html .= "<p class=\"Cadreactu\">" . $articles[$i]["article"] . "</p>";
    $html .= "<a href=\""  . $articles[$i]["lien"] ."\" class=\"lienarticle\">\"Lire la suite\"</a> <div class=\"finparaph\"> <img src=\"para2.png\" alt=\"logo de dés à 20 faces\"> </div>";
}*/
foreach($articles as $index => $article) {
    $html .= "<h3> Article n°" . ($index + 1) . " " . $article["titre"] .  "</h3>";
    $html .= "<img src=\"" . $article["image"] . "\"\" alt=\"illustration article\">";
    $html .= "<p class=\"Cadreactu\">" . $article["article"] . "</p>";
    $html .= "<a href=\""  . $article["lien"] ."\" class=\"lienarticle\">\"Lire la suite\"</a> <div class=\"finparaph\"> <img src=\"para2.png\" alt=\"logo de dés à 20 faces\"> </div>";
} 
?> 
<h2> Les Dernières News du JDR</h2>
<?= $html ?>
