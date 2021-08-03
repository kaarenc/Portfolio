<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Project Manager, Front End Web Developer, JavaScript Developer, Web Developer, Business Analyst, BBA">
    <meta name="keyword" content="portfolio, javascript, html, sass, css, php, react, wordpress, project, management, planning, developer, business">
    <title>Kaaren Corrigan</title>
    <?php require('./required-files-js-style/styleFiles.php'); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> 
</head>
 
<body class="home-wrapper wrapper " id="wrapper">
 <?php
    require_once("./components/header.php")

    ?> 
    
    <div class="main-title" id="main-title">
    

     <h2>
        Hi I'm
    </h2> 
    <h1>
       Kaaren Corrigan
    </h1>
    <h2>I do Front End Web Development <br/> & </br> Project Management <br/> Welcome to my</h2>
    
    <?php
    require_once("./components/home-hello.php")

    ?> 
   </div>
   
   <?php require_once('./components/navigation.php');?>

   



   <?php require('./required-files-js-style/homeJsFiles.php'); ?>
</body>
<?php
require_once('./components/footer.php');
?>
</html>