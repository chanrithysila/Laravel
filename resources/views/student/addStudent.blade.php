@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    
@endif
<form action="save" method="POST">
    @csrf
    <input type="text" placeholder="fname" name="fname">
    <input type="text" placeholder="lname" name="lname">
    <input type="number" placeholder="age" name="age">
    <button type="submit">Add</button>
</form>