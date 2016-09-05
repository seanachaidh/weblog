<!DOCTYPE html>

<html>
	
	<head>
		<!-- Van oorsprong een Sass bestand -->
		<link rel="stylesheet" type="text/css" href="styles/app.css" />
		<link rel="stylesheet" type="text/css" href="styles/mainstyle.css" />
		
		<script type="text/javascript" src="javascript/jquery.js"></script>
		
		<!-- De angular modules -->
		<script src="javascript/angular/shim.min.js"></script>

		<script src="javascript/angular/zone.js"></script>
		<script src="javascript/angular/Reflect.js"></script>

		<script src="javascript/angular/Rx.umd.js"></script>
		<script src="javascript/angular/core.umd.js"></script>
		<script src="javascript/angular/common.umd.js"></script>
		<script src="javascript/angular/compiler.umd.js"></script>
		<script src="javascript/angular/platform-browser.umd.js"></script>
		<script src="javascript/angular/platform-browser-dynamic.umd.js"></script>
		<script src="javascript/angular/http.umd.js"></script>

		<!-- Ons eigen script -->
		<script type="text/javascript" src="javascript/app.js"></script>
	</head>
	
	<body>
		@yield('content')
	</body>

</html>
