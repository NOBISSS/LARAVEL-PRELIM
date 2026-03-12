<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <form action="{{route('employees.store')}}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="eg. John"/><br>
            <select name="designation">
                <option>-- Select Designation --</option>
                @foreach (['HR','MANAGAR','ACCOUNTANT'] as $desig)
                    <option value="{{ $desig }}">{{ $desig }}</option>
                @endforeach
            </select>
            <input type="number" placeholder="eg. 2000" name="salary"/>
            <button type="submit">Create</button>
        </form>
    </body>
</html>