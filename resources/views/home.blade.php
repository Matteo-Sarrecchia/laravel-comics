@extends('layout.main-layout')

@section('pageName')

    home

@endsection

@section('content')

    <main class="py-5 bg-primary">
       <div class="container"> 
            <div class="row d-flex"> 
               
                @foreach ($fumetti as $fumetto)
                    <div class="card bg-success my-2 p-2 col-2">
                        <img src="{{$fumetto['thumb']}}" alt="" class="rounded">
                        <div class="text-light text-center mt-2">{{$fumetto['title']}}</div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-success">SEARCH</button>
            </div>
    </main>

@endsection