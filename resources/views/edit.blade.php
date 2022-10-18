@extends('layouts.app')
@section('title')
Edit Todo
@endsection
@section('content')

<form action="/api/update/{{$task->id}}" method="post" class="mt-4 p-4">
    <div class="form-group m-3">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" value="{{$task->name}}">
    </div>
    <div class="form-group m-3">
        <label for="description">Description</label>
        <textarea class="form-control" rows="3" name="description">{{$task->description}}</textarea>
    </div>
    <div class="form-group m-3">
        <label for="description">Days of week</label>
        <textarea class="form-control" rows="3" name="label">{{$task->label}}</textarea>
    </div>
    <div class="form-group m-3">
        <input type="submit" class="btn btn-primary float-end" value="Update">
    </div>

</form>

@endsection