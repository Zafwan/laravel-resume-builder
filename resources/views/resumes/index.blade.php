@extends('layouts.app')

@section('content')
@foreach($resume as $value)
<div class="container">
    {{-- Session Message --}}
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
    {{-- Resume URL --}}
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Your Resume URL') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <label>Resume URL : <a href="{{ url($value->user->url) }}" target="_blank">{{ url($value->user->url) }}</a></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Resume Work Experience --}}
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Work Experience') }}</div>

                <div class="card-body">
                    <div class="row">
                        <form method="post" action="{{ route('resumes.update',$value->id) }}">
                            @csrf
                            @method('patch')
                            <input id="work_experience" type="hidden" name="work_experience" value="{{ $value->work_experience }}">
                            <input type="hidden" name="education" value="{{ $value->education }}">
                            <trix-editor input="work_experience" class="editor"></trix-editor>

                            <button type="submit" class="btn btn-primary mt-5">Save</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    {{-- Resume Education --}}
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Education') }}</div>

                <div class="card-body">
                    <div class="row">
                        <form method="post" action="{{ route('resumes.update',$value->id) }}">
                            @csrf
                            @method('patch')
                            <input id="education" type="hidden" name="education" value="{{ $value->education }}">
                            <input type="hidden" name="work_experience" value="{{ $value->work_experience }}">
                            <trix-editor input="education" class="editor"></trix-editor>

                            <button type="submit" class="btn btn-primary mt-5">Save</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
