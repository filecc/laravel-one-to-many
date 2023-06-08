@extends('layouts.app')

@section('title')
Add Project
@endsection

@section('content')
<div class="container">
    <form action="{{route('admin.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="title">Title</label>
            <input class="form-control" type="text" name='title' id="title">
        </div>


        <div class="mb-3">
            <label class="form-label" for="content">Content</label>
            <input  class="form-control" type="text" name='content' id="content">
        </div>

        <div class="mb-3">
            <label class="form-label" for="image">Image</label>
            <input  class="form-control" type="text" name='image' id="image">
        </div>

        <div class="mb-3">
            <label class="form-label" for="status">Status</label>
            <select  class="form-select" name='status' id="status">
                <option value="loading">On going</option>
                <option value="completed">Completed</option>
            </select>
        </div>

        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value="Add">
        </div>


    </form>
</div>


@endsection
