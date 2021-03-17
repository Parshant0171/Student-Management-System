@extends('layout.default')

@section('content')
<h1>Branch Details</h1>

<table class="table table-bordered">
    <thead>
        <th>Branch Sort Name</th>
        <th>Branch Full Name</th>
        <th>Branch Edit</th>
        <th>Branch Delete</th>
    </thead>
    <tbody>
        @foreach($branches as $branch)
        <tr>
            <td>{{$branch->bsort}}</td>
            <td>{{$branch->bfull}}</td>
            <td><a href="{{route('branch.edit',['id'=>$branch->id])}}">Edit</a></td>
            <td><a href="{{route('branch.delete',['id'=>$branch->id])}}">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

{{$branches->links()}}
@endsection