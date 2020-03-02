<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('newPost')}}" >+New Post</a>
                    <a href="{{route('allPost')}}" class="float-right">All Post</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>ID:{{Auth::id()}}</p>
                    <p>Name:{{Auth::user()->name}}</p>
                    <p>Email:{{Auth::user()->email}}</p>
                    <p>Phone:{{Auth::user()->profile->phone}}</p>
                    <p>Address:{{Auth::user()->profile->address}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
