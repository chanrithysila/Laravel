<h3>this is customer list pages</h3>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    @foreach ($customers as $customer)
    <tbody>
        <tr>
            <td>{{$customer['id']}}</td>
            <td>{{$customer['name']}}</td>
            <td>{{$customer['email']}}</td>
        </tr>
    </tbody>
    @endforeach
</table>
    {{-- {{$customer}} --}}