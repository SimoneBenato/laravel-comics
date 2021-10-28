@extends('layouts.app')

@section('content')
    @foreach ($fumetti as $fumetto)
        <p>{{$fumetto['title']}}</p>
    @endforeach
@endsection