@extends('app')

@section('content')
<div class="page">
      <header class="page-header">
        <h1 class="page-title">About</h1>
        <div class="post-metadata">
          <div> <i class="fa fa-calendar"></i>
            <time>
              {{$article->created_at}}
            </time>
          </div>
        </div>

      </header>

      <article class="page-content">
      	{{$article->body}}
      </article>
</div>
@endsection
