@extends('app')

@section('content')
<div class="page">
      <header class="page-header">
        <h3 class="page-title">{{$article->title}}</h3>
        <div class="post-metadata">
          <div> <i class="fa fa-calendar"></i>
            <time>
              {{$article->created_at}}
            </time>
          </div>
          <div> <i class="fa fa-tag"></i>
              
                <span class="label label-primary">machine-learning</span>
              
                <span class="label label-primary">python</span>
              
                <span class="label label-primary">numpy</span>
              
                <span class="label label-primary">scikit-learn</span>
              
          </div>
        </div>

      </header>

      <article class="page-content">
      	{{$article->body}}
      </article>
</div>
@endsection
