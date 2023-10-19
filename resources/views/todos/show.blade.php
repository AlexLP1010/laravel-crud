@extends('layout')
@section('content')
<h1>Edid todo</h1>
<form action="{{ route('todos-edit', ['id' => $todo->id]) }}" method="post">
    @csrf
    @method('patch')
    <div class="fillable">
        <input type="text" name="title" id="title" value="{{ $todo->title }}" require="required" class="txt">
        <label for="title">Title</label>
    </div>
    <div class="fillable">
        <textarea name="description" rows="5" id="description" required="required" class="txt">{{ $todo->description }}</textarea>
        <label for="description">Description</label>
    </div>
    <input type="submit" value="Save">
</form>
@endsection