@extends('layouts/admin')
@section('content')
<div class="row">
   <div class="col">
      <h1 class="display-2">Add Animals</h1>
   </div>
</div>
<div class="row">
   <form action="{{ route('animals.store') }}" class="mt-4" method="POST" enctype="multipart/form-data">
    @csrf
    @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
      @endif{{ csrf_field() }}
    <div class="form-group m-3">
        <label for="animal_name">Animal Name</label>
        <input type="text" name="animal_name" class="form-control" id="animal_name" required>
    </div>
    <div class="form-group m-3">
        <label for="species">Species:</label>
        <select class="form-control" name="species" id="species" required aria-describedby="species">
            <option value="#" selected disabled>---Select Species---</option>
            <option value="Mammals">Mammals</option>
            <option value="Birds">Birds</option>
            <option value="Reptiles">Reptiles</option>
            <option value="Fish">Fish</option>
            <option value="Amphibians">Amphibians</option>
            <option value="Insects">Insects</option>
        </select>
    </div>
    <div class="form-group m-3">
        <label for="join_date">Join Date</label>
        <input type="date" name="join_date" class="form-control" id="join_date" required aria-describedby="join_date">
    </div>
    <button type="submit" class="btn btn-primary">Add Animal</button>
</form>
</div>
@endsection