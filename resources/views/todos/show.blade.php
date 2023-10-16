@extends('layout')
@section('content')
<form action="{{ route('todos-edit', ['id' => $todo->id]) }}" method="post">
    @csrf
    @method('patch')
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $todo->title }}">
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="{{ $todo->description }}">
    </div>
    <input type="submit" value="Save">
</form>
@endsection