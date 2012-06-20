<?php 
include 'inc/sessions.php';
include 'inc/header.php';
?>
<div class="wrap cf">

<article class="double">	
<h2>Welcome to your dashboard</h2>
<p>Some instructions and info about usage...</p>
</article>

<article class="double">
	
<h4>Choose theme</h4>
<?php
if($_POST['Submit']) {

$template = $_POST['template'];

//the data

$data = "themes/$template[0]/index.php";

//open the file and choose the mode

$fh = fopen("../data/theme-options.txt", "w+");

fwrite($fh, $data);

//close the file

fclose($fh);

print "<p class='info'>Information Saved</a>";
}
?>

<form method="post" action="">
<select name="template[]">
<?php
$directories = scandir('../themes/');
foreach($directories as $directory){
    if($directory=='.' or $directory=='..' ){
        continue;
    }else{
            echo '<option value="'. $directory .'">'. $directory .'</option>';
	}
} 
?>
</select>
<input name="Submit" type="submit" value="Save">
</form>



<h4>Backup website</h4>

<?php

?>
</article>


</div>

<?php include 'inc/footer.php' ?>