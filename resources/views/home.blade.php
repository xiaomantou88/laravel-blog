@extends('app')

@section('content')

	  	@foreach ($articleArr as $article)
	        <div class="blog-short">
		        <h3><a href="/article/{{$article->id}}">{{$article->title}}</a></h3>
				<div>
				  <small>
					<i class="fa fa-calendar"></i>
					<time>
		        		{{$article->created_at}}
					</time>
				  </small>
		         </div>
				<div class="margin10">
		          <small>
		            <i class="fa fa-tag"></i>
		            
		              <span class="label label-primary">machine-learning</span>
		            
		              <span class="label label-primary">python</span>
		            
		              <span class="label label-primary">numpy</span>
		            
		              <span class="label label-primary">scikit-learn</span>
		            
		          </small>
		        </div>
		        
		          <img src="http://placehold.it/100x100" alt="Another Demo blog" class="pull-left img-responsive thumb margin10 img-thumbnail">
		        
		        <article class="excerpt"><p>{{$article->body}}</p>

				</article>
		        <a class="pull-right marginBottom10" href="/article/{{$article->id}}">Read More</a>
		    </div>
		@endforeach


@endsection
