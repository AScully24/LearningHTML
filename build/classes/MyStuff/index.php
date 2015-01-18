<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<link href="div_styles.css" rel="stylesheet">
<head>
<script src="test.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>My Site</title>
</head>

<body class="background-theme">

	<div class="main-border">

		<div class="top-banner">
			<h1>Test Site</h1>
		</div>

		<div id="lefty" class="base-text left-side">
			<p>This is the left.</p>
			<p>Lefty left left</p>
		</div>

		<div id="righty" class="base-text right-side">
			<p>This is the right side</p>
			<p>
				<button type="button" onclick="changeLefty()">Java Stuff</button>
				<button type="button" onclick="randomThing()">What's this
					button do?</button>
			<form action="myphp.php" method="get">
				<input type="hidden" name="act" value="run"> <input
					type="submit" value="Run me now!">
			</form>
			</p>

			<div id="resulttext">
				<p>This is some more stuff!</p>
				<p>
					<a href="second_page.php">Go to second page</a>
				</p>
			</div>
		</div>
		<div class="footer"></div>
	</div>
</body>


</html>