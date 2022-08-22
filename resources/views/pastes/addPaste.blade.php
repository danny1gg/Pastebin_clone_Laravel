<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type = "text/css" href = "{{ asset('css/style.css') }}">
		<title>Pastebin_clone</title>
	</head>
	<body>
		<!-- ========= Navbar ========= -->
		@include('includes/navbar')
		<!-- ========= Main container ========= -->
		<div id = "container">
			<!-- ========= Left content ========= -->
			<div id = "left_side_content" class = "r5">
				<h2 style = "color: #2CC0D1;">Paste created successfully!</h2><br>
				<h4 style = "color: #2CC0D1;">Copy the link for your paste: </h4>
				<a href = "/paste/{{ $pasteId }}"><h4 style = "color: yellow"> {{ "http://localhost:8000/paste/" . $pasteId }}</h4><hr></a> 
				<div id = "paste"> 
					<p>
					{!! nl2br(str_replace(array("\t", "    "), "&nbsp;&nbsp;&nbsp;&nbsp;", $paste)) !!}
					</p>
					<br>
				</div>
			</div>
			<!-- ========= Right Content ========= -->
		</div>
		<!-- ========= footer ========= -->
		@include('includes/footer')
	</body>
</html>
