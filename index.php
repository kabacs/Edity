<?php
/*
*Edity 0.6a - http://syndicate-fx.com
*Do Not edit this file unless you know what you're doing!!
*This file gets data and transforms it into simple, usable variables.
*Use variables as hooks in templates/themes.
*Gets the chosen template and outputs the page.
*/ 
//Get the Header Information
$file = 'data/header-section.txt'; 
function readLine( $file, $line_number ) {
  $file_obj = new SplFileObject( $file );
  $file_obj->seek( $line_number );
  return $file_obj->current();
}
//Get Profile Picture
$directory = "img/profile/";
$images = glob($directory . "*.png");
foreach($images as $image) {
  echo $profileImg;
}  
//Variables

$siteTitle        = readLine( $file, 0 );
$siteDescription  = readLine( $file, 1 );
$siteKeywords     = readLine( $file, 2 );
$siteAuthor       = readLine( $file, 3 );

$mainContent      = "data/content-section.txt";
$profileImg       = "<img src='$image' alt='Profile image'>";
$profile          = "data/profile-section.txt";

//Display Template
$template = file_get_contents("data/theme-options.txt");
include "$template";

?>
