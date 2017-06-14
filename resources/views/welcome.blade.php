<html>
    <head>
        <title></title>
    </head>

    <body>
        <h1>Hello {{$name}} </h1>
        <ul>
            @foreach($tasks as $task)
                <li>{{ $task->body }}</li>
            @endforeach
        </ul>
    </body>
</html>