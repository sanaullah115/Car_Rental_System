@extends('layouts.App')
@section('title','Register')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />

</head>

<body>
    @section('content')
    <div class="row  justify-content-center">
        <div class="col-md-12 ">
            <h1 class="text-success text-center">Register Form</h1>
        </div>

        <div class="col-md-12">
            <form action="{{route('saveregister')}}" method="post" enctype="multipart/form-data" style="width: 500px">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" id="" class="form-control">
                    @error('name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" id="" class="form-control">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" id="" class="form-control">
                    @error('password')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Profile</label>
                    <input type="file" class="form-control p-1" name="image">
                    @error('image')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Regiser</button>
            </form>
        </div>

        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>


        @endif
    </div>









    @endsection

</body>

</html>