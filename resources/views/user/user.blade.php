
{{-- {{route('users.edituser',$user->id)}}
{{route('users.destroyUser',$user->id)}} --}}


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="row">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($users as $user)
                                <tbody>
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->profile->phone}}</td>
                                        <td>{{$user->profile->address}}</td>
                                        <td>
                                            <a href="{{route('showEdit',$user->id)}}">Edit</a>|
                                            <a onclick="return confirm('Are you sure to delete?')" href="{{route('delete',$user->id)}}">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
    </div>
</div>
@endsection
