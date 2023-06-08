@extends('layouts.app')

@section('content')
<div class="container">
    @if (session()->has('message'))
    <div class="alert alert-success my-4">
        {{ session()->get('message') }}
    </div>
    @endif
    <h3>{{$project->title}}</h3>
    @foreach ($project->technologies as $tech)
    <span class="badge rounded-pill text-bg-primary text-capitalize">{{$tech->technology}}</span><br>
    @endforeach
    <img class="py-3" src="{{$project->image}}" alt="{{$project->title}}">
    <p>{{$project->content}}</p>
    <small>{{$project->created_at}}</small> - <small>{{$project->status}}</small>



</div>

@endsection
