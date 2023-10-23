@extends('layout')
@section('content')
<div>
    <h1>Your tasks</h1>
    <main class="tasks-container">
        @forelse ($todos as $todo)
        <div class="task">
            <a href="{{ route('todos-show', ['id' => $todo->id]) }}">
                <p>{{ $todo->title }}</p>
                <p>{{ $todo->description }}</p>
            </a>
            <form action="{{ route('todos-destroy', ['id' => $todo->id]) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" class="btn btn-delete">
            </form>
        </div>
        @empty
        <p>No todos</p>
        @endforelse
    </main>
</div>
<div class="modal-container hide" id="containerAddTodoForm">
    <div class="addtodo-container">
        <h2>Add new todo</h2>
        <form action="{{ route('todos-create') }}" method="post">
            @csrf
            @if (session('succes'))
            <div>
                <p>{{ session('succes') }}</p>
            </div>
            @endif
            <div class="fillable">
                <input type="text" name="title" id="title" required="required" class="txt">
                <label for="title">Title</label>
            </div>
            <div class="fillable">
                <textarea name="description" rows="5" id="description" required="required" class="txt"></textarea>
                <label for="description">Description</label>
            </div>
            <div>
                <input type="submit" value="Create" class="btn">
                <button class="btn btn-delete" id="btnCancel">Cancel</button>
            </div>
        </form>
    </div>
</div>
<div class="float-fixed">
    <button class="btn" id="btnAddTodoTogleForm">Add todo</button>
</div>
@endsection