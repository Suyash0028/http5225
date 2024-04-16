@extends('layouts/admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div class="card mt-5" style="width: 18rem;">
                        <img class="card-img-top" src="https://sanctuarywebsites.com/wp-content/uploads/2023/08/newsletters.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Animals</h5>
                          <p class="card-text">An animal sanctuary is a haven for animals rescued from abuse, neglect, or exploitation. These sanctuaries provide a safe and compassionate environment where animals can live out their lives free from harm. Through rehabilitation, care, and advocacy, sanctuaries promote the well-being and dignity of animals while educating the public about animal welfare issues.</p>
                          <a href="{{ route('animals.index') }}" class="btn btn-primary">Show Animals</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
