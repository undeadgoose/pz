@extends('layouts.app')

@section('content')

       <section id="pz-partners-page" class="bg-black">
            <div class="partners-heading mg-b text-center text-light text-uppercase text-spacing-1 pt-5">
                <h1>{{$title}}</h1>
            </div>

            <div class="partners-container">

                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-sm-12 partners-card pd-tb text-center">
                            <img src="{{asset('img/05.png')}}" ondragstart="return false;" height="250px" width="250px">
                            <h3>Miko Declaro</h3>
                            <small>Chief Executive Officer</small>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 partners-card pd-tb text-center">
                            <img src="{{asset('img/01.png')}}" ondragstart="return false;" height="250px" width="250px">
                            <h3>Benjamin Dela Cruz</h3>
                            <small>Chief Operating Officer</small>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12 partners-card pd-tb text-center">
                            <img src="{{asset('img/03.png')}}" ondragstart="return false;" height="250px" width="250px">
                            <h3>Jake Pabalan</h3>
                            <small>Chief Financial Officer</small>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12 partners-card pd-tb text-center">
                            <img src="{{asset('img/04.png')}}" ondragstart="return false;" height="250px" width="250px">
                            <h3>Julian Gutierrez</h3>
                            <small>Chief Social Media Officer</small>
                        </div>
                        <div class="col-xl-6 col-md-12 col-sm-12 partners-card pd-tb text-center">
                            <img src="{{asset('img/02.png')}}" ondragstart="return false;" height="250px" width="250px">
                            <h3>Jason Duff</h3>
                            <small>Chief Technical Officer</small>
                        </div>
                    </div> 

            </div> 
        </section>
@endsection