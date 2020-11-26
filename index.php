<?php
var_dump($_GET);
if(isset($_GET["page"])){
    $pageAInclure = $_GET["page"].".php"; // page1.php ...
    switch($_GET["page"]){
        case "page1":  $pageAInclure = "page1.php";
    break;
        case "page2":  $pageAInclure = "page2.php";
    break;
    case "page3":  $pageAInclure = "page3.php";
    break;
        case "page4":  $pageAInclure = "page4.php";
    break;
        case "page5":  $pageAInclure = "page5.php";
    break;
    }
}else {
    $pageAInclure = "page1.php";
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTVVMQ</title>
    <link rel="stylesheet" href="jdr.css">
    <link rel="icon" type="image/png" href="coucou2.png" />
</head>
<body>
    <header class="bandeau flexb sm-col-12">
        <div class="flexb poslog sm-col-12 md-col-3 lg-col-3 ">
        <img class="logosite" src="coucou2.png" alt="logo du site bouclier et dé 20">
        </div>
    </header>
<!-- Menu principal-->
<div class="container">
<input id="menu-checkbox" type="checkbox" class="menucheck sm-col-5">
<label for="menu-checkbox" class="bouton-nav "><span class="barre"> </span> <span class="barre"> </span> <span class="barre"> </span></label>
<nav id="menu-principal" class="menu-principal md2-col-12 " aria-label="Main menu">
    <ul>
        <li></li>
        <li>Le Jeu de Rôle</li>
        <li><a href="index.php?page=page1"> Le JDR qu'est ce que c'est?</a></li>
        <li><a href="index.php?page=page2"> Projet 1</a></li>
        <li><a href="index.php?page=page3">Projet 2</a></li>
        <li>Qui suis-je?</li>
        <li><a href="index.php?page=page4">Mon CV</a></li>
        <li><a href="index.php?page=page5">Me contacter</a></li>
    </ul>
</nav> 
</div>


<section class="flexb mon-cv sm-col-11 lg-col-9 coin ">
<?php require $pageAInclure ?>;
</section>




<footer> 
        <p>By Gedezalu</p>
    </footer>
</body>
</html>