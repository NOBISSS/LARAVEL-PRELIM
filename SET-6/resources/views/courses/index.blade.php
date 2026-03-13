<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (count($courses)>0)
    <div>
        <table border=1 cellspacing=5 cellpadding=5>
            <tr>
                <th>Sr No</th>
                <th>Course Name</th>
                <th>Duration</th>
                <th>Fees</th>
                <th>Affordability</th>
                <th>View</th>
            </tr>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->duration }}</td>
                    <td>{{ $course->fees }}</td>
                    @if($course->fees > 1500)
                        <td>Expensive</td>
                    @else
                        <td>Affordable</td>
                    @endif
                    <td><a href="/course/{{ $course->id }}">View</a></td>
                </tr>
            @endforeach
        </table>
    </div>
    @else
        <p>No Course Created Yet</p>
        <a href="/course-form">Create </a>
    @endif
    <a href="/course-form">Create </a>
</body>
</html>