@extends('layout')
@section('content')
<div>
    <h1>Your tasks</h1>
    @forelse ($todos as $todo)
        <a href="{{ route('todos-show', ['id' => $todo->id]) }}">
            <p>{{ $todo->title }}</p>
            <p>{{ $todo->description }}</p>
        </a>
        <form action="{{ route('todos-destroy', ['id' => $todo->id]) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>
    @empty
        <p>No todos</p>
    @endforelse
</div>
<div>
    <form action="{{ route('todos-create') }}" method="post">
        @csrf
        @if (session('succes'))
            <div>
                <p>{{ session('succes') }}</p>
            </div>
        @endif
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description">
        </div>
        <input type="submit" value="Create">
    </form>
</div>
@endsection