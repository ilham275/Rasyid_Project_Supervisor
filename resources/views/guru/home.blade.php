@extends('layouts.sbguru')
@section('title', 'Home')
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
                    @if (session('msg'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('msg') }}
                        </div>
                    @endif

                    {{ __('You are the teacher!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
