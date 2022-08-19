	<div id = "right_side_content" class = "r10">
		<ul>
			<h4>Public Pastes</h4>
			@foreach ($pastes as $paste)
				<a href = "{{ $paste->id }}">
					<li><img src = "imgs/public.png" width="17px"><b class = "text_lgreen">
						@if (strlen($paste->title) <= 15) 
							{{ $paste->title }}
						@else 
							{{ substr($paste->title, 0, 15) . " ..." }}
						@endif
						</b><br> {{ $paste->created_at }}
					</li></a><hr style="width: 155px; float: left;"><br>
			@endforeach
		</ul>
	</div>
