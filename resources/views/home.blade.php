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

                    {{ __('You are logged in!') }}




                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    World map
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-12 col-md-offset-1">
                            <div id="worldMap" style="height: 300px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
