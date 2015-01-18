<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

	<div class="main-border">

		<div class="top-banner">
			<h1>Test Site</h1>
		</div>


		<?php
			$data = file_get_contents('https://twitter.com/hashtag/gamergate');
			$regex = '/Tweets about (.+?) Twitter/';
			preg_match($regex,$data,$match);
			var_dump($match); 
			echo $match[1];
		?>
	</div>


</body>
</html>