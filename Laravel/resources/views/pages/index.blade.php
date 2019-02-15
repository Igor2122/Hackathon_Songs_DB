@extends('templates.base')

@section('content')
    <h1>Hello there</h1>
        {{-- @php
            var_dump($data);
        @endphp --}}
    @foreach ($data as $song)
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{!! $song->link !!}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    @endforeach
@endsection


{{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/GllEDACUbNo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}