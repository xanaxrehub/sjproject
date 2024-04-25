<?php
  require('../_inc/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ihor Shtefanets">
    <title><?php 'Moj web | '. (basename($_SERVER["SCRIPT_NAME"], '.php'));?></title>
    <?php
        //add_stylesheet()
        $page_object = new Page();
        echo($page_object->add_stylesheet());
    ?>
</head>
<body>
  <!--Navbar-->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="../assets/img/logo.png" width="64px" height="64px" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <?php
                $pages = array('DOMOV'=>'home.php',
                    'UKRAINE'=>'history.php',
                    'ZAUJÍMAVOSTI'=>'zaujimavosti.php',
                    'KONTAKT'=>'kontakt.php'
                );
              $menu_object  = new Menu($pages);
              echo($menu_object->generate_menu());
              ?>
            </ul>
          </div>
        </div>
      </nav>
      <!--/Navbar-->