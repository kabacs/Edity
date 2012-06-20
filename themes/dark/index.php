<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title><?php echo "$siteTitle" ?></title>
  
  <meta name="title" content="<?php echo "$siteTitle" ?>">
  <meta name="description" content="<?php echo "$siteDescription" ?>">
  <meta name="keywords" content="<?php echo "$siteKeywords" ?>">
  <meta name="author" content="<?php echo "$siteAuthor" ?>">

  <link rel="stylesheet" href="themes/dark/style.css">

</head>
<body>
<header class="wrap">
	<h1><?php echo "$siteTitle" ?></h1>
	<h4><?php echo "$siteDescription" ?></h4>
  <a class="login" href="admin">Login</a>
</header>

<div role="main" class="wrap cf">

<article class="triple">  
<?php include "$mainContent" ?>
</article>

<aside class="single">
<h4>Profile</h4>
	<?php echo "$profileImg" ?>
	<?php include "$profile" ?>
</aside>

</div>

<footer class="wrap">
	<p>&copy; <?php echo "$siteTitle" ?> 2012 | alpha 0.1</p>
</footer>

</body>
</html>