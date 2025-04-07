<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
</head>
<body>
    <h1>My Tasks</h1>

    <form method="POST" action="/tasks">
        @csrf
        <input type="text" name="title" placeholder="New task">
        <button type="submit">Add</button>
    </form>

    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->title }}
            </li>
        @endforeach
    </ul>
</body>
</html>
