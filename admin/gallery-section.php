<?php 
include 'inc/sessions.php';
include 'inc/header.php';
?>
<div class="wrap cf">
<h2 class="text-center">Gallery Section</h2>
<article class="double">
	<h4>Upload Gallery Images</h4>
	<div id="gallerybox">
		<span class="message">Drop your gallery images here to upload</span>
	</div>
</article>
<aside class="double">
	<h4>Preview Images in use</h4>
		<?php
		//path to directory to scan
		$directory = "../img/gallery/";
		 
		//get all image files with a .jpg extension.
		$images = glob($directory . "*.jpg");
		 
		//print each file name
		foreach($images as $image)
		{
		echo "<img src='$image' alt='$image'>";
		}
	?>
</aside>
</div>
<?php include 'inc/footer.php' ?>