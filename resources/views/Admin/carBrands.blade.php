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
            <h1 class="text-success text-center">Register Brands</h1>
        </div>

        <div class="col-md-12">
            <form action="{{route('Carbrands')}}" method="post" enctype="multipart/form-data" style="width: 500px">
                @csrf
                <div class="form-group">
                    <label>Brands_Name</label>
                    <input type="text" name="Brands_Name" id="" class="form-control">
                    @error('Brands_Name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Brands_Discription</label>
                    <input type="text" name="Brands_Discription" id="" class="form-control">
                    @error('Brands_Discription')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>


                <div class="form-group">
                    <label>Brands_Logo</label>
                    <input type="file" class="form-control p-1" name="Brands_Logo">
                    @error('Brands_Logo')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Add Brands</button>
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