<?php
// AJAX and JQUERY
$url = 'http://www.oooff.com';
$output = file_get_contents($url);
//echo $output;
$f = fopen("file.txt", "w");
fwrite($f, $output);
fclose($f);

?>

<a href="index.php">Lets go back now</a>

<!-- $url = 'http://www.oooff.com'; -->
<!-- 				$output = file_get_contents($url); -->
<!-- 				//echo $output; -->
<!-- 				$f = fopen("file.txt", "w"); -->
<!-- 				if(!$f){ -->
<!-- 					echo "IT DIDN'T WORK!"; -->
<!-- 				} else{ -->
<!-- 					echo fwrite($f, $output) or die(print_r(error_get_last())); -->
<!-- 					fclose($f); -->
<!-- 				} -->
<!-- 				echo "I have finished."; -->


<!-- 			$url = "https://twitter.com/hashtag/gamergate"; -->
<!-- 			$ch = curl_init($url); -->
<!-- 			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); -->
<!-- 			$curl_scraped_page = curl_exec($ch); -->
<!-- 			curl_close($ch); -->
<!-- 			echo $curl_scraped_page; -->
<!-- 			echo "Finished";	 -->

