@extends('layouts.app')

@section('content')

<div class="bg-black pb-5">
    <section id="pz-talents-page">
        <div class="jumbo-talents mg-b text-center text-light text-uppercase text-spacing-1 pt-5">
            <h1>{{$title}}</h1>
        </div>
        
        <div class="card-container mg-b">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-lg-5 col-xl-4 py-3">
                <img src="{{asset('img/undeadgoose.jpg')}}" class="rounded-circle" height="250" width="250">
              </div>
              <div class="col-xs-12 col-sm-12 col-lg-7 col-xl-8">
                <h2 class="pd-all">undeadgoose</h2>
                <p class="pd-all">A fan of gaming. He just loves to play whatever game he likes, whenever he likes. Not to be trifled with when he's serious because he might unleash his inner beast!</p>
                <a href="https://www.facebook.com/undeadgoosegames/" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/undeadgoose_" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCTQYPXySvUZh6Qmew-tODQA"><i class="fab fa-youtube" target="_blank"></i></a>
              </div>
            </div>
        </div>
        
        <div class="card-container mg-b">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-5 col-xl-4 py-3">
              <img src="{{asset('img/kreydi.jpg')}}" class="rounded-circle" height="250" width="250">
            </div>
            <div class="col-xs-12 col-sm-12 col-lg-7 col-xl-8">
              <h2 class="pd-all">King Kreydi</h2>
              <p class="pd-all">An avid DOTA player ever since he was young, King Kreydi is one of Player Zero's best DOTA 2 player. A game enthusiast no matter what platform he plays and a tech savvy individual that you can count on.</p>
              <a href="https://www.facebook.com/king.kreydi/" target="_blank"><i class="fab fa-facebook"></i></a>
              <a href="https://instagram.com/kingkreydi" target="_blank"><i class="fab fa-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UC7ixt84N_QiaCaiurc3LzXA" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
      </div>
      
      <div class="card-container mg-b">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-lg-5 col-xl-4 py-3">
            <img src="{{asset('img/mikz.jpg')}}" class="rounded-circle" height="250" width="250">
          </div>
          <div class="col-xs-12 col-sm-12 col-lg-7 col-xl-8">
            <h2 class="pd-all">Mikzeeks</h2>
            <p class="pd-all">Bewitched by the flamboyant narrative of Final Fantasy 7: Crisis Core. Mikz fell in love with video games and succumbed to the ecstatic narratives and miserable tragedies that only gaming can deliver.</p>
            <a href="https://www.facebook.com/mrmikzeeks" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/mrmikzeeks/" target="_blank"><i class="fab fa-instagram" ></i></a>
            <a href="https://www.youtube.com/channel/UCR-4siWEGNE8GuLrBNut1Zg" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://www.twitch.tv/mikzeeks" target="_blank"><i class="fab fa-twitch"></i></a>
          </div>
        </div>
      </div>
      
      <div class="card-container mg-b">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-lg-5 col-xl-4 py-3">
            <img src="{{asset('img/wasabi.jpg')}}" class="rounded-circle" height="250" width="250">
          </div>
          <div class="col-xs-12 col-sm-12 col-lg-7 col-xl-8">
            <h2 class="pd-all">Wasabi</h2>
            <p class="pd-all"></p>
            <a href="https://www.facebook.com/wasabi.wasabi.315428" target="_blank"><i class="fab fa-facebook"></i></a>
          </div>
        </div>
      </div>
    </section>
</div>
    

@endsection