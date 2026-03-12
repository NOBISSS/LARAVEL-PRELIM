<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>All Employee</h2>
    @if (session('success'))
        <div>
            ✅ {{ session('message') }}
        </div>
    @endif

    <a href="{{ route('employees.create') }}">Create New Employee</a>
    @if (count($employees)>0)
        <table border=1 cellspacing=5 cellpadding=5 style="border-collapse:collapse">
            <tr>
                <th>Sr</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Salary</th>
                <th>Salary Status</th>
                <th>👁️ View</th>
            </tr>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->designation }}</td>
                    <td>{{ $employee->salary }}</td>
                    @if ($employee->salary > 5000)
                        <td>High</td>
                    @else
                        <td>Low</td>
                    @endif
                        <td><a href="/employee/{{ $employee->id }}">👁️ View</a></td>
                </tr>
            @endforeach
        </table>
    @endif
</body>
</html>