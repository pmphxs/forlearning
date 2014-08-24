
<form method="post" action="">

<?php
	$language_arr = array('zh','en');
	for ($i=0; $i < 10 ; $i++) { 
		echo '<p> 文本 <input type= "text" name = "source_text"/> 源语言 <input type="text" name="source_language">目标语言<input type="text" name="target_language"><p>';
		// foreach ($language_arr as $value) {
		// 	echo '<select name="">'
		// }

	}
?>

<input type="submit" name="sub"/>
</form>

	