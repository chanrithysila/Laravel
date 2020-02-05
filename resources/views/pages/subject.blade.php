<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subject</title>
</head>
<body>
        <h1>Subject List</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Score</th>
            </tr>
            @foreach ($subjects as $subject)
            <tbody>
                <tr>
                    <td>
                        {{$subject['name']}}
                    </td>
                    <td>
                        {{$subject['score']}}
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        
</body>
</html>