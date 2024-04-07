@extends('layouts/admin')
@section('content')
<div class="row">
   <div class="col">
      <h1 class="display-2">View all Animals</h1>
   </div>
</div>
<div class="row">
   @foreach($animals as $animal)
   <div class="col-md-4 mb-3">
      <div class="card" style="width: 18rem;">
         <div class="card-body">
            <h5 class="card-title">{{ $animal -> animal_name }}</h5>
            <h6>{{ $animal -> species }}</h6>
            <h6>{{ $animal -> join_date }}</h6>
            <a href="animals/{{$animal -> id}}" class="card-link  btn btn-primary">View</a>
            <a href="{{ route('animals.edit', $animal -> id ) }}" class="card-link btn btn-warning">Edit</a>
            <a href="{{ route('animals.trash', $animal -> id )}}" class="card-link  btn btn-danger">Delete</a>
         </div>
      </div>
   </div>
   @endforeach
</div>
@endsection