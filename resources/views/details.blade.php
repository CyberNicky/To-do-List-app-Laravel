@extends('layouts.app')

@section('title')
Details
@endsection

@section('content')

<div class="card text-center mt-5">
    <div class="card-header">
        <b>Tasks {{$task->name}} DETAILS</b>
    </div>
    <div class="card-body">
        <h5 class="card-title">{{$task->name}}</h5>
        <p class="card-text">{{$task->description}}</p>

    </div>
</div>

@endsection