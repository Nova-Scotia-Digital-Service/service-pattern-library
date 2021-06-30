<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Pattern Primer</title>
<link rel="stylesheet" href="global.css">
<link rel="stylesheet" href="https://beta.novascotia.ca/themes/ignition/saltire.css">
<link rel="stylesheet" href="https://novascotia.ca/clf/fonts/font-awesome/css/font-awesome.min.css">
<style>
.pattern {
    clear: both;
    overflow: hidden;
}
.pattern .display {
    width: 65%;
    float: left;
}
.pattern .source {
    width: 30%;
    float: right;
}
.pattern .source textarea {
    width: 90%;
}
</style>
</head>
<body>
	<div class="container">
		<h1>NSDS Design System - styles</h1>

		<ul>
		    <li><a href="styles.php">Styles</a></li>
		    <li><a href="components.php">Components</a></li>
		    <li><a href="patterns.php">Patterns</a></li>
		</ul>
		<?php
			$files = array();
			$handle=opendir('styles');
			while (false !== ($file = readdir($handle))):
			    if(substr($file, -5) == '.html'):
			        $files[] = $file;
			    endif;
			endwhile;
			sort($files);
			foreach ($files as $file):
			    echo '<div class="pattern">';
			    echo '<div class="display">';
			    include('styles/'.$file);
			    echo '</div>';
			    echo '<div class="source">';
			    echo '<textarea rows="6" cols="30">';
			    echo htmlspecialchars(file_get_contents('styles/'.$file));
			    echo '</textarea>';
			    echo '<p><a href="styles/'.$file.'">'.$file.'</a></p>';
			    echo '</div>';
			    echo '</div>';
			endforeach;
			?>

	</div>




</body>
</html>
