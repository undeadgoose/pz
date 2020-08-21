@extends('layouts.app')

@section('content')
        <section id="pz-blog-showcase" class="bg-black">
            <h3 class="text-white pl-5 py-5">All Posts:</h3>      
            
            <div class="container">
            @if(count($posts) > 0)
                @foreach($posts as $post)
                        <div class="blog-posts-menu">
                            <div class="bg-white rounded" style="height:auto">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-3">
                                        <img class="img-thumbnail d-none d-lg-block" style="max-height:400px; width:100%; max-width:400px;" src="/storage/cover_images/{{$post->cover_image}}">
                                    </div>
                                    <div class="col-xl-9 col-lg-9">
                                        <h3 class="py-3">{{$post->title}}</h3>
                                        <span class="text-muted">Published on: {{$post->created_at->format('m-d-Y')}}</span>
                                        <p class="py-5">{{$post->description}}</p>
                                    <a href="/blog/{{$post->slug}}" class="btn btn-dark text-white">Read More</a>
                                    </div>
                                </div>
                            </div>

                            
                                {{-- <div class="mb-5">
                                        <a href="/blog/{{$post->id}}">
                                            <img class="img-fluid card-img-top blog-index-img" src="/storage/cover_images/{{$post->cover_image}}">
                                        </a>                                   
                                        <div class="card-body">
                                            <h3><a class="text-white" href="/blog/{{$post->id}}">{{$post->title}}</a></h3>
                                    </div>                 --}}
                        </div>                     
                @endforeach
                    <div class="justify-content-center">
                        {{$posts->links()}}
                    </div>
                @else
                    <p>No posts found</p>
                @endif
                        </div>    
            </div>
        </section>   

@endsection
