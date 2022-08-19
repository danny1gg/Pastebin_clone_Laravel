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
			<h4>New Paste</h4>
			<div id = "paste_form">
				<form action="/pastes/addPaste" method = "post">
					@csrf
					<textarea id = "text_input" name = "textInput" placeholder="..." autofocus></textarea>
					<br>
					<table>
						<br>
						<tr>
							<td><label for = "posted_by">Posted by:</label></td>
							<td style="width: 350px;"><input type="text" id = "posted_by" name="posted_by" value = "Guest" disabled></td>
						</tr>
						<tr>
							<td><label for = "highlight">Syntax Highlighting:</label></td>
							<td style="width: 350px;"><input type="text" id = "highlight" name="highlight" placeholder = "for members only" disabled></td>
						</tr>
						<tr>
							<td><label for = "expiration">Paste Expiration:</label></td>
							<td style="width: 350px;">
								<select id = "expiration" name = "expiration" style="width: 177px; height: 25px;">
									@foreach ($expiration as $option)
										<option>{{ $option->expiration_time }}</option>
									@endforeach
								</select>
							</td>
						</tr>
						<tr>
							<td><label for = "exposures">Paste Exposures:</label></td>
							<td style="width: 350px;">
								<select id = "exposure" name = "exposure" style="width: 177px; height: 25px;">
									@foreach ($exposures as $option)
										<option 
										@if ($option->name == "Private") 
											{{ "disabled"}} 
										@endif > 
											{{ $option->name }}
										</option>
									@endforeach
								</select>
							</td>
						</tr>
						<tr>
							<td><label for = "pw">Password:</label></td>
							<td style="width: 350px;">
								<input type="text" id = "pw" name = "pw" placeholder = "for members only" disabled>
								<input type="checkbox" name="pw_check" disabled><p id = "pw_disable"> Disabled</p></td>
							</td>
						</tr>
						<tr>
							<td><label for = "name">Paste Name / Title: </label></td>
							<td style="width: 350px;"><input type="text" id = "name" name="name"><p id = "required"> * Required</p></td>
						</tr>
						<tr>
							<td></td>
							<td style="width: 350px;"><button id = "btn_submit" class = "btn_glow"  type="submit" value = "submit">Create New Paste</button></td>
						</tr>
						<tr>
							<td></td>
							<td style="width: 350px;">
								@if ($errors->any())
									<h3 style = "color: #FF7D7D">
										@foreach ($errors->all() as $error)
											* {{ $error }} <br>
										@endforeach
									</h3>
								@endif
							</td>
						</tr>
					</table>
				</form>
			</div>
			<br>
		</div>
		<!-- ========= Right Content ========= -->
		@include('includes/sidebar_right')
	</div>
	<!-- ========= footer ========= -->
	@include('includes/footer')
</body>
</html>