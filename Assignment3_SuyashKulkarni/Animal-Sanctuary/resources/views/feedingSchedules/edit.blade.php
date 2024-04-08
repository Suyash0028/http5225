@extends('layouts/admin')

@section('content')
<div class="row">
    <form class="mt-5" action="{{ route('animals.index') }}">
        <button type="submit" class="btn btn-dark m-2">Back</button>
    </form>
    <div class="col">
        <h1 class="display-2">Update Schedule</h1>
    </div>
</div>

<div class="row">
    <div class="container">
        <div class="col-md-5">
            <form action="{{ route('feedingSchedules.update', ['feedingSchedule' => $feedingSchedule->id]) }}" method="POST">
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
                @endif

                <div class="form-group m-3">
                    <label for="animal_id">Select Animal:</label>
                    <select name="animal_id" id="animal_id" class="form-control">
                        <option value="#" selected disabled>---Select Animal---</option>
                        @foreach ($animals as $animal)
                            <option value="{{ $animal->id }}" {{ $animal->id == $feedingSchedule->animal_id ? 'selected' : '' }}>
                                {{ $animal->animal_name }}
                            </option>
                        @endforeach
                    </select>
                </div>                      

                <div class="form-group m-3">
                    <label for="feeding_time">Feeding Time: {{$feedingSchedule -> feeding_time}}</label>
                    <input type="time" class="form-control" id="feeding_time" name="feeding_time" value="{{ date('H:i', strtotime($feedingSchedule->feeding_time)) }}" required>
                </div>

                <div class="form-group m-3">
                    <label for="quantity">Quantity:</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" value="{{$feedingSchedule -> quantity}}">
                </div>

                <div class="form-group m-3">
                    <label for="feeding_frequency">Feeding Frequency:</label>
                    <select class="form-control" id="feeding_frequency" name="feeding_frequency" required>
                        <option value="#" disabled>---Select Frequency---</option>
                        <option value="Once a day" {{ $feedingSchedule->feeding_frequency == "Once a day" ? 'selected' : '' }}>Once a day</option>
                        <option value="Twice a day" {{ $feedingSchedule->feeding_frequency == "Twice a day" ? 'selected' : '' }}>Twice a day</option>
                        <option value="Three times a day" {{ $feedingSchedule->feeding_frequency == "Three times a day" ? 'selected' : '' }}>Three times a day</option>
                        <option value="Every other day" {{ $feedingSchedule->feeding_frequency == "Every other day" ? 'selected' : '' }}>Every other day</option>
                        <option value="Weekly" {{ $feedingSchedule->feeding_frequency == "Weekly" ? 'selected' : '' }}>Weekly</option>
                        <option value="Varies" {{ $feedingSchedule->feeding_frequency == "Varies" ? 'selected' : '' }}>Varies</option>
                        <option value="Custom" {{ $feedingSchedule->feeding_frequency == "Custom" ? 'selected' : '' }}>Custom</option>
                    </select>
                </div>            

                <button type="submit" class="btn btn-primary">Update Schedule</button>
            </form>
        </div>
    </div>
</div>
@endsection