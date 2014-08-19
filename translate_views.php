
<form method="post" action="">

<?php
	$language_arr = array('zh','en');
	for ($i=0; $i < 10 ; $i++) { 
		echo '<input type= "text" name = "source_text"/><input type="text" name="source_language"><input type="text" name="target_language">'."\n";
		// foreach ($language_arr as $value) {
		// 	echo '<select name="">'
		// }

	}
?>

<input type="submit" name="sub"/>
</form>

	