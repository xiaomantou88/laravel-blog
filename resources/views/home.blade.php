@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
				@foreach ($articleArr as $article)
					<div class="hentry blog-post">
						<h2 class="blog-post-title" data-pjax="">
						  <a href="" rel="bookmark">{{$article->title}}</a>
						</h2>

						<ul class="blog-post-meta">
							<li class="meta-item">
								<span class="octicon octicon-calendar"></span>
								{{$article->ctime}}
							</li>

							<li class="vcard fn meta-item">
								<img alt="@bfire" class="author-avatar" data-user="5945961" height="18" src="https://avatars0.githubusercontent.com/u/5945961?v=3&amp;s=36" width="18"> <a href="/bfire">{{$article->author}}</a>
							</li>

							<li class="meta-item">
								<span class="octicon octicon-file-directory"></span>
								<a href="/blog/category/general">General</a>
							</li>

						</ul>


						<div class="blog-post-body markdown-body">
						  	<p>{{$article->body}}</p>

							<p><a href="http://github.myshopify.com/"><img src="https://cloud.githubusercontent.com/assets/5945961/7591981/c4c43b0e-f885-11e4-98c3-0727e4f9397f.jpg" alt="Octicons Shirts" style="max-width:100%;"></a></p>

							<p>Available in the <a href="http://github.myshopify.com/products/octicons-shirt">GitHub Shop</a></p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
