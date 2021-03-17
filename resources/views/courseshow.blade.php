@extends('layout.default')

@section('content')
<h1>Course Details</h1>

<table class="table table-bordered">
    <thead>
        <th>Branch Name</th>
        <th>Course Name</th>
        <th>Branch Edit</th>
        <th>Branch Delete</th>
    </thead>
    <tbody>
        @foreach($courses as $course)
        <tr>
            <td>{{$course->bfull}}</td>
            <td>{{$course->cname}}</td>
            <td><a href="">Edit</a></td>
            <td><a href="">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection