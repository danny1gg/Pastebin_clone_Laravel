<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type = "text/css" href = "{{ asset('css/style.css') }}">
		<title>Page not found</title>
	</head>
	<body>
		<!-- ========= Navbar ========= -->
		@include('includes/navbar')
		<!-- ========= Main container ========= -->
		<div id = "container">
			<!-- ========= Left content ========= -->
			<div id = "left_side_content" class = "r5">
				<h2 style = "color: #2CC0D1; text-align: center; margin-top: 100px">ERROR! Page not found ... </h2>
			</div>
		</div>
		<!-- ========= footer ========= -->
		@include('includes/footer')
	</body>
</html>