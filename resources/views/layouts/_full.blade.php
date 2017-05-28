<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<!-- Your app title -->
		<title>My App</title>
		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body>
		<div id="app">
			<!-- Status bar overlay for full screen mode (PhoneGap) -->
			<div class="statusbar-overlay"></div>
			<!-- Views -->
			<div class="views">
				<!-- Your main view, should have "view-main" class -->
				<div class="view view-main">
					<div class="navbar">
						<div class="navbar-inner">
							@yield('navbar')
						</div>
					</div>
					<div class="toolbar tabbar tabbar-labels">
						<div class="toolbar-inner">
							@yield('toolbar')
						</div>
					</div>
					<div class="pages navbar-through toolbar-through">
						@yield('content')
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="/js/app.js"></script>
	</body>
</html>