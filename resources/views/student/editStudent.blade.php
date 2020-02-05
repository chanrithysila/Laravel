<form action="{{route('update',$student->id)}}" method="POST">
    @method('PUT')
    @csrf
    <input value="{{$student->Firstname}}" type="text" placeholder="fname" name="fname">
    <input value="{{$student->Lastname}}" type="text" placeholder="lname" name="lname">
    <input value="{{$student->Age}}" type="number" placeholder="age" name="age">
    <button type="submit">Edit</button>
</form>