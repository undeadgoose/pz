@extends('layouts.app')

@section('content')

    <section id="pz-contact-page" class="bg-black pb-5">
        <div class="text-center text-light text-uppercase text-spacing-1 pt-5 mb-5">
            <h1>{{$title}}</h1>
        </div>
        
        <div class="pz-contact-form bg-white py-5">
            <div class="container">
                <h4 class="py-2">Leave a message:</h4>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
                {!! Form::open(['route'=>'contactus.store']) !!}
                    <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                    {!! Form::text('first_name', old('first_name'), ['class'=>'form-control', 'placeholder'=>'First Name']) !!}
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                        {!! Form::text('last_name', old('last_name'), ['class'=>'form-control', 'placeholder'=>'Last Name']) !!}
                        <span class="text-danger">{{ $errors->first('last_name') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('contact_number') ? 'has-error' : '' }}">
                        {!! Form::text('contact_number', old('contact_number'), ['class'=>'form-control', 'placeholder'=>'Contact Number']) !!}
                        <span class="text-danger">{{ $errors->first('contact_number') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                    {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Message']) !!}
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                    </div>

                    <div class="form-group">
                    <button class="btn btn-info">Submit</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>

@endsection