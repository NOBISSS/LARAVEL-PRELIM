<html>
    <head>
        <title>Tasks</title>
    </head>
    <body>
        @if($errors->any())
        <h1>Error List::</h1>
            @foreach($errors->all() as $error)
                <h2>{{$error}}</h2>
            @endforeach
        @endif
        @if(session('success'))
            <h1>{{session('success')}}</h1>
        @endif
        @if(count($tasks)>0)
        <table border=1 cellspacing=5 cellpadding=5 style='border-collapse:collapse'>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
        @foreach($tasks as $task)
            <tr>
                <td name="{{$task->id}}"><a href="/task/{{$task->id}}">{{$task->id}}</a></td>
                <td>{{$task->title}}</td>
                <td>{{$task->description}}</td>
                @if($task->status=="completed")
                    <td >CSS:{{$task->status}}</td>
                @else
                    <td>{{$task->status}}</td>
                @endif
            </tr>
        @endforeach
        </table>
        @else
            <h1>No Task Added Yet Wants to create ??</h1>
            <a href="/task-form">Click Here</a>
        
        @endif
    </body>
</html>