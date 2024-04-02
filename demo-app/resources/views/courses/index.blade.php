@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col">
            <h1>Courses</h1>
        </div>
    </div>
    <div class="row">
        @foreach ($courses as $course)
            <h2>
                {{ $course -> Name}}
            </h2>
            <h6>
                {{ $course -> CourseID }}
            </h6>
            <p>
                {{ $course -> Description }}
            </p>
        @endforeach
    </div>
@endsection