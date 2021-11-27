@extends('layouts.main')

@section('title', 'HDC')

@section('content')

@foreach ($events as $event)
    <p>{{$event->title}} || {{$event->description}} hj</p>
@endforeach
@endsection