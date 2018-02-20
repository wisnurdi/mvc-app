<?php 
use mvc\Url;

 ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

  <title><?=$title?></title>

  <link rel="stylesheet" href="/assets/css/pure-min.css">
  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="/assets/css/layouts/side-menu.css">
    <!--<![endif]-->

    <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:200"> -->
    <style type="text/css">
      .header {
          /*font-family: "Raleway", "Helvetica Neue", Helvetica, Arial, sans-serif;*/
          max-width: 768px;
          margin: 0 auto;
          padding: 1em;
          text-align: center;
          border-bottom: 1px solid #eee;
          background: #fff;
          letter-spacing: 0.05em;
      }
    </style>
</head>
<body>

<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="/"><center>MVCku</center></a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="/" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="<?=Url::create('post') ?>" class="pure-menu-link">Artikel</a></li>
                <li class="pure-menu-item"><a href="<?=Url::create('site/about') ?>" class="pure-menu-link">About</a></li>

                <li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                    <a href="<?=Url::create('services') ?>" class="pure-menu-link">Services</a>
                </li>

                <li class="pure-menu-item"><a href="/?r=site/contact" class="pure-menu-link">Contact</a></li>
                <li class="pure-menu-item"><a href="/?r=site/login" class="pure-menu-link">Login</a></li>
            </ul>
        </div>
    </div>

    <div id="main">

        <?=$content?>
    
    </div>
</div>

<script src="assets/js/ui.js"></script>


</body>
</html>
