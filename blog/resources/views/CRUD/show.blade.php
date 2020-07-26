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
            <div class="row">
                <div class="col-md-2">
                    <label for="name" name="name">Name:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="name" class="form-control" readonly value="{{ $employee->name }}">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    <label for="salary" name="salary">Salary:</label>
                </div>
                <div class="col-md-4">
                    <input type="number" name="salary" class="form-control" readonly value="{{ $employee->salary }}">
                </div>
            </div>
            <br>
             <div class="row">
                <div class="col-md-2">
                    <label for="department" name="department">Department:</label>
                </div>
                <div class="col-md-4">
                    <input type="department" name="department" class="form-control" readonly value="{{ $employee->department }}">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    <label for="address" name="address">Address:</label>
                </div>
                <div class="col-md-4">
                    <textarea name="address" id="address" cols="47" rows="10"> {{ $employee->address }}</textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    <label for="contact" name="contact">Contact:</label>
                </div>
                <div class="col-md-4">
                    <input type="number" name="contact" class="form-control" readonly value="{{ $employee->contact }}">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    <label for="contact" name="contact">Date:</label>
                </div>
                <div class="col-md-4">
                    <input readonly value="{{ $employee->dob }}" type="text" name="contact" class="form-control" id="datepicker-13">
                </div>
            </div>
           
    </div>
    </body>
</html>
@endsection