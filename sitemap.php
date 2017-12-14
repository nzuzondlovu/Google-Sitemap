<?php

$url = 'http://localhost/www/google-sitemap/sitemap-generator.php';

$file = file_get_contents($url);

file_put_contents('sitemap.xml', $file);


echo "
<!DOCTYPE html>
<html>
<head>
	<title>Generate Sitemap</title>
</head>
<body>
<h2>Sitemap Successfully Generated!</h2>
</body>
</html>";

?>

