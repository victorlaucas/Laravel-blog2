<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
</head>
<body>
  <ul>
    @foreach ($tasks as $task)
      <li>
        <a href="/tasks/{{ $task->id }}">
          {{ $task->body }}
        </a>
      </li>
    @endforeach
  </ul>
</body>
</html>