@extends('layouts.app')

@section('content')
<section id="news" class="bg-dark py-5">
  @foreach($news as $newspost)
    <div class="container">
      <div class="bg-white mb-5 rounded bg-hover">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-4">
            <img src="{{asset('/img/bg-1.jpg')}}" class="d-block p-3 img-fluid img-thumbnail" style="max-width: 100%">
          </div>
          <div class="col-xl-8 col-lg-8 col-md-8">
            <a href="#" class="text-dark">
              <h1 class="pt-3"><span>{{$newspost->title}}</span></h1>
            </a>
            <span class="muted">Published on: {{$newspost->created_at->format('F j, Y')}} by {{$newspost->author}}</span>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</section>

@endsection