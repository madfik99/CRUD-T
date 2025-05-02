<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
</head>
<body>
    <h1>Task List</h1>
    <a href="{{ route('tasks.create') }}">+ Add Task</a>
    @foreach ($tasks as $task)
        <div style="margin-top: 20px">
            <strong>{{ $task->title }}</strong>
            <p>{{ $task->description }}</p>
            <a href="{{ route('tasks.edit', $task) }}">Edit</a>
            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
</body>
</html>
