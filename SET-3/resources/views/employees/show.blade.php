<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Employee Profile</h1>
        <div>
        <span>Employee ID:{{ $employee->id }}</span>
        <span>Name:{{ $employee->name }}</span>
        <span>Designation:{{ $employee->designation }}</span>
        <span>Salary:{{ $employee->salary }}</span>
        </div>
        <div>
            <a href="{{ route('employees.index') }}"> back to List</a>
        </div>
    </div>
</body>
</html>