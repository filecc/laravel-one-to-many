@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Portoflio</h1>
    <a href="{{route('admin.index')}}">Dashboard</a>
    @foreach ($projects as $project)
        <div class="px-2 py-4">
            <div class="row">
                <div class="col-7 bg-white py-3">
                    <h3>{{$project->title}}</h3>
                    <small>{{$project->created_at}}</small>
                    <br>
                    <small>Stato: {{$project->status}}</small>
                    <p class="pt-3">{{$project->content}}</p>
                    <a href="{{route('projects.show', $project)}}">Leggi tutto</a>
                </div>
                <div style="max-height: 300px" class="col-5 overflow-hidden">
                        <img class="w-100" src="{{$project->image}}" alt="{{$project->title}}">
                </div>
            </div>

        </div>
    @endforeach
    {{ $projects->links() }}
</div>
@endsection
