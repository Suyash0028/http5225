@extends('layouts/admin')

@section('content')
<div class="row">
    <form class="mt-5" action="{{ route('animals.index') }}">
        <button type="submit" class="btn btn-dark m-2">Back</button>
        <a href="{{ route('animals.edit', $animal->id) }}" class="card-link btn btn-warning">Edit</a>
        <a href="{{ route('animals.trash', $animal->id) }}" class="card-link btn btn-danger">Delete</a>
    </form>
    <div class="col">
        <h1 class="display-2">Animal Details</h1>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-3">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $animal->animal_name }}</h5>
                <h6>{{ $animal->species }}</h6>
                <h6>{{ $animal->join_date }}</h6>
            </div>
        </div>
        <hr/>
        <h2>Feeding Schedule</h2>
        @if($animal->feedingSchedules && $animal->feedingSchedules->count() > 0)
            @foreach ($animal->feedingSchedules as $feedingSchedule)
                <div class="card mt-3" style="width:20rem">
                    <div class="card-header"><strong>{{ $animal->animal_name }}</strong></div>
                    <div class="card-body">
                        <p class="card-text"><strong>Animal Type:</strong> {{ $animal->species }}</p>
                        <p class="card-text"><strong>Feeding Time:</strong> {{ $feedingSchedule->feeding_time }}</p>
                        <p class="card-text"><strong>Quantity:</strong> {{ $feedingSchedule->quantity }}</p>
                        <p class="card-text"><strong>Feeding Frequency:</strong> {{ $feedingSchedule->feeding_frequency }}</p>
                        <a href="{{ route('feedingSchedules.edit', $feedingSchedule->id) }}" class="card-link btn btn-warning">Edit</a>
                        <a href="{{ route('feedingSchedules.trash', $feedingSchedule->id) }}" class="card-link btn btn-danger">Delete</a>
                    </div>
                </div>
            @endforeach
        @else
            <p>No feeding schedule available</p>
        @endif
    </div>
</div>
@endsection