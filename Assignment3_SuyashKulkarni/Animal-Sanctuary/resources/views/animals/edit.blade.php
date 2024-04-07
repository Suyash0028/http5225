@extends('layouts/admin')
@section('content')
<div class="row">
    <form class="mt-5" action="{{route('animals.index')}}">
        <button type="submit" class="btn btn-dark m-2">Back</button>
    </form>
   <div class="col">
      <h1 class="display-2">Update animal details</h1>
   </div>
</div>
<div class="row">
   <form action="{{ route('animals.update', $animal -> id) }}" method="POST">
    @csrf
    @method('PUT')
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
        <input type="text" name="animal_name" class="form-control" id="animal_name" required value="{{$animal -> animal_name}}">
    </div>
    <div class="form-group m-3">
        <label for="species">Species:</label>
        <select class="form-control" id="species" name="species" required>
            <option value="" disabled>Select Species</option>
            <option value="Mammals" {{ $animal->species == 'Mammals' ? 'selected' : '' }}>Mammals</option>
            <option value="Birds" {{ $animal->species == 'Birds' ? 'selected' : '' }}>Birds</option>
            <option value="Reptiles" {{ $animal->species == 'Reptiles' ? 'selected' : '' }}>Reptiles</option>
            <option value="Fish" {{ $animal->species == 'Fish' ? 'selected' : '' }}>Fish</option>
            <option value="Amphibians" {{ $animal->species == 'Amphibians' ? 'selected' : '' }}>Amphibians</option>
            <option value="Insects" {{ $animal->species == 'Insects' ? 'selected' : '' }}>Insects</option>
        </select>
    </div>
    <div class="form-group m-3">
        <label for="join_date">Join Date</label>
        <input type="date" name="join_date" class="form-control" id="join_date" required aria-describedby="join_date" value="{{$animal -> join_date}}">
    </div>
      <button type="submit" class="btn btn-primary">Update</button>
   </form>
</div>
@endsection