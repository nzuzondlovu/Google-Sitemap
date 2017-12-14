<?php

$con = mysqli_connect('localhost', 'root', '', 'sitemap');

$sql = "SELECT * FROM video";
$res = mysqli_query($con, $sql);

if (mysqli_num_rows($res) > 0) {

	echo '
	<?xml version="1.0" encoding="UTF-8"?>
	<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
	xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">';
	
	while ($row = mysqli_fetch_assoc($res)) {
		
		echo '
		<url> 
			<loc>http://www.example.com/video/'.$row['id'].'/'.str_replace(' ', '-', $row['title']).'/</loc>
			<video:video>
				<video:content_loc>
					http://www.example.com/'.$row['video_url'].'
				</video:content_loc>
					<video:player_loc allow_embed="yes" autoplay="ap=1">
					http://www.example.com/videoplayer.swf?video='.$row['id'].'
				</video:player_loc>
				<video:thumbnail_loc>
					http://www.example.com/thumbs/'.$row['thumbnail'].'
				</video:thumbnail_loc>
				<video:title>'.$row['title'].'</video:title>  
				<video:description>
					'.$row['description'].'
				</video:description>
			</video:video>
		</url>';
	}

	echo '
	</urlset>';

} else {

	echo "Sorry there is no data in table";
}


?>