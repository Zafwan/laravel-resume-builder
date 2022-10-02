@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($user as $value)
                        Your resume URL : <a href="{{ url($value->url) }}" target="_blank">{{ url($value->url) }}</a>
                    @endforeach

                    <br>
                    <a class="btn btn-primary mt-5" href="{{ route('resumes.index') }}">Edit Resume</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
