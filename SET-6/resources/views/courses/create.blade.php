<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    @if(@session('success'))
        <div>
            <p>✅ {{session('success')}}</p>
        </div>
    @endif
    <div>
        <form action="{{ route('courses.store') }}" method="post">
            @csrf
            <input type="text" name="course_name" placeholder="Enter Course Title"/><br>

            <input type="text" name="duration" placeholder="Enter Course Duration"/><br>

            <input type="number" name="fees" placeholder="Enter Course fees"/><br>
            <button type="submit">Create Course</button>
        </form>
        <div>
            <a href="/courses">Check List Of Courses</a>
        </div>
    </div>
</body>
</html>