@extends('layouts/admin')
@section('content')
<div class="row">
   <div class="col">
      <h1 class="display-2">View all Students</h1>
   </div>
</div>
<div class="row">
   @foreach($students as $student)
   <div class="col-md-4 mb-3">
      <div class="card" style="width: 18rem;">
         <div class="card-body">
            <h5 class="card-title">{{ $student -> fname }} {{ $student -> lname }}</h5>
            <a href="students/{{$student -> id}}" class="card-link  btn btn-primary">View</a>
            <a href="{{ route('students.edit', $student -> id ) }}" class="card-link btn btn-warning">Edit</a>
            <a href="{{ route('students.trash', $student -> id )}}" class="card-link  btn btn-danger">Delete</a>
         </div>
      </div>
   </div>
   @endforeach
</div>
@endsection