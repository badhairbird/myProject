<form action="{{ route('todos.update', $todo) }}" method="post">

    {{ csrf_field() }}

    {{ method_field('PUT') }}

    <text name="title">{{ $todo->title }}</text>
    <textarea name="title">{{ $todo->body }}</textarea>

    <BR>
    <input type="submit">

</form>