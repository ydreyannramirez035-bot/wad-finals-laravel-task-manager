<h1>Create Task</h1>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf

    <div>
        <label>Title:</label><br>
        <input type="text" name="title" required>
    </div>

    <br>

    <div>
        <label>Description:</label><br>
        <textarea name="description"></textarea>
    </div>

    <br>

    <button type="submit">Create Task</button>
</form>

<br>

<a href="{{ route('tasks.index') }}">Back</a>
