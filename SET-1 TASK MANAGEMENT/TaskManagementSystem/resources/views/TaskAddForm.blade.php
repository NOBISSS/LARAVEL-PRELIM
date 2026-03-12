<html>
    <head>
    <title>Add Task Form</title>
    </head>
    <body class="">
        @if($errors->any())
        <h1>Error List::</h1>
            @foreach($errors->all() as $error)
                <h2>{{$error}}</h2>
            @endforeach
        @endif
        @if(session('success'))
            <h1>Task Added Successfully ✔️</h1>
        @endif
        <form action="/task/store" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Enter Task Title"/><br>
            <input type="text" name="description" placeholder="Enter Task Description"/><br>
            <select id="status" name="status">
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
            </select><br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>