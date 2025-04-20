@extends('layouts.main')

@section('content')
    <div class="row blog-entries element-animate fadeInUp element-animated">

        <div class="col-md-12 col-lg-8 main-content">
            <img src="/uploads/{{$article->detail_image}}" alt="{{$article->title}}" class="img-fluid mb-5">
            <div class="post-meta">
                <span class="mr-2">{{ $article->formatted_published_at }} </span>
            </div>
            <h1 class="mb-4">{{$article->title}}</h1>
            <a class="category mb-5" href="{{route('article.category', $article->category->slug)}}">{{ $article->category->title}}</a> 

            <div class="post-content-body">
                {!! $article->detail_text !!}
            </div>


            <div class="pt-5">
                <p>Tags: 
                    @foreach ($article->tags as $tag)
                        <a href="{{route('article.tag', $tag)}}">{{$tag}}</a> 
                    @endforeach
            </div>


            

        </div>

        <!-- END main-content -->

        @include('blocks.right')

    </div>
@endsection