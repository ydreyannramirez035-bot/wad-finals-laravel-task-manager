<h1>Tasks</h1>

<a href="{{ route('tasks.create') }}">Create Task</a>

<br><br>

@foreach($tasks as $task)
    <div>
        <h3>{{ $task->title }}</h3>
        <p>{{ $task->description }}</p>
    </div>
@endforeach
