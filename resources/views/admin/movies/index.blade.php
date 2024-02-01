@extends('movies')

@section('main-content')

            <ul>
                @foreach ($movies as $movie)
                    <li>
                        {{ $movie->title }}
                    </li>
                @endforeach
            </ul>

@endsection