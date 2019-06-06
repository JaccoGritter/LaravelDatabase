
@extends('layout')

@section('content')

    <h2>My Projects</h2>

    @foreach ($projects as $project)

        <li>{{ $project->title }}</li>

    @endforeach

@endsection('content')