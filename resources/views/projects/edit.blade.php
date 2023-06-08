@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{$project->title}}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image link</label>
                <input type="text" class="form-control" name="image" value="{{$project->image}}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <input type="text" class="form-control" name="content" value="{{$project->content}}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="status">Status</label>
                <select class="form-select" name="status" id="status">
                    <option value="loading">On going</option>
                    <option value="completed">Completed</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-outline-danger">Reset</button>
        </form>
    </div>
@endsection
