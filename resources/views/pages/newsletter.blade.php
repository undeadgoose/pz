@extends('layouts.app')

@section('content')

<div class="container">
    <div id="newsletter" style="height: 100vh;" class="mt-5">
        <div class="jumbotron bg-dark">
            <h4 class="mx-auto my-auto text-center text-white">Subscribe to our Newsletter</h4>
        </div>
        <div class="bg-white p-5 rounded">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            {!!Form::open()!!}
            {!!Form::token()!!}
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    {!! Form::label('Name:') !!}
                    {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Name']) !!}
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                    {!! Form::label('Email:') !!}
                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Email']) !!}
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-dark" type="submit">Submit</button>
                </div>
            {!!Form::close()!!} 
        </div>
    </div>
    
</div>


@endsection