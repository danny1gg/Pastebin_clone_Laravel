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
				<h2 style = "color: #2CC0D1;">Raw paste data, posted by: 
					<u style = "color: #42F449;">{{ $currentPaste->posted_by }}</u>
				</h2>
				<h4> {{ $currentPaste->title }} </h4><hr>
				<div id = "paste">
					<p>
					{!! nl2br(str_replace(array("\t", "  "), "&nbsp;&nbsp;&nbsp;&nbsp;", $currentPaste->text)) !!}
					</p>
					<br>
				</div>
				<br>
				<br>
				<div id = "paste_footer">
					<hr style = "width: 96%; margin-left: -3px;">
					<div id = "paste_created_at"> {{ $currentPaste->created_at }} </div>
					<div id = "paste_exposure"> 
						@if ($currentPaste->exposure == "Public")
							<img src = "/../imgs/public.png" width="17px"> 
						@elseif ($currentPaste->exposure == "Unlisted") 
							<img src = "/../imgs/unlisted.png" width="17px">
						@elseif ($currentPaste->exposure == "Private") 
							<img src = "/../imgs/private.png" width="17px">
						@endif
						{{ $currentPaste->exposure }}

						@php echo App\Http\Controllers\fetchFromDB::deletePost($currentPaste->expire_date, $currentPaste->id);
						@endphp
					</div>
				</div>
			</div>
			<!-- ========= Right Content ========= -->
		</div>
		<!-- ========= footer ========= -->
		@include('includes/footer')
	</body>
</html>
