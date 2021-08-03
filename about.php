<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Project Manager, Front End Web Developer, JavaScript Developer, Web Developer, Business Analyst, BBA">
    <meta name="keyword" content="portfolio, javascript, html, sass, css, php, react, wordpress, project, management, planning, developer, business">
    <title>About</title>
    <?php require('./required-files-js-style/styleFiles.php'); ?>
    <link rel="stylesheet" href="style/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> 
</head>
<body class="about-wrapper wrapper about " id="wrapper">
    <header>
       
    
        <?php
        require_once("./components/header.php");
       require_once('./components/navigation.php');?>
   
    </header>

    <main>
         <section class="message-skills">
             <article class="about-message">
              
                <a href="index.php"><h1>About</h1></a>
                <div class="portfolio-photo-wrapper">
                    <img class="portfolio-photo" src="./images/portfolio-photo.jpg" alt="photo of me" > </img>
                </div>
                <p> Hi I'm Kaaren Corrigan. I am a technical Business Analyst with a Front-End Web Development certificate from BCIT and a full knowledge of the development process from planning to deployment. Skilled in process analysis and optimization, team and stakeholder communication, and building project scope. </p>

                <p>Between the months of January and July 2021, I was enrolled in the Front-End Web Development (FWD) course at BCIT. This course taught us everything from UX/UI and Web Design using tools like: Adobe Illustrator, Photoshop, and XD to Web Development using HTML5, CSS3, Javascript, React, Wordpress, and Shopify. You can see some of the projects I completed <a href="projects.php">HERE</a>.</p>

                <p></p>
            </article>

        </section> 

    </main>

    <?php require('./required-files-js-style/aboutJsFiles.php'); ?>
</body>
<?php
require_once('./components/footer.php');
?>
</html>