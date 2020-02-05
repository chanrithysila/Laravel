<h1>Posts</h1>
<a href="{{route('addStudent')}}"><button>Add student</button></a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
    </thead>
    @foreach ($students as $student)
    <tbody>
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->Firstname}}</td>
            <td>{{$student->Lastname}}</td>
            <td>{{$student->Age}}</td>
            <td>
            <a href="{{route('edit',$student->id)}}"><button>Edit</button></a>
            <a href="{{route('delete',$student->id)}}" onclick="return confirm('Are you sure to delete?')"><button>Delete</button></a>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>