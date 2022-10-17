
@extends('layouts.app')
@section('title')
    My Todo App
@endsection
@section('content')

    <div class="row mt-3">
        <div class="col-12 align-self-center">
            <ul class="list-group">
                @foreach($tasks as $task)
                    <li class="list-group-item"><a href="details/{{$task->id}}" style="color: cornflowerblue">{{$task->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

@endsection