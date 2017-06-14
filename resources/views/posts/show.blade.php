@extends('layout')

@section('content')
	<div class="col-sm-8 blog-main">
	 	
	 	 <h1 class="blog-post-title">{{ $post-> title }}</h1>
            
         @if(count($post->tags))
	         <ul>
	         	@foreach($post->tags as $tag)
	         		<a href="/posts/tags/{{$tag->name}}"><li>{{$tag->name}}</li></a>
	         	@endforeach
	         </ul>
         @endif

    	{{ $post->body }}

		<hr>

		 <div class="comments">
		 	<ul class="list-group">
			 	@foreach ($post->comments as $comment)
				 	<strong>{{ $comment->created_at->diffforhumans()}}</strong>
				 		<li class="list-group-item">
				 			{{$comment->body}}
				 		</li>
				 	@endforeach
			</ul>
		 </div>
		 <br/>
		 <div class="card">
		 	<div class="card-block">
		 	
		 		<form method="POST" action="/posts/{{$post->id}}/comments">
		 			{{ csrf_field()}}
		 			<div class="form-group">
		 				<textarea name="body" placeholder="Comment here" class="form-control"></textarea>
		 			</div>
		 			<div class="form-group">
		 				<button type="submit" class="btn btn-primary">Add a Comment</button>
		 			</div>
		 		</form>

		 		@include('layouts.errors')
		 	</div>
		 </div>

	</div>
@endsection