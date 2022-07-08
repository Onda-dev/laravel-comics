@extends('layouts.base')

@section('page-title')

@endsection

@section('page-content')
    <section>
        <ul>
            @foreach ($comics as $comic)
                <li>
                    <img src="{{$comic['thumb']}}" alt="">
                    <h3>{{$comic['title']}}</h3>
                </li>
            @endforeach
        </ul>
    </section>
@endsection