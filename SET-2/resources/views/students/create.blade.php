<html>
    <head>
        <title></title>
        <style>
            .container{
                display: flex;
                justify-content: center;
                align-items: flex-start;
                flex-direction: column;
                gap: 5px;
            }
        </style>
    </head>
    <body>
            <div class="container">
                <h2>Student Registration</h2>

                @if($errors->any())
                    <div>
                        <strong>Please Fix These Errors:</strong>
                        <ul>
                            @foreach ($errors as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="container" action="{{ route('students.store') }}" method="POST">
                    @csrf
                    <label>Name
                    <input type="text" name="name" placeholder="eg. John"/>
                    </label>
                    @error('name')
                        <p>⚠️ {{$message}}</p>
                    @enderror
                    <label>Email
                    <input type="email" name="email" placeholder="eg. abc@gmail.com"/></label>
                     @error('email')
                        <p>⚠️ {{$message}}</p>
                    @enderror
                    <label>Course
                    <select name="course">
                        <option>-- Select Course --</option>
                        @foreach (['BBA','BCA','BCOM','MCA','MBA'] as $course)
                            <option value="{{ $course }}">
                                {{ $course }}
                            </option>
                        @endforeach
                    </select>
                    </label>
                    @error('course')
                        <p>⚠️ {{$message}}</p>
                    @enderror

                    <button type="submit">Create</button>
                </form>
            </div>
    </body>
</html>