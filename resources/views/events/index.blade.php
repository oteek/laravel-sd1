@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('dashboard.events') }}</div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-3 offset-md-1">
                            <a class="btn btn-link" href="{{ route('events.create') }}">
                                {{ __('dashboard.new_event') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection