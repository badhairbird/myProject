<!DOCTYPE html>
<html>
<body>

<h1>My Todos</h1>

<ul>
    @foreach ($todos as $todo)
        <a href="{{route ('todos.show',$todo -> id)}}"><h3>{{$todo -> title}}</h3></a>
        {{$todo -> body}}<br>
        <hr>
    @endforeach
</ul>



</body>
</html>