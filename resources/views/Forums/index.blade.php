<h1>Forum Titles</h1>

@foreach($forums as $forum)
	
	<div>

		<a href="/forum/{{ $forum->title }}">{{ $forum->title }}</a>


	</div>	

@endforeach

