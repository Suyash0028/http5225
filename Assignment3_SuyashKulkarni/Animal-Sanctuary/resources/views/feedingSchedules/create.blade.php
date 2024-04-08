@extends('layouts/admin')

@section('content')
<div class="row">
    <form class="mt-5" action="{{ route('animals.index') }}">
        <button type="submit" class="btn btn-dark m-2">Back</button>
    </form>
    <div class="col">
        <h1 class="display-2">Add Schedule</h1>
    </div>
</div>

<div class="row">
    <div class="container">
        <div class="col-md-5">
            <form action="{{ route('feedingSchedules.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group m-3">
                    <label for="animal_id">Select Animal:</label>
                    <select name="animal_id" id="animal_id" class="form-control">
                        <option value="#" selected disabled>---Select Animal---</option>
                        @if($animals && $animals->count() > 0)
                            @foreach ($animals as $animal)
                                <option value="{{ $animal->id }}">{{ $animal->animal_name }}</option>
                            @endforeach
                        @else
                            <option value="#" disabled>No animals available - Please add animal first</option>
                        @endif
                    </select>
                </div>

                <div class="form-group m-3">
                    <label for="feeding_time">Feeding Time:</label>
                    <input type="time" class="form-control" id="feeding_time" name="feeding_time" required>
                </div>

                <div class="form-group m-3">
                    <label for="quantity">Quantity:</label>
                    <input type="number" class="form-control" id="quantity" name="quantity">
                </div>

                <div class="form-group m-3">
                    <label for="feeding_frequency">Feeding Frequency:</label>
                    <select class="form-control" id="feeding_frequency" name="feeding_frequency" required>
                        <option value="#" selected disabled>---Select Frequency---</option>
                        <option value="Once a day">Once a day</option>
                        <option value="Twice a day">Twice a day</option>
                        <option value="Three times a day">Three times a day</option>
                        <option value="Every other day">Every other day</option>
                        <option value="Weekly">Weekly</option>
                        <option value="Varies">Varies</option>
                        <option value="Custom">Custom</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Add Schedule</button>
            </form>
        </div>
    </div>
</div>
@endsection
