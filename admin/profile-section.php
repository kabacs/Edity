<?php 
include 'inc/sessions.php';
include 'inc/header.php';
?>
<div class="wrap cf">
<h2 class="text-center">Profile section</h2>
<article class="double">	
<p>Breif description about you or the company. Can be displayed on a sidebar or in a <em>hero</em> section of your page, with information about you or your company, include links to your social profiles and a picture.</p>

<aside class="double">

	<h4>Upload Profile Image</h4>
	<div id="profilebox">
		<span class="message">Drop your profile image here to upload</span>
	</div>
</aside>
<aside class="double">
	<h4>Current Image</h4>
	<?php
		//path to directory to scan
		$directory = "../img/profile/";
		 
		//get all image files with a .jpg extension.
		$images = glob($directory . "*.png");
		 
		//print each file name
		foreach($images as $image)
		{
		echo "<img src='$image' alt='Profile img'>";
		}
	?>
</aside>
</article>
<article class="double">
<?php

if($_POST['Submit'])

{

$about= $_POST['about'];

//the data

$data = "$about";

//open the file and choose the mode

$fh = fopen("../data/profile-section.txt", "w+");

fwrite($fh, $data);

//close the file

fclose($fh);

print "<p class='info'>Information Saved</a>";

} ?>

<form method="post" action="">

<textarea name="about" id="about" class="html"><?php include "../data/profile-section.txt" ?></textarea>

<input name="Submit" type="submit" value="Save">

</form>

</article>
</div>
<?php include 'inc/footer.php' ?>