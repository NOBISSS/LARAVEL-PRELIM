<html>
    <head>
        <title></title>
    </head>
    <body>
        <div>
        <h2>🧑‍🎓 Student Details</h2>

        <div>
            <span>ID</span>
            <span>#{{$student->id}}</span>
        </div>
        <div>
            <span>NAME</span>
            <span>{{$student->name}}</span>
        </div>
        <div>
            <span>Email</span>
            <span>{{$student->email}}</span>
        </div>
        <div>
            <span>Course</span>
            <span>{{$student->course}}</span>
        </div>


        <div>
            <a href="{{ route('students.index') }}"><- Back to Student List</a>
        </div>
        </div>
    </body>
</html>