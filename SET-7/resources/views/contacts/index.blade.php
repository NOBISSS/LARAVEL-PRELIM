<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(session('success'))
        <p>✅ {{ session('success')}}</p>
    @endif
    
    <div>
        @if(count($contacts)>0)    
            <table border=1 cellspacing=5 cellpadding=5>
                <tr>
                    <th>SrNo</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>message</th>
                    <th>View</th>
                </tr>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $contact->name}}</td>
                        <td>{{ $contact->email}}</td>
                        <td>{{ $contact->message}}</td>
                        <td><a href="/contacts/{{ $contact->id }}">{{ $contact->message}}</a></td>
                    </tr>
                @endforeach
            </table>
        @else
            <p>Contact First to the HEAD</p>
        @endif
    </div>
</body>
</html>