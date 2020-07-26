@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="/update/{{ $employee->id }}" method="post">
        @csrf
         <input type="hidden" name="id" class="form-control" value='{{ $employee->id }}'>
            <div class="row">
                <div class="col-md-2">
                    <label for="name" name="name">Name:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="name" class="form-control" value='{{ $employee->name }}'>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    <label for="salary" name="salary">Salary:</label>
                </div>
                <div class="col-md-4">
                    <input type="number" name="salary" class="form-control" value='{{ $employee->salary }}'>
                </div>
            </div>
            <br>
             <div class="row">
                <div class="col-md-2">
                    <label for="department" name="department">Department:</label>
                </div>
                <div class="col-md-4">
                    <input type="department" name="department" class="form-control" value='{{ $employee->department }}'>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    <label for="address" name="address">Address:</label>
                </div>
                <div class="col-md-4">
                    <textarea name="address" id="address" cols="47" rows="10">{{ $employee->address }}</textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    <label for="contact" name="contact">Contact:</label>
                </div>
                <div class="col-md-4">
                    <input type="number" name="contact" class="form-control" value='{{ $employee->contact }}'>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    <label for="contact" name="contact">Date:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="dob" class="form-control" id="datepicker-13" value='{{ $employee->dob }}'>
                </div>
            </div>
            <br>
            <div class="col-md-offset-12 col-md-2">
                <input type="submit" class="btn btn-success form-control">
            </div>
        </form>
    </div>
    <script>
         $(function() {
            $( "#datepicker-13" ).datepicker();
            $( "#datepicker-13" ).datepicker("show");
         });
    </script>
    </body>
</html>
@endsection