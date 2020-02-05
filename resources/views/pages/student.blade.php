<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
</head>
<body>
        <h1>There are students as following: </h1>
        <ul>
            @foreach ($students as $student)
                <li>{{$student}}</li>
            @endforeach
        </ul>
</body>
</html>