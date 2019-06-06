@extends('layout')

@section('content')
    <h1>Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->id }}">
        {{ method_field('PATCH')}}
        {{ CSRF_field() }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $project->title }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" value="{{ $project->description }}" >
        </div>

        <button type="submit" class="btn btn-primary mb-1">Submit</button>

    </form>

    <form method="POST" action="/projects/{{ $project->id }}">
            {{ method_field('DELETE')}}
            {{ CSRF_field() }}
            <button type="submit" class="btn btn-danger">Delete</button>    
    </form>
    

@endsection('content')