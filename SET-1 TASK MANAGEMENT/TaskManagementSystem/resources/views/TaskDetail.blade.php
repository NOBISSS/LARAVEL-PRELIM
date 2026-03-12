<html>
    <head>
        <title>Task Details</title>
    </head>
    <body>
        @if($task)
            <h1>{{$task->title}}</h1>
            <h1>{{$task->description}}</h1>
            <h1>{{$task->status}}</h1>
        @endif
    </body>
</html>