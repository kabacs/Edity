<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edity - Simple Content Editor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <meta name="description" content="Simple Content Editor for one-page websites">
    <meta name="author" content="Paulo Nunes - syndicate-fx.com">
    <link href="css/style.css" rel="stylesheet">
    <link href="markitup/skins/simple/style.css" rel="stylesheet"/>
    <link href="markitup/sets/html/style.css" rel="stylesheet"/>
    <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="shortcut icon" href="favicon.ico">
  </head>

  <body>
<div class="top">    
<header class="wrap cf">
    <h1>Edity</h1>
    <ul>
        <li><a <?php if (strpos($_SERVER['PHP_SELF'], 'home.php')) echo 'class="current"';?> href="home.php">Dashboard</a></li>
        <li><a <?php if (strpos($_SERVER['PHP_SELF'], 'header-section.php')) echo 'class="current"';?> href="header-section.php">Header</a></li>
        <li><a <?php if (strpos($_SERVER['PHP_SELF'], 'profile-section.php')) echo 'class="current"';?> href="profile-section.php">Profile</a></li>
        <li><a <?php if (strpos($_SERVER['PHP_SELF'], 'content-section.php')) echo 'class="current"';?> href="content-section.php">Content</a></li>
        <li><a <?php if (strpos($_SERVER['PHP_SELF'], 'gallery-section.php')) echo 'class="current"';?> href="gallery-section.php">Gallery</a></li>
        <li><a class="logout" href="logout.php" title="Logout">Logout</a></li>
    </ul>
</header>
</div>