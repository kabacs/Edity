<?php 
include 'inc/sessions.php';
include 'inc/header.php';
?>
<div class="wrap cf">
<h2 class="text-center">Content section</h2>
<article class="double">
	<p>The page's main content section</p>
	<h4>To Do</h4>
	<p>Add an upload section for images only used for content, so user can use the editor's add picture btn and point them to img/..</p>
</article>

<article class="double">
	<?php

if($_POST['Submit'])

{

$page= $_POST['page'];

//the data

$data = "$page";

//open the file and choose the mode

$fh = fopen("../data/content-section.txt", "w+");

fwrite($fh, $data);

//close the file

fclose($fh);

print "<p class='info'>Information Saved</a>";

} ?>

<form method="post" action="">

<textarea name="page" id="page" class="html"><?php include "../data/content-section.txt" ?></textarea>

<input name="Submit" type="submit" value="Save">

</form>
</article>
</div>

<?php include 'inc/footer.php' ?>