<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Project Manager, Front End Web Developer, JavaScript Developer, Web Developer, Business Analyst, BBA">
    <meta name="keyword" content="portfolio, javascript, html, sass, css, php, react, wordpress, project, management, planning, developer, business">
    <title>Projects</title>
    <?php require('./required-files-js-style/styleFiles.php'); ?>  
    <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> 
</head>
<body class="projects-wrapper wrapper  projects" id="wrapper">
    <header>
   
         <?php
        
        require_once('./components/navigation.php');
        require_once("./components/header.php");
        ?> 
        
 </header>
 <main>
 <a href="index.php"><h1>Projects</h1></a>
        <div class="glide">

            <div class="glide__bullets" data-glide-el="controls[nav]">
                <button class="glide__bullet" data-glide-dir="=0">React App</button>
                <button class="glide__bullet" data-glide-dir="=2"> Portfolio Project</button>
                <button class="glide__bullet" data-glide-dir="=1">JavaScript Game</button>
                <button class="glide__bullet" data-glide-dir="=2"> Capstone</button>

            </div>
        <div class="glide__track" data-glide-el="track">

    

            <ul class="glide__slides">
                <li class="glide__slide fresh-flix"><?php require_once("./projects/fresh-flix.php") ?></li>

                <li class="glide__slide portfolio"><?php require_once("./projects/portfolio-project.php")?></li>

                <li class="glide__slide javascript-game" ><?php require_once("./projects/spring-fever.php") ?></li> 
                
                <li class="glide__slide"><?php require_once("./projects/capstone.php")?></li>
            </ul>
        </div>
        
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"></button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"></button>

        </div>
    </div>

    

  

<div class="project-info-wrapper" id="project-info-wrapper"> </div>
       
   
    
  
 </main>
   <?php require('./required-files-js-style/projectJsFiles.php'); ?>

</body>
<?php
require_once('./components/footer.php');
?>
</html>