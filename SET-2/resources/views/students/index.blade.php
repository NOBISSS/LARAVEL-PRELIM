<html>
    <head>
        <title></title>
        <style>
            .table{
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
       <h2>All Students</h2> 
        @if(session('success'))
            <div>
                ✅ {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('students.create') }}">Create New Student</a>

        @if(count($students)>0)
            <table border=1 cellspacing=5 cellpadding=5 class="table">
                <tr>
                    <th>Sr</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Registerd</th>
                    <th>View</th>
                </tr>

                @foreach ($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td><strong>{{$student->name}}</strong></td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->course}}</td>
                        <td>{{$student->created_at->format('d M Y')}}</td>
                        <td>
                        <a href="/student/{{ $student->id }}">
                            👁️ view</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        @else
            <div>
                <p>No Students Registered Yet!!</p>
                <a href="{{ route('students.create') }}">Register First Student</a>
            </div>
        @endif
    </body>
</html>