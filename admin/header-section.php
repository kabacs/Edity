<?php 
include 'inc/sessions.php';
include 'inc/header.php';
$file = '../data/header-section.txt'; 
function readLine( $file, $line_number )
	{
        $file_obj = new SplFileObject( $file );
        $file_obj->seek( $line_number );
        return $file_obj->current();
	}
?>
<div class="wrap cf">
<h2 class="text-center">Page header information</h2>
<article class="double">	
<dl>
	<dt>Site Title</dt>
	<dd>Used in document <em>title</em> tag and page <em>header</em></dd>
	<dt>Site Description</dt>
	<dd>Used in document <em>meta</em> tag and page <em>header</em></dd>
	<dt>Keywords</dt>
	<dd>Used in document <em>meta</em> tag, comma separated words</dd>
	<dt>Author</dt>
	<dd>Used in document <em>meta</em> tag</dd>
</dl>
</article>

<article class="double">
<?php

if($_POST['Submit'])

{

$siteTitle= $_POST['siteTitle'];

$description = $_POST['description'];

$keywords = $_POST['keywords'];

$author = $_POST['author'];

//the data

$data = "$siteTitle
$description
$keywords
$author
";

//open the file and choose the mode

$fh = fopen("../data/header-section.txt", "w+");

fwrite($fh, $data);

//close the file

fclose($fh);

print "<p class='info'>Information Saved</a>";

} ?>

<form method="post" action="">


<label>Site Title</label>

<input name="siteTitle" type="text" id="siteTitle" value="<?php echo readLine( $file, 0 ); ?>">


<label>Site Description</label>

<input name="description" type="text" id="description" value="<?php echo readLine( $file, 1 ); ?>">


<label>Keywords</label>

<input name="keywords" type="text" id="keywords" value="<?php echo readLine( $file, 2 ); ?>">


<label>Author</label>

<input name="author" type="text" id="author" value="<?php echo readLine( $file, 3 ); ?>">

<input name="Submit" type="submit" value="Save">

</form>
</article>

</div>

<?php include 'inc/footer.php' ?>