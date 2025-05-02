<!DOCTYPE html>
<html>
<head><title>Create Task</title></head>
<body>
    <h1>Create Task</h1>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <input type="text" name="title" placeholder="Title" required><br>
        <textarea name="description" placeholder="Description"></textarea><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
