<?php

    $article1 = ["nom" => "Donjon et Dragons", "article" => "Du médiéval fantasy en pagaille"];
    $article2 = ["nom" => "l'appel de Chtullu", "article" => "Tiens un tentacule"];
    $article3 = ["nom" => "Warhammer", "article" => "Violence et violence"];
    $tabarticle = ["article1", "article2", "article3"];

    var_dump($tabarticle);
    

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>TP PHP</title>
</head>
<body>

        <header>

        <h1>Les Grands Noms du JDR</h1>

            <img src="JDR1.jpg" alt="image header" id="img_header">


        </header>

        <section>


            <div id="scroll_vers_le_haut">   <!-- div pour faire une flèche qui scrolle vers le haut -->
                <a href="#top"><img src="images/fleche_haut2.png" alt="Retourner en haut" /></a>
            </div>                                      <!---->

            <p>Une liste de lien revenant sur des grands noms du JDR</p>

            <div class="li_haut">
                <ul>
                    <li><a href="https://fr.wikipedia.org/wiki/Donjons_et_Dragons">Donjon et Dragons</a></li>
                    <li><a href="https://fr.wikipedia.org/wiki/L%27Appel_de_Cthulhu_(jeu_de_r%C3%B4le)">L'Appel de Cthulhu</a></li>
                    <li><a href="https://fr.wikipedia.org/wiki/Warhammer,_le_jeu_de_r%C3%B4le_fantastique">Warhammer</a></li>
                </ul>
                        
            </div>
            <span></span>

            <div class="conteneur">

                <div id="Donjonsdragons">

                    <h2>Donjons et dragons</h2>

                    <img src="JDR2.jpg" alt="">

                    <div class="bouton">
                        <p><a href="https://fr.wikipedia.org/wiki/Donjons_et_Dragons">Lire l'article</a></p>
                    </div>
                
                </div>



                <div id="futura">

                    <h2>L'Appel de Cthulhu</h2>

                    <img src="JDR3.jpg" alt="">

                    <div class="bouton">
                        <p><a href="https://fr.wikipedia.org/wiki/L%27Appel_de_Cthulhu_(jeu_de_r%C3%B4le)">Lire l'article</a></p>
                    </div>

                </div>



                <div id="pwa">

                    <h2>Warhammer</h2>

                    <img src="JDR4" alt="">

                    <div class="bouton">
                        <p><a href="https://fr.wikipedia.org/wiki/Warhammer,_le_jeu_de_r%C3%B4le_fantastique">Lire l'article</a></p>
                    </div>

                    

                </div>

            </div>

        </section>



    
</body>
</html>