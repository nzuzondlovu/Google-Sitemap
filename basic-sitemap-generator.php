<?php

$con = mysqli_connect('localhost', 'root', '', 'sitemap');

$sql = "SELECT * FROM video";
$res = mysqli_query($con, $sql);

if (mysqli_num_rows($res) > 0) {

	echo '
	<?xml version="1.0" encoding="UTF-8"?>
	<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"';
	
	while ($row = mysqli_fetch_assoc($res)) {

		echo '
		<url>
	      	<loc>http://www.example.com/video/'.$row['id'].'/'.str_replace(' ', '-', $row['title']).'/</loc>
	      	<lastmod>'.date('Y-m-d', strtotime($row['date'])).'</lastmod>
	      	<changefreq>monthly</changefreq>
	      	<priority>0.8</priority>
   		</url>';
   		
	}

	echo '
	</urlset>';

} else {

	echo "Sorry there is no data in table";
}


?>