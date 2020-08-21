@extends('layouts.app')

@section('social-head')
    <meta property="og:url"           content="http://playerzero.info/blog/{{$post->id}}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{$post->title}}" />
    <meta property="og:description"   content="{{$post->body}}" />
    <meta property="og:image"         content="http://playerzero.info/storage/cover_images/{{$post->cover_image}}" />

    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script data-ad-client="ca-pub-8823612208058050" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
@endsection

@section('content')
    <section id="pz-blog-main" class="my-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="bg-white">
                            <ol class="breadcrumb bg-white straight-corners mb-0 pl-4 my-3">
                                <li class="breadcrumb-item"><a class="text-decoration-none" href="/">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page"><a class="text-decoration-none" href="/blog">Blog</a></li>
                                <li class="breadcrumb-item active text-dark" aria-current="page">{{$post->title}}</li>
                            </ol>
                            <div class="bg-white title-image-area">
                                <img class="mb-4" src="/storage/cover_images/{{$post->cover_image}}">
                                
                                <h1 class="blog-title px-3">{{$post->title}}</h1>
                            <span class="text-muted d-block px-3">Posted on {{$post->created_at->format('F j, Y')}} by <a href="#" class="text-dark">{{$post->author}}</a></span>
                            <div class="ml-3">
                                <div class="fb-like mr-1" data-href="https://playerzero.info" data-width="" data-layout="button" data-action="like" data-size="small" data-share="true"></div>
                                <div class="twitter-share-icon">
                                    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="true">Tweet</a>
                                </div>
                            </div>
                            
                            </div>
                            <hr>

                            <div class="blog-body pb-5">
                                    {!!$post->body!!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
        @if(!Auth::guest())
            <a class="btn btn-info" href="/blog/{{$post->id}}/edit">Edit</a>
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif       
    </section>
@endsection

