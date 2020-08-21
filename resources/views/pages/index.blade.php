@extends('layouts.app')


@section('content')
    <section id="pz-home-page">
        <header class="bg-black">
            <h1 class="mx=auto text-center pb-5">BEYOND GAMING</h1>
            <div id="pzCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/img/bg-2-alt.jpg">
                    <div class="carousel-caption">
                      <strong>We aim to create a place in which gamers can showcase and share their talents and stories</strong>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <img src="/img/bg-3-alt.jpg">
                    <div class="carousel-caption">
                      <strong>To build a community that unites gamers of all ages and of all gaming systems. A hub in which being a gamer connects you to people who share the same passion</strong>
                    </div>   
                  </div>
                </div>
                <div class="pt-5">
                  <ul class="carousel-indicators">
                    <li data-target="#pzCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#pzCarousel" data-slide-to="1"></li>
                  </ul>
                </div>
                <a class="carousel-control-prev" href="#pzCarousel" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#pzCarousel" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
    </header>
    <div class="bg-white">
      <section id="featured-blog" class="mx-auto text-center py-5">
          <div class="heading mx-auto">
            <span>FEATURED BLOG</span>
          </div>
          <div class="row">
            <div class="col-xl-4">
                <img class="shadow-md rounded" src="/storage/cover_images/final-fantasy-vii_1596268186.svg">
                <h5 class="my-3"><a class="text-dark d-inline-block" href="http://playerzero.info/blog/20206">FF VII: Crisis Core - A Testament To Good Story Writing</a></h5>
              
            </div>
            <div class="col-xl-4">
                <img class="shadow-md rounded" src="/storage/cover_images/fortnite-4556887_1280_1595313677.png">
                <h5 class="my-3"><a class="text-dark d-inline-block" href="http://playerzero.info/blog/20202">THE 5TH PLAYER</a></h5>
            </div>
            <div class="col-xl-4">
                <img class="shadow-md" src="/storage/cover_images/alienware-ickPGVMMr98-unsplash_1596178534.jpg">
                <h5 class="my-3"><a class="text-dark d-inline-block" href="http://playerzero.info/blog/20205">PC Builds for Home Study</a></h5>
            </div>
          </div>
      </section>
    </div>
    

    <section id="about" class="py-5 mx-auto text-center">
          <div class="about-text mb-5 px-3">
            <span class="pb-4">ABOUT</span>
            <p>Established in 2016 by young Filipino gamers, Player Zero aims to deliver news, entertainment, and information about everything that relates to the gaming industry and help in establishing a healthy gaming community.</p>
          </div>
        <div class="wcu px-3">
            <span class="pb-4">Do you want to express your passion for creating blogs?</span>
           <p>Here at Player Zero, you can submit your own blogs related to gaming. We are prepared to help aspiring bloggers gain more exposure and reach for blogs that you've written.</p>
          </div>
    </section>
    
    </section>
@endsection