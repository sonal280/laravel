@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="/add" class="btn btn-success">Create New Employee</a>
            <div class="card">
                <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Salary</th>
                        <th>Contact</th>
                        <th>DOB</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                       @foreach ($employees as $employee)
                        <tr>
                            <td> {{ $employee->id }} </td>
                            <td> {{ $employee->name }} </td>
                            <td> {{ $employee->department }} </td>
                            <td> {{ $employee->salary }} </td>
                            <td> {{ $employee->contact }} </td>
                            <td> {{ $employee->dob }} </td>
                            <td> {{ $employee->address }} </td>
                            <td>
                                <a href="/show/{{ $employee->id }}" class="btn btn-warning">Show</a> 
                                <a href="/edit/{{ $employee->id }}" class="btn btn-warning">Edit</a> 
                                <form action="/delete" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$employee->id}}">
                                    <button type="submit" class="btn btn-danger">Delete</button> 
                                </form>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
