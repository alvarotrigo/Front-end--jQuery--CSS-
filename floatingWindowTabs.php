<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Floating window with tabs</title>
<link rel="stylesheet" href="css/form.css" type="text/css"  media="screen">
<link rel="stylesheet" href="css/styles.css" type="text/css"  media="screen">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/actions.js"></script>

		
</head>
<body>
<div id="container">

	<div id="darkOverlay">
		<div id="floatWrap">
			<div id="floatContent">
				<a class="close"></a>
				<div id="mainFloat">
					<div id="menuLeft">
						<ul>
							<li class="active"><a class="floatCategory" href="#" data-content="Hello world">Option 1</a></li>
							<li class=""><a class="floatCategory" href="#" data-content="Bye bye">Option 2</a></li>
							<li class=""><a class="floatCategory" href="#" data-content="Car">Option 3</a></li>
							<li><a class="floatCategory" href="#" data-content="Steve Jobs">Option 4</a></li>
						</ul>
					</div>
				
					<div id="infoContent">
						
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="floatMenu"><a href="#">Click here to show the floating menu</a></div>
</div>
</body>
</html>
