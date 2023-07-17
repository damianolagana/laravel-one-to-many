@extends('layouts.admin')

@section('content')

<div class="container my-3">
    <h1 class="text-center pb-3">Project Details</h1>
    <div class="row g-4">
        <div>
            {{-- <h4 class="text-center"><a href="{{route("comics.show",$comic->id)}}">{{$comic->title}}</a></h4> --}}
            <h4 class="text-center">{{$project->title}}</h4>
            <p class="pt-3 text-center">{{$project->content}}</p>
            <p class="pt-3 text-center">Categoria: {{$project->type ? $project->type->name : "Type not found"}}</p>
            <div class="py-3 text-center imgBox">
                <img class="w-50" src="{{$project->image}}" alt="">
            </div>
        </div>
        
        <div class="text-center">
            <a href="{{route("admin.projects.index")}}" class="btn btn-primary">Return to Project List</a>
        </div>
        
    </div>

</div>


@endsection