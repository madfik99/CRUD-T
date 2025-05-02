<!DOCTYPE html>
<html>
<head><title>Edit Task</title></head>
<body>
    <h1>Edit Task</h1>
    <form method="POST" action="{{ route('tasks.update', $task) }}">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $task->title }}" required><br>
        <textarea name="description">{{ $task->description }}</textarea><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
